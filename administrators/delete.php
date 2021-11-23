<?php

include '../database/database.php';

$dbobj = new Database();
$connection = $dbobj->createconnection();

$id = $_GET['id'];
$query = "DELETE FROM administrators WHERE id=".$id;

if(mysqli_query($connection,$query)){
    echo 'administrator delete successfully';
}
else{
    echo 'error deleting administrator: '.mysqli_error($connection);
}

header ('location: index.php');

?>
