<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>student list</title>
  </head>
  <body>
    
   

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
$query = "SELECT * FROM Students";
$result = mysqli_query($connection,$query);

$students = mysqli_fetch_all($result,MYSQLI_ASSOC);

//print_r($students);
?>
<div class="container">
<h1>list of all student</h1>
<a href="register.php" class="btn btn-success float-end">Add New User</a>
<table class="table">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>username</th>
        <th>rolleno</th>
        <th>class</th>
        <th>dob</th>
        <th>age</th>
        <th>bloodgroup</th>
        <th>email</th>
        <th>mobileno</th>
        <th>password</th>
        <th>action</th>
    </tr> 
    <?php
    foreach ($students as $student) { ?>
    <tr>
        <td><?php echo $student['id']; ?></td>
        <td><?php echo $student['name']; ?></td>
        <td><?php echo $student['username']; ?></td>
        <td><?php echo $student['rolleno']; ?></td>
        <td><?php echo $student['class']; ?></td>
        <td><?php echo $student['dob']; ?></td>
        <td><?php echo $student['age']; ?></td>
        <td><?php echo $student['bloodgroup']; ?></td>
        <td><?php echo $student['email']; ?></td>
        <td><?php echo $student['mobileno']; ?></td>
        <td><?php echo $student['password']; ?></td>
        
        <td>
            <a href="edit.php?id=<?php echo $student['id']; ?>" class="btn btn-success">edit</a>
            <a href="delete.php?id=<?php echo $student['id']; ?>" class="btn btn-danger">delete</a>
        </td>
    </tr>

    <?php
    }
    ?>
</table>
</div>

 <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>


