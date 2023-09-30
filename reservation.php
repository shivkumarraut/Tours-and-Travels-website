<?php
$name=$_REQUEST["name"];
$n1=$_REQUEST["n1"];
$email=$_REQUEST["email"];
$phone=$_REQUEST["phone"];
$gender=$_REQUEST["gender"];
$tour=$_REQUEST["tour"];
$city=$_REQUEST["city"];
$travel=$_REQUEST["travel"];
$selectclass=$_REQUEST["selectclass"];
$traveller=$_REQUEST["traveller"];
$moderadio=$_REQUEST["moderadio"];
$roomtype=$_REQUEST["roomtype"];
$no_room=$_REQUEST["no_room"];
$person=$_REQUEST["person"];
$travellers=$_REQUEST["travellers"];

$conn=mysqli_connect("localhost:3307","root","","kesaritours");
if(!$conn)
{
die("Connection failed:".mysqli_connect_error());
}
$sql= "INSERT INTO Booking(Name,Age,email,Phone,gender,Tour,City,TravelDate,CLASS,No_Travellers,Route,RoomType,RoomNo,Travellers,AvailFacilities)
VALUES('$name','$n1','$email','$phone','$gender','$tour','$city','$travel','$selectclass','$traveller','$moderadio','$roomtype','$no_room','$person','$traveller')";
if (mysqli_query($conn,$sql))
{
echo '<script type="text/javascript">';
echo ' alert("Data Saved")';  
echo '</script>';

}
else
{
echo "Error:"."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?>