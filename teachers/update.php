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

$name               =   $_POST['name'];
$dob                =   $_POST['dob'];
$age                =   $_POST['age'];
$email              =   $_POST['email'];
$department         =   $_POST['department'];
$qualification      =   $_POST['qualification'];
$annualsalary       =   $_POST['annualsalary'];
$mobileno           =   $_POST['mobileno'];
$id                 =   $_POST['id'];

$query = "update teachers set name='".$name."', dob = '".$dob."' , age = '".$age."' , email = '".$email."' , department = '".$department."', qualification = '".$qualification."', annualsalary = '".$annualsalary."',  mobileno = '".$mobileno."' where id=".$id;

if(mysqli_query($connection,$query)){
    echo "teacher update succesfully";
}
else{
    echo 'Error updating teacher';
}