<?php   
$con = mysqli_connect('127.0.0.1', 'root','');

if(!$con)
{
    echo 'not connected to server';
}
if(!mysqli_select_db($con,'travel'))
{
    echo 'database not selected';
}

$Email = $_POST['Email'];
    $pass = $_POST['pass'];

$sql = "INSERT INTO reg (Email,pass) VALUES ('$Email','$pass')";
if(!mysqli_query($con,$sql))
{
    echo 'not inserted';
}
else
{
    header('location:index.php');
}
header("refresh:2; location:index.php");

?>