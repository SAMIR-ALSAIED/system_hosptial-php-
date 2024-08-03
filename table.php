<?php

    $coon = new mysqli("localhost","root","","hospital_project");

    $select= "SELECT * FROM users ";

    $result= $coon -> query ($select);



 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body dir="rtl">
    

<!-- table -->
<a href="form.php"> <button class="  btn btn-primary mb-1 mt-3 me-3  p-2" >اضافة مريض</button></a>

<table class="table  text-center  table-hover  table-bordered  mt-5">
  <thead>
    <tr>
      <th >id</th>
      <th>اسم المريض</th>
      <th>العنوان</th>
      <th >العمر</th>
      <th >رقم التيلفون</th>
      <th > التحكم</th>

    </tr>
  </thead>
  <tbody>

    <tr>
<?php

while(    $pro =  mysqli_fetch_assoc($result)){



?>
  
      <td><?= $pro['id'] ?></td>
     <td><?= $pro['name'] ?></td>
      <td><?= $pro['address'] ?></td>
      <td><?= $pro['age'] ?></td>
      <td><?= $pro['phone'] ?></td>
      <td>

     <a href="delete.php ?id=<?= $pro['id'] ?>?>">  <button class=" btn btn-danger ms-2">حذف</button></a>
       <button class=" btn btn-warning"> تعديل</button>


      </td>
    </tr>
    <?php
  } 
  ?> 
  </tbody>
</table>







</body>
</html>