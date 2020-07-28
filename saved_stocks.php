<?php


$con = mysqli_connect("localhost","root","","citi_bridge","3308");

  session_start();

$user =$_SESSION['user'];
 //echo $user;
$sql = "select * from saved_stocks where username = '$user' " ;

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
                <li> Welcome <?php echo $_SESSION["user"]; ?></li>
                <li><a href="logout.php">LOGOUT</a></li>
            </ul>
            </div>
        </nav>
    
    <table class="table table-hover table-dark">
<!--<table align ="center" border ="1px" style ="width:600px; line-height:40px;">-->
<tr>
<th colspan="6"><h2 style="text-align: center;">Live Stock Prices</h2>

</tr>
<t>
<th>STOCK_NAME</th>
<th>NSE PRICE</th>
<th>BSE PRICE</th>
<th>ARBITRAGE</th>
<th>HIGHER</th>
<th>TIME</th>
</t>
<?php
while($rows = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $rows['stock_name']; ?></td>
<td><?php echo $rows['nse']; ?></td>
<td><?php echo $rows['bse']; ?></td>
<td><?php echo $rows['diff_perc']; ?></td>
<td><?php echo $rows['higher']; ?></td>
<td><?php echo $rows['timestamp']; ?></td>
</tr>
<?php
}
?>
</body>
</html>
<!--
$arr = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $arr[] = $row;
        
    }

echo json_encode($arr);
-->

