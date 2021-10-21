<?php

include 'Database.php';

$dbobj = New Database();
$connection = $dbobj->createconnection();

$id = $_GET['id'];
$query = "DELETE FROM teachers WHERE id=".$id;

if(mysqli_query($connection,$query)){
    echo 'teacher delete successfully';
}
else{
    echo 'error deleting teacher: '.mysqli_error($connection);
}
?>