<?php
$coon = new mysqli("localhost","root","","hospital_project");

$id=$_GET['id'];
$user=$_POST['user'];
$address=$_POST['address'];
$age=$_POST['age'];
$phone=$_POST['phone'];


$update="INSERT INTO users( name, address, age, phone ) 
VALUES ('$user','$address','$age','$phone')";

$coon->query($update);

header("location:index.php");



?>