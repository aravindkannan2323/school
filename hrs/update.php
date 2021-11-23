<?php

include '../database/database.php';

$dbobj = new Database();
$connection = $dbobj->createconnection();


$username   = $_POST['username'];
$email      = $_POST['email'];
$permission   =  $_POST['permission'];
$password   = $_POST['password'];
$id         = $_POST['id'];

$permission  = implode(',', $permission);

$query = "update hrs set  username ='".$username."' , email = '".$email."' , permission = '".$permission."' , password = '".$password."' where id=".$id;
if(mysqli_query($connection,$query)){
    echo "hr update succesfully";
}
else{
    echo 'Error updating hr';
}

header('location: index.php');