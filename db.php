<?php
$conn = mysqli_connect('localhost','root','','data65');
if(mysqli_connect_errno()){
  echo 'Code errors : ' . mysqli_connect_errno() . "</br>";
  echo 'Connection errors : ' .mysqli_connect_error() . "</br>";
  die('Fix the problem');
};


$select = "SELECT * from is_inventura_2022";
$result = mysqli_query($conn,$select);