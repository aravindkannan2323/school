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

  <title>Edit Student</title>
</head>

<?php


$dbobj = new Database();
$connection = $dbobj->createconnection();

$query = "SELECT * FROM Students WHERE id=" . $_GET['id'];
$result = mysqli_query($connection, $query);

$student = mysqli_fetch_assoc($result);

//print_r($students);
?>

<body>
  <div class="container">
    <h1>Edit Students</h1>
    <form action="update.php" method="POST" class="needs-validation" novalidate>
      <div class="row">
        <div class='col-md-6'>
          <div>
            <label for="name" class="form-label">Name *</label>
            <input type="text" class="form-control required" name="name" id="name" value="<?php echo $student['name']; ?>" placeholder="Enter your Full name" required>
          </div>
          <div>
            <label for="username" class="form-label">Username *</label>
            <input type="text" class="form-control required" name="username" id="username" value="<?php echo $student['username']; ?>" placeholder="Enter your Username" required>
          </div>
          <div>
            <label for="rolleno" class="form-label">Roll No *</label>
            <input type="text" class="form-control required" name="rolleno" id="rolleno" value="<?php echo $student['rolleno']; ?>" placeholder="Enter your rollno" required>
          </div>
          <div>
            <label for="class" class="form-label">Class *</label>
            <input type="text" class="form-control required" name="class" id="class" value="<?php echo $student['class']; ?>"  placeholder="Enter your class" required>
          </div>
          <div>
            <label for="dob" class="form-label">DOB *</label>
            <input type="date" class="form-control required" name="dob" id="dob" format="yyyy-mm-dd" value="<?php echo $teacher['dob']; ?>" required>
          </div>
          <div>
            <label for="age" class="form-label">Age *</label>
            <input type="number" class="form-control required" name="age" id="age" value="<?php echo $student['age']; ?>"  placeholder="Enter your Age" required>
          </div>
          <div>
            <label for="bloodgroup" class="form-label">Blood Group *</label>
            <select name="bloodgroup" id="bloodgroup" class="form-select required" aria-label="Default select example"  required>
              <option value="">Select Blood Group</option>
              <option value="AB-ve" <?php echo ($student['bloodgroup'] == 'AB-ve') ? 'selected' : ''; ?> >AB-ve</option>
              <option value="b+ve" <?php echo ($student['bloodgroup'] == 'b+ve') ? 'selected' : ''; ?> >B+ve</option> 
              <option value="o-ve" <?php echo ($student['bloodgroup'] == 'o-ve') ? 'selected' : ''; ?> >O-ve</option>
              <option value="B-ve" <?php echo ($student['bloodgroup'] == 'B-ve') ? 'selected' : ''; ?> >B-ve</option>
              <option value="o+ve" <?php echo ($student['bloodgroup'] == 'o+ve') ? 'selected' : ''; ?> >O+ve</option>
            </select>
          </div>
          <div>
            <label for="email" class="form-label">Email *</label>
            <input type="email" class="form-control required" name="email" id="email" value="<?php echo $student['email']; ?>"  placeholder="Enter your Email" required>
          </div>
          <div>
            <label for="mobileno" class="form-label">Mobile No *</label>
            <input type="number" class="form-control required" name="mobileno" id="mobileno" value="<?php echo $student['mobileno']; ?>" placeholder="Enter your 10 digit mobile number" required>
          </div>
          <div>
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control required" name="password" id="password" value="<?php echo $student['password']; ?>" required>
          </div>

          <input type="hidden" name="id" id="id" value="<?php echo $_GET['id']; ?>">

          <button type="submit" class="btn btn-success mt-2">Update</button>
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

    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict'

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.querySelectorAll('.needs-validation')

      // Loop over them and prevent submission
      Array.prototype.slice.call(forms)
        .forEach(function(form) {
          form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }

            form.classList.add('was-validated')
          }, false)
        })
    })()
  </script>
</body>

</html>