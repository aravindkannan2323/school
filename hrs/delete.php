<?php

include '../database/database.php';

$dbobj = new Database();
$connection = $dbobj->createconnection();


$id = $_GET['id'];
$query = "DELETE FROM hrs WHERE id=".$id;

if(mysqli_query($connection,$query)){
    echo 'hr delete successfully';
}
else{
    echo 'error deleting hr: '.mysqli_error($connection);
}

header ('location: index.php');
?>