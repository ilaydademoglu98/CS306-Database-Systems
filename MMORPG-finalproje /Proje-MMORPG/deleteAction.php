<?php
session_start();
$dbc=mysqli_connect("localhost","root","","websitex");
$username = $_GET['username'];

  $sql = "DELETE FROM `account` WHERE `account`.`username` = '$username'" ;  
  mysqli_query($dbc,$sql);

  header("location:deleteData.php");
  die();
  ?>