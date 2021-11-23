<?php

include '../database/database.php';

$dbobj = new Database();
$connection = $dbobj->createconnection();

//print_r($_POST);

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM administrators WHERE username='".$username."' AND password='".$password."'";
$result = mysqli_query($connection, $query);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

//print_r($users);

if(count($users) == 0){
    echo "Username and password does not exist";
}
else {
    echo 'User exists';
}

?>