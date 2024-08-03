<?php



$coon = new mysqli("localhost","root","","hospital_project");



$user= $_POST['user'];
$address=$_POST['address'];
$age=$_POST['age'];
$phone= $_POST['phone'];


$insert="INSERT INTO users( name, address, age, phone) VALUES ('$user','$address','$age','$phone')";

$coon->query($insert);
header("location:index.php");



?>