<?php

$conn=mysqli_connect('127.0.0.1','root','');

if(!$conn)
{
    echo "not connected to server";
}
if(!mysqli_select_db($conn,'Admin'))
{
    echo "database not selected";
}

$Surname=$_POST["Surname"];
$Firstname=$_POST["Firstname"];
$Gender=$_POST["Gender"];
$Nationality=$_POST["Nationality"];
$Email=$_POST["Email"];
$Phone_number=$_POST["Phone_number"];
$username = $_POST['username'];  
$password = $_POST['password']; 


$sql="INSERT INTO alpha (Surname,Firstname,Gender,Nationality,Email,Phone_number,username,password) VALUES ('$Surname','$Firstname','$Gender','$Nationality','$Email','$Phone_number','$username','$password')";

if(!mysqli_query($conn,$sql))
{ 
    echo 'not inserted';
}
else{
    echo 'Submitted successfully';
  }

header("refresh:3;url=login.html");


?>
