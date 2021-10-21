<?php

include '../database/datebase.php';

$dbobj = new Database();
$connection = $dbobj->createconnection();


$id = $_GET['id'];
$query = "DELETE FROM students WHERE id=".$id;

if(mysqli_query($connection,$query)){
    echo 'student delete successfully';
}
else{
    echo 'error deleting student: '.mysqli_error($connection);
}
?>