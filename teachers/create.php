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