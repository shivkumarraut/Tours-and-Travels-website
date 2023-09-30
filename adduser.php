<?php
$email=$_REQUEST["email"];
$phone=$_REQUEST["phone"];

$_Role=$_REQUEST["Role"];
$conn=mysqli_connect("localhost:3307","root","","kesaritours");
if(!$conn)
{
die("Connection failed:".mysqli_connect_error());
}
$sql= "INSERT INTO user(email,phone,Role)VALUES('$email','$phone','$_Role') ";

if (mysqli_query($conn,$sql))
{
echo "User Added";
}

else
{
echo "Error:"."<br>".mysqli_error($conn);
}

mysqli_close($conn);
?>
