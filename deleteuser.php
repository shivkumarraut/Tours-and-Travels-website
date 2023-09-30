<?php
$email=$_REQUEST["email"];

$conn=mysqli_connect("localhost:3307","root","","kesaritours");
if(!$conn)
{
die("Connection failed:".mysqli_connect_error());
}
$sql= "DELETE FROM user WHERE  email='$email'";

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