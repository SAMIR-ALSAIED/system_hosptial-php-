<?php


$coon = new mysqli("localhost","root","","hospital_project");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        input {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  margin-top:70px

}
body{
  background-color:#339af0;
}

    </style>
</head>
<body dir="rtl">


<div class="container">
  <form   class="mt-5"  method="POST" action="add.php" >

    <label for="fname">اسم المريض</label>
    <input type="text"  name="user">

    <label for="lname">العنوان</label>
    <input type="text"  name="address" >
  
    <label for="lname">العمر</label>
    <input type="number"  name="age" >
  

 
    <label for="lname">التيلفون</label>
    <input type="number"  name="phone" >
  


<button onclick="add()" type="submit" class="btn btn-primary "> حفظ</button>

  </form>
</div>
 <script src="main.js"></script>   
</body>
</html>