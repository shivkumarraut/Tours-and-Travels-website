<?php
$email=$_REQUEST["email"];
$phone=$_REQUEST["phone"];
$cop=$_REQUEST["cop"];
$conp=$_REQUEST["conp"];
$_Role=$_REQUEST["Role"];
$conn=mysqli_connect("localhost:3307","root","","kesaritours");
if(!$conn)
{
die("Connection failed:".mysqli_connect_error());
}
$sql= "INSERT INTO Registration(email,phone,password,confirm_password,Role)VALUES('$email','$phone','$cop','$conp','$_Role') ";

if (mysqli_query($conn,$sql))
{
echo "Registration Successfull!!!Explore Now";
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
<div id="center_button"><button onclick="location.href='login.html'">Back to Home</button></div>
</body>
</head>
</html>