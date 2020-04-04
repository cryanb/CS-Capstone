<?php
$servername = "localhost";
$username = "codyblanford";
$password = "12345";
$dbname = "ShoeOrders";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn -> connect_error){
  die("Connection failed: " . $conn->connect_error);
}


$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$shoesize = $_POST["shoesize"];
$shoenumber = $_COOKIE["shoeid"];

$sql = "INSERT INTO Orders (firstname,lastname,email,shoesize,shoeID) values ('$firstname' , '$lastname' , '$email', '$shoesize', '$shoenumber')";

if ($conn ->query($sql) === TRUE){
  echo "Record created";
}
else{
  echo "Error creating table" . $conn->error;
}

 ?>
