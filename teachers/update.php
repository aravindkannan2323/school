<?php

include '../database/database.php';

$dbobj = new Database();
$connection = $dbobj->createconnection();

$name               =   $_POST['name'];
$dob                =   $_POST['dob'];
$age                =   $_POST['age'];
$email              =   $_POST['email'];
$department         =   $_POST['department'];
$qualification      =   $_POST['qualification'];echo $qualification; 
$monthlysalary      =   $_POST['monthlysalary'];
$mobileno           =   $_POST['mobileno'];
$id                 =   $_POST['id'];


$department = implode(',', $department);

$query = "update teachers set name='".$name."', dob = '".$dob."' , age = '".$age."' , email = '".$email."' , department = '".$department."', qualification = '".$qualification."', monthlysalary = '".$monthlysalary."',  mobileno = '".$mobileno."' where id=".$id;

if(mysqli_query($connection,$query)){
    echo "teacher update succesfully";
}
else{
    echo 'Error updating teacher';
}

header ('location: index.php');