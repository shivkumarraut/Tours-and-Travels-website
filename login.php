<?php
$email=$_REQUEST["email"];
$pass=$_REQUEST["pass"];

$conn=mysqli_connect("localhost:3307","root","","kesaritours");
if(!$conn)
{
die("Connection failed:".mysqli_connect_error());
}
$sql="SELECT * FROM registration WHERE email='$email' AND password='$pass'";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)==1)
{
$row=mysqli_fetch_assoc($result);
if($row['Role']=='Admin')
{
	header("location:admin.html");
   }

else if ($row['email']==$email && $row['password']==$pass)
{
	header("location:tours.html");
}
}
else
echo "Incorrect Password";
mysqli_close($conn);
?>


