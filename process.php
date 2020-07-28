<?php


$con = mysqli_connect("localhost","root","","citi_bridge","3308");

$user = $_POST['user'];
$pass = $_POST['pass'];

$sql = "select * from user_details where username = '$user' and password = '$pass'" ;

$result = mysqli_query($con,$sql);


$row = mysqli_fetch_array($result);
if($row['username']==$user && $row['password']==$pass)
{
    echo 'SUCCESS';
    echo 'WELCOME '.$row['username'];
    session_start();
    $_SESSION['user'] = $user;
    $url = ".\page2.php?user=".$user;
    header('Location: '.$url);
}
else
{
    echo 'FAILURE';
    header('Location: .\loginx.php');
}

?>