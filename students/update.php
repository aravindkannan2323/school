<?php


// connect to the datbase

// database credentials
$server_name = "localhost";
$server_username ="root";
$server_password = "";
$db_name = "school";

// create connection
$connection = mysqli_connect($server_name, $server_username, $server_password, $db_name);

//check the connection
if(!$connection){
    die("Connection Failed: ".  mysqli_connect_error());
} else {
    echo "Connected to database successfully";
}

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
$id         = $_POST['id'];

$query = "update students set name='".$name."', username ='".$username."' , rolleno = '".$rolleno."', class = '".$class."',  dob = '".$dob."' , age = '".$age."' , bloodgroup = '".$bloodgroup."' , email = '".$email."' , mobileno = '".$mobileno."' , password = '".$password."' where id=".$id;
if(mysqli_query($connection,$query)){
    echo "student update succesfully";
}
else{
    echo 'Error updating student';
}