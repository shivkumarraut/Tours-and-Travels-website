<?php
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];
$conn=mysqli_connect("localhost:3307","root","","logindata");
if(!$conn)
{
die("Connection failed:".mysqli_connect_error());
}
$sql="SELECT * FROM logindetails WHERE email='$email' AND password='$password'";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)==1)
{
$row=mysqli_fetch_assoc($result);
if ($row['email']==$email && $row['password']==$password)
{
header("Location: http://www.youtube.com"); /* Redirect browser */
 exit();
}
}
else
echo "Incorrect Password";
mysqli_close($conn);
?>