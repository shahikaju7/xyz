<?php 
$Name = $-POST['Name'];
$Age= $-POST['Age'];
$Mbile no = $-POST['Mobile no'];
$Others = $-POST['Others'];
if (!empty($Name)|| !empty($Age)|| empty($Mobile no) || !empty($others))
{
$servername = "localhost";
$username = "username";
$password= "password";
$dbname = "form";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{
echo "Connected successfully";
die();
}
?>