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

$Name = $_POST['Name'];
$Email = $_POST['Email'];


$sql = "INSERT INTO reg (Name,Email) VALUES ('Name','Email')";
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



