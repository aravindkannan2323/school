<?php

include '../database/database.php';

$dbobj = new Database();
$connection = $dbobj->createconnection();

$username     =  $_POST['username'];
$email        =  $_POST['email'];
$permission   =  $_POST['permission'];
$password     =  $_POST['password'];
$id           =  $_POST['id'];

$permission  = implode(',', $permission);

$query = "update administrators set username='".$username."',  email = '".$email."' ,  permission = '".$permission."' , password = '".$password."' where id=".$id;

if(mysqli_query($connection,$query)){
    echo "administrator update succesfully";
}
else{
    echo 'Error updating administrator';
}
header ('location: index.php');