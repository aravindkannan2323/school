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
$id = $_GET['id'];
$query = "DELETE FROM students WHERE id=".$id;

if(mysqli_query($connection,$query)){
    echo 'student delete successfully';
}
else{
    echo 'error deleting student: '.mysqli_error($connection);
}
?>