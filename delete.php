<?php


$coon = new mysqli("localhost","root","","hospital_project");


$id=$_GET['id'];

$del="DELETE FROM users where id='$id'";

    $coon-> query($del);

    header("location:index.php");




?>