<?php

include 'databsase.php';

$dbobj = New Database();
$connection = $dbobj->createconnection();

//insert data
$name       = $_POST['name'];
$username   = $_POST['username'];
$rolleno    = $_POST['rolleno'];
$class      = $_POST['class'];
$dob        = $_POST['dob'];
$age        = $_POST['age'];
$bloodgroup = $_POST['bloodgroup'];
$email      = $_POST['email'];
$mobileno   = $_POST['mobileno'];
$password   = $_POST['password'];


$query = "INSERT INTO students ( name, username, rolleno, class, dob, age, bloodgroup, email, mobileno, password)
VALUES ('$name', '$username', '$rolleno', '$class', '$dob', '$age', '$bloodgroup', '$email', '$mobileno', '$password')";

 if (mysqli_query($connection,$query)) { 
       echo "student record created sucessfully!";
     }else {
         echo 'Error creeting data: ' .mysqli_error($connection);
     }

?>