<?php
$tourid=$_REQUEST["tourid"];
$name=$_REQUEST["name"];
$duration=$_REQUEST["duration"];
$fare=$_REQUEST["fare"];
$conn=mysqli_connect("localhost:3307","root","","kesaritours");
if(!$conn)
{
die("Connection failed:".mysqli_connect_error());
}
$sql= "INSERT INTO toursdata(tourid,tourname,duration,fare)VALUES('$tourid','$name','$duration','$fare') ";

if (mysqli_query($conn,$sql))
{
echp"<br>Sucessfully added;"
}

else
{
echo "Error:"."<br>".mysqli_error($conn);
}

mysqli_close($conn);
?>
<html>
<head>
<body>
<br>
