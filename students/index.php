<?php
//session_start();

//$_SESSION['userid'] = 121;echo 'session userid is set ';

//echo $_SESSION['userid'];

include '../database/database.php'; 

include '../includes/navbar.php';

// if user doest not have "List permission", redirect to login page
if(!in_array('List', $_SESSION['permission'])){
  header('Location: ../access/login.php');
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Students list</title>
  </head>
  <body>
    
<?php

$dbobj = new Database();
$connection = $dbobj->createconnection();

$query = "SELECT * FROM Students";
$result = mysqli_query($connection,$query);

$students = mysqli_fetch_all($result,MYSQLI_ASSOC);

//print_r($students);
?>
<div class="container">
<h1>Students</h1>

<?php 
//print_r($_SESSION['permission']);

if(in_array('Add', $_SESSION['permission']) ){ ?>
<a href="register.php" class="btn btn-success float-end">Add New User</a>
<?php } ?>
<table class="table">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Username</th>
        <th>Roll No</th>
        <th>Class</th>
        <th>Degree</th>
        <th>DOB</th>
        <th>Age</th>
        <th>Blood Group</th>
        <th>Email</th>
        <th>Mobile No</th>
        <th>Action</th>
    </tr> 
    <?php
    foreach ($students as $student) { ?>
    <tr>
        <td><?php echo $student['id']; ?></td>
        <td><?php echo $student['name']; ?></td>
        <td><?php echo $student['username']; ?></td>
        <td><?php echo $student['rolleno']; ?></td>
        <td><?php echo $student['class']; ?></td>
        <td><?php echo $student['degree']; ?></td>
        <td><?php echo $student['dob']; ?></td>
        <td><?php echo $student['age']; ?></td>
        <td><?php echo $student['bloodgroup']; ?></td>
        <td><?php echo $student['email']; ?></td>
        <td><?php echo $student['mobileno']; ?></td>
        

        <td>
          <?php if(in_array('Edit', $_SESSION['permission']) ) : ?>
            <a href="edit.php?id=<?php echo $student['id']; ?>" class="btn btn-success">Edit</a>
          <?php endif; ?> 

          <?php if(in_array('Delete', $_SESSION['permission']) ) : ?>
            <a href="delete.php?id=<?php echo $student['id']; ?>" class="btn btn-danger">Delete</a>
          <?php endif; ?>           
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


