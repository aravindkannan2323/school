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

$Name               =   $_POST['name'];
$Dob                =   $_POST['dob'];
$Age                =   $_POST['age'];
$Email              =   $_POST['email'];
$Department         =   $_POST['department'];
$Qualification      =   $_POST['qualification'];
$monthlysalary       =   $_POST['monthlysalary'];
$Mobileno           =   $_POST['mobileno'];
$Id                 =   $_POST['id'];

$query = "update teachers set name='".$name."', dob = '".$dob."' , age = '".$age."' , email = '".$email."' , department = '".$department."', qualification = '".$qualification."', monthlysalary = '".$monthlysalary."',  mobileno = '".$mobileno."' where id=".$id;

if(mysqli_query($connection,$query)){
    echo "teacher update succesfully";
}
else{
    echo 'Error updating teacher';
}