<?php

//header('Content-Type: application/json');

$con = mysqli_connect("localhost","root","","citi_bridge","3308");

$stockname = $_POST['stockname'];


$sql = "select * from historic_stock_data where stock_name = '$stockname' " ;

$result = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="page1.css">
    </head>

<body style="background-color: #57d4ab">
    
     <nav>
            <div class="nav-links">
            <ul>
                <li><a href="page2.php">HOME</a></li>
                <li><a href="index.php">LIVE DATA</a></li>
                <li><a href="historical.php">HISTORICAL ANALYSIS</a></li>
                <li><a href="saved_stocks.php">MY SAVED STOCKS</a></li>
                <li><a href="logout.php">LOGOUT</a></li>
            </ul>
            </div>
        </nav>
    
    <table class="table table-hover table-dark">
<!--<table align ="center" border ="1px" style ="width:600px; line-height:40px;">-->
<tr>
    <th colspan="5"><h2 style="text-align: center;">Historic Stock Prices</h2></th>

</tr>
<t>
<th>STOCK_NAME</th>
<th>NSE PRICE</th>
<th>BSE_PRICE</th>
<th>AVG PRICE</th>
<th>DATE</th>
</t>
<?php
while($rows = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $rows['stock_name']; ?></td>
<td><?php echo $rows['nse_close']; ?></td>
<td><?php echo $rows['bse_close']; ?></td>
<td><?php echo $rows['nse_avg']; ?></td>
<td><?php echo $rows['date']; ?></td>
</tr>
    

<!--

$arr = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $arr[] = $row;
        
    }
//$fp = fopen('C:\wamp64\www\app1\results.json','w');
//fwrite($fp,json_encode($arr));
//fclose($fp);
echo json_encode($arr,JSON_NUMERIC_CHECK);
-->
<?php
}
?>
 </body>
</html>