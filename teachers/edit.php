<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Registration</title>
  </head>
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
$query = "SELECT * FROM teachers WHERE id=" . $_GET['id'];
$result = mysqli_query($connection,$query);

$teacher = mysqli_fetch_assoc($result); 

//print_r($teachers);
?>

  <body>
      <div class="container">
    <h1>Register</h1>
    <form action="update.php" method="POST">
        <div class="row">
            <div class='col-md-6'>
 <div>
  <label for="Inputname" class="form-label">name</label>
  <input type="text" class="form-control" name="name" id="name" value="<?php echo $teacher['name']; ?>" placeholder="full name">
</div>

<div>
  <label for="Inputdob" class="form-label">dob</label>
  <input type="dob" class="form-control" name="dob" id="dob" value="<?php echo $teacher['dob']; ?>">
</div>
<div>
  <label for="Inputage" class="form-label">age</label>
  <input type="number" class="form-control" name="age" id="age" value="<?php echo $teacher['age']; ?>" >
</div>

<div>
  <label for="Inputemail" class="form-label">email</label>
  <input type="email" class="form-control" name="email" id="email" value="<?php echo $teacher['email']; ?>" >
</div>
<div>
  <label for="Inputdepartment" class="form-label">department</label>
  <input type="department" class="form-control" name="department" id="department" value="<?php echo $teacher['department']; ?>" >
</div>
<div>
  <label for="Inputqualification" class="form-label">qualification</label>
  <input type="qualification" class="form-control" name="qualification" id="qualification" value="<?php echo $teacher['qualification']; ?>" >
</div>
<div>
  <label for="Inputannualsalary" class="form-label">annualsalary</label>
  <input type="annualsalary" class="form-control" name="annualsalary" id="annualsalary" value="<?php echo $teacher['annualsalary']; ?>" >
</div>
<div>
  <label for="Inputmobileno" class="form-label">mobileno</label>
  <input type="number" class="form-control" name="mobileno" id="mobileno" value="<?php echo $teacher['mobileno']; ?>" >
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