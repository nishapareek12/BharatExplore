<?php
error_reporting(0);
$conn = mysqli_connect("localhost" ,"root", "" ,"test1");
if ($conn === false)
{
    die ("Oops could not connect to database". mysqli_connect_error());
}
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$name = $_REQUEST['name'];
$sql= "INSERT INTO registration VALUES ('$email'  ,'$password', '$name')";
if (mysqli_query ($conn ,$sql))
{
    echo '<script>alert("You are now signed in !")</script>';
echo n12br("\n$email \n $password\n "." $name ");
}
else
{
echo "ERROR : sorry $sql ." .mysqli_error($conn);
}
mysqli_close($conn);
?>