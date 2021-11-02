<?php

include '../database/database.php';

$dbobj = new Database();
$connection = $dbobj->createconnection();

$id = $_GET['id'];
$query = "DELETE FROM teachers WHERE id=".$id;

if(mysqli_query($connection,$query)){
    echo 'teacher delete successfully';
}
else{
    echo 'error deleting teacher: '.mysqli_error($connection);
}

header ('location: index.php');
?>