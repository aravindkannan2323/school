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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Teachers list</title>
  </head>
  <body> 

<?php


$dbobj = new Database();
$connection = $dbobj->createconnection();

$query = "SELECT * FROM teachers";
$result = mysqli_query($connection,$query);

$teachers = mysqli_fetch_all($result,MYSQLI_ASSOC);

//print_r($teachers);
?>
<div class="container">
<h1>Teachers</h1>
<a href="register.php" class="btn btn-success float-end">Add New Teacher</a>
<table class="table">
<tr>
        <th>Id</th>
        <th>Name</th>
        <th>DOB</th>
        <th>Age</th>
        <th>Email</th>
        <th>Department</th>
        <th>Qualification</th>
        <th>Monthly Salary</th>
        <th>Mobile No</th>
        <th>Action</th>
    </tr> 
    <?php
    foreach ($teachers as $teacher) { ?>
    <tr>
        <td><?php echo $teacher['id']; ?></td>
        <td><?php echo $teacher['name']; ?></td>
        <td><?php echo $teacher['dob']; ?></td>
        <td><?php echo $teacher['age']; ?></td>
        <td><?php echo $teacher['email']; ?></td>
        <td><?php echo $teacher['department']; ?></td>
        <td><?php echo $teacher['qualification']; ?></td>
        <td><?php echo $teacher['monthlysalary']; ?></td>
        <td><?php echo $teacher['mobileno']; ?></td>
        <td>
        <a href="edit.php?id=<?php echo $teacher['id']; ?>" class="btn btn-success">Edit</a>
        <a href="delete.php?id=<?php echo $teacher['id']; ?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>  
    <?php
    }
    ?>
</table>
</div>

<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
