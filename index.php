<?php 
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="container text-center d-flex align-items-center justify-content-center">
    <h3>Results of "is_inventura_2022" table fetch </h3> 
</div>

<h4 class="mt-1 mb-4 text-center">Total number of products : <?php $numOfProducts = mysqli_num_rows($result); echo $numOfProducts ;?></h4>

<div class="container d-flex justify-content-center align-items-center">
<table class="table-primary table-bordered text-dark">
  <tr>
    <th scope="col">id</th>
    <th scope="col">pid</th>
    <th scope="col">product_sku</th>
    <th scope="col">product_name</th>
    <th scope="col">product_quantity</th>
    <th scope="col">difference</th>
  </tr>
  <tr>
    <?php
      //LOOP TILL END OF DATA
     while($rows = mysqli_fetch_assoc($result)){


    ?>
    <tr>
      <td><?php  echo $rows['id'];?></td>
      <td><?php  echo $rows['pid'];?></td>
      <td><?php  echo $rows['product_sku'];?></td>
      <td><?php  echo $rows['product_name'];?></td>
      <td><?php  echo $rows['product_quantity'];?></td>
      <td><?php  echo $rows['difference'];?></td>
    </tr>
   <?php 
     }
   ?>
  </tr>
</table>
</div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>