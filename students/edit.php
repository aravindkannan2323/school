<?php
include '../database/database.php';

include '../includes/navbar.php';
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>edit student</title>
  </head>

  <?php


$dbobj = new Database();
$connection = $dbobj->createconnection();

$query = "SELECT * FROM Students WHERE id=" . $_GET['id'];
$result = mysqli_query($connection,$query);

$student = mysqli_fetch_assoc($result); 

//print_r($students);
?>

  <body>
      <div class="container">
    <h1>edit student</h1>
    <form action="update.php" method="POST">
        <div class="row">
            <div class='col-md-6'>
 <div>
  <label for="Inputname" class="form-label">Name</label>
  <input type="text" class="form-control" name="name" id="name" value="<?php echo $student['name']; ?>" placeholder="full name">
</div>
<div>
  <label for="Inputusername2" class="form-label">Username</label>
  <input type="text" class="form-control" name="username" id="username" value="<?php echo $student['username']; ?>" placeholder="username">
</div>
<div>
  <label for="Inputrolleno" class="form-label">Rolle No</label>
  <input type="text" class="form-control" name="rolleno" id="rolleno" value="<?php echo $student['rolleno']; ?>" placeholder="rolleno">
</div>
<div>
  <label for="Inputclass" class="form-label">Class</label>
  <input type="text" class="form-control" name="class" id="class" value="<?php echo $student['class']; ?>">
</div>
<div>
  <label for="Inputdob" class="form-label">DOB</label>
  <input type="dob" class="form-control" name="dob" id="dob" value="<?php echo $student['dob']; ?>">
</div>
<div>
  <label for="Inputage" class="form-label">Age</label>
  <input type="number" class="form-control" name="age" id="age" value="<?php echo $student['age']; ?>">
</div>
<div>
  <label for="Inputbloodgroup" class="form-label">Blood Group</label>
  <input type="bloodgroup" class="form-control" name="bloodgroup" id="bloodgroup" value="<?php echo $student['bloodgroup']; ?>">
</div>
<div>
  <label for="Inputemail" class="form-label">email</label>
  <input type="email" class="form-control" name="email" id="email" value="<?php echo $student['email']; ?>">
</div>
<div>
  <label for="Inputmobileno" class="form-label">mobileno</label>
  <input type="number" class="form-control" name="mobileno" id="mobileno" value="<?php echo $student['mobileno']; ?>">
</div>
<div>
  <label for="Inputpassword" class="form-label">password</label>
  <input type="password" class="form-control" name="password" id="password" value="<?php echo $student['password']; ?>">
</div>

<input type="hidden" name="id" id="id" value="<?php echo $_GET['id']; ?>">

<button type="submit" class="btn btn-success mt-2">update</button>
            </div>
        </div>
        
    </form>
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