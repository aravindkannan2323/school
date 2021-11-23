<?php

include '../database/database.php';

$dbobj = new Database();
$connection = $dbobj->createconnection();

//insert data
$username      = $_POST['username'];
$email         = $_POST['email'];
$permission   =  $_POST['permission'];
$password      = $_POST['password'];

$permission = implode(',', $permission);

$query = "INSERT INTO hrs ( username, email, permission, password)
VALUES ('$username', '$email', '$permission', '$password')";

if (mysqli_query($connection,$query)) { 
    echo "hr record created sucessfully!";
  }else {
      echo 'Error creeting data: ' .mysqli_error($connection);
  }

  header ('location: index.php');

?>
