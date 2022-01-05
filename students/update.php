<?php

include '../database/database.php';

$dbobj = new Database();
$connection = $dbobj->createconnection();

$name       = $_POST['name'];
$username   = $_POST['username'];
$rolleno    = $_POST['rolleno'];
$class      = $_POST['class'];
$degree     = $_POST['degree'];echo $degree;
$dob        = $_POST['dob'];
$age        = $_POST['age'];
$bloodgroup = $_POST['bloodgroup'];
$email      = $_POST['email'];
$mobileno   = $_POST['mobileno'];
$password   = $_POST['password'];
$id         = $_POST['id'];

$query = "update students set name='".$name."', username ='".$username."' , rolleno = '".$rolleno."', class = '".$class."', degree = '".$degree."',  dob = '".$dob."' , age = '".$age."' , bloodgroup = '".$bloodgroup."' , email = '".$email."' , mobileno = '".$mobileno."' , password = '".$password."' where id=".$id;
if(mysqli_query($connection,$query)){
    echo "student update succesfully";
}
else{
    echo 'Error updating student';
}

header('location: index.php');