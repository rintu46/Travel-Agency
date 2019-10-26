<?php   
$con = mysqli_connect('127.0.0.1', 'root','');

if(!$con)
{
    echo 'not connected to server';
}
if(!mysqli_select_db($con,'hotel'))
{
    echo 'database not selected';
}

$Name = $_POST['Name'];
$Email = $_POST['Email'];
$phone = $_POST['phone'];

$sql = "INSERT INTO info (Name,Email,phone) VALUES ('$Name','$Email','$phone')";
if(!mysqli_query($con,$sql))
{
    header('location:show2.php');
}
else
{
    header('location:show.php');
}
header("refresh:2222; location:index.php");

?>



