<?php

include '../database/database.php';

$dbobj = new Database();
$connection = $dbobj->createconnection();

//insert data
$name            = $_POST['name'];
$dob             = $_POST['dob'];
$age             = $_POST['age'];
$email           = $_POST['email'];
$department      = $_POST['department'];
$qualification   = $_POST['qualification'];
$monthlysalary   = $_POST['monthlysalary'];
$mobileno        = $_POST['mobileno'];

$query = "INSERT INTO teachers ( name, dob, age, email, department, qualification, monthlysalary, mobileno)
VALUES ('$name', '$dob', '$age', '$email', '$department', '$qualification', '$monthlysalary', '$mobileno')";

 if (mysqli_query($connection,$query)) { 
       echo "teacher record created sucessfully!";
     }else {
         echo 'Error creeting data: ' .mysqli_error($connection);
     }

?>