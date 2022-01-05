<?php
session_start();
include '../database/database.php';

$dbobj = new Database();
$connection = $dbobj->createconnection();

//print_r($_POST);

$username = $_POST['username'];
$password = $_POST['password'];
$usertype = $_POST['usertype'];

if($usertype == 'admin'){
    $query = "SELECT * FROM administrators WHERE username='".$username."' AND password='".$password."'";
}
else {
    $query = "SELECT * FROM hrs WHERE username='".$username."' AND password='".$password."'";
}

$result = mysqli_query($connection, $query);
$user = mysqli_fetch_array($result, MYSQLI_ASSOC);

//print_r($user);//echo count($user);

if(isset($user['id'])){
    echo 'user exists';
    $_SESSION['userid']      = $user['id'];
    $_SESSION['username']    = $user['username'];
    $_SESSION['permission']  = explode(',', $user['permission']);
    $_SESSION['usertype']    = $usertype;
    header('Location: ../students/index.php');
}
else {
    echo 'user does not exist';
    $_SESSION['userid'] = 0;
    header('Location: ../access/login.php');
}

?>