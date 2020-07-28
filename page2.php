<?php
$con = mysqli_connect("localhost","root","","citi_bridge","3308");
$query="select stock_name, nse, bse,diff_perc,higher,timestamp from current order by diff_perc desc limit 5";
$result = mysqli_query($con,$query);
session_start();

$user =$_SESSION['user'];
$url1 = ".\saved_stocks.php?user=".$user;

for($i=1;$i<=5;$i++)
{
    if(array_key_exists($i, $_POST)) { 
         echo '<script>alert("STOCK SAVED")</script>'; 
    $con1 = mysqli_connect("localhost","root","","citi_bridge","3308");
    $nse=$_POST['nse'];
    $bse= $_POST['bse'];
    $stockname=$_POST['stock_name'];
    $diff_perc=$_POST['diff_perc'];
    $higher=$_POST['higher'];
    $sql1="insert into saved_stocks (username,stock_name,nse,bse,diff_perc,higher) values ('$user','$stockname','$nse','$bse','$diff_perc','$higher')";
    $result1 = mysqli_query($con1,$sql1);
} 
}

?>

<!DOCTYPE html>
<html>

<head>
   
    <title>NSE BSE Arbitrage Recommendation System</title>
    <link rel="stylesheet" href="page1.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>

<body>
    <div class="main">
        <nav>
            <div class="nav-links">
            <ul>
                <li><a href="page1.php">HOME</a></li>
                <li><a href="index.php">CURRENT</a></li>
                <li><a href="historical.php">HISTORICAL ANALYSIS</a></li>
                <li><a href="saved_stocks.php">MY SAVED STOCKS</a></li>
                <li> Welcome <?php echo $_SESSION["user"]; ?></li>
                <li><a href="logout.php">LOGOUT</a></li>
            </ul>
            </div>
        </nav>
    
    <table class="table table-hover table-dark" style="right:70%">
<!--<table align ="center" border ="1px" style ="width:600px; line-height:40px;">-->
<tr>
<th colspan="6"><h2 style="text-align: center;">RECOMMENDED ARBITRAGE OPPORTUNITIES</h2>

</tr>
<t>

<th>STOCK_NAME</th>
<th>NSE PRICE</th>
<th>BSE PRICE</th>
<th> ARBITRAGE</th>
<th> HIGHER</th>
<th>SAVE STOCK</th>
<tr>
 
</t>

<?php
$i=0;
while($rows = mysqli_fetch_assoc($result))
{
    $i++;
?>
<form action="" method="POST">
<tr>
<td><input type="text" name="stock_name" readonly value="<?php echo $rows['stock_name']; ?>"/></td>
<td><input type="text" name="nse" readonly value="<?php echo $rows['nse']; ?>"/></td>
<td><input type="text" name="bse" readonly value="<?php echo $rows['bse']; ?>"/></td>
<td><input type="text" name="diff_perc" readonly value="<?php echo $rows['diff_perc']; ?>"/></td>
<td><input type="text" name="higher" readonly value="<?php echo $rows['higher']; ?>"/></td>
<td><input id="<?php echo $i; ?>" onclick="changeText('<?php echo $i; ?>');" type="submit" value="Save" name="<?php echo $i; ?>" style="align:center" />&nbsp;</td>
  
</tr>
</form>
<?php
}
?>
<!--

//if ($_POST['st1'])
//{
//    mysql_data_seek($result, 0);
//    $row=mysqli_fetch_row($result);
//    $stock_name = $_POST[$row['stock_name']];
//    $nse = $_POST[$row['NSE']];
//    $bse = $_POST[$row['BSE']];
//    $sql = "INSERT saved_stocks (stock_name,nse,bse)
//VALUES ('$stock_name','$nse','$bse')";
//}
?>
-->
 </div>
        
</body>
<script type="text/javascript">
    function changeText(i){
        var submit = document.getElementById(i);
        submit.value = 'Saved';
        return false;
    };
</script>
</html>