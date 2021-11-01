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

  <title>Registration</title>
</head>
<?php


$dbobj = new Database();
$connection = $dbobj->createconnection();

$query = "SELECT * FROM teachers WHERE id=" . $_GET['id'];
$result = mysqli_query($connection, $query);

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
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="<?php echo $teacher['name']; ?>" placeholder="Enter your Full Name">
          </div>

          <div>
            <label for="dob" class="form-label">Dob</label>
            <input type="date" class="form-control" name="dob" id="dob" format="yyyy-mm-dd" value="<?php echo $teacher['dob']; ?>">
          </div>
          <div>
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" name="age" id="age" min="25" max="35" value="<?php echo $teacher['age']; ?>">
          </div>

          <div>
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" value="<?php echo $teacher['email']; ?>" placeholder="Enter your Email">
          </div>
          <div>
            <label for="department" class="form-label"><b>Department</b></label>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="english" name="department[]" id="deptenglish" value="English" >
              <label class="form-check-label" for="deptenglish">
                English
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="tamil" name="department[]" id="depttamil" value="Tamil">
              <label class="form-check-label" for="depttamil">
                Tamil
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="maths" name="department[]" id="deptmaths" value="Maths">
              <label class="form-check-label" for="deptmaths">
                Maths
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="physics" name="department[]" id="deptphysics" value="Physics">
              <label class="form-check-label" for="deptphysics">
                Physics
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="History" name="department[]" id="depthistory" value="History">
              <label class="form-check-label" for="depthistory">
                History
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="Accounts&commerce" name="department[]" id="deptaccounts&commerce" value="Accounts&commerce">
              <label class="form-check-label" for="deptaccounts&commerce">
                Accounts&commerce
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="computer science" name="department[]" id="deptcomputerscience" value="computerscience">
              <label class="form-check-label" for="deptcomputerscience">
                Computerscience
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="chemistry" name="department[]" id="deptchemistry" value="chemistry" checked>
              <label class="form-check-label" for="deptchemistry">
                Chemistry
              </label>
            </div>
          </div>
          <div>
            <label for="qualification" class="form-label"><b>Qualification</b></label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="qualification" id="quliftMsc" value="M.Sc">
              <label class="form-check-label" for="quliftMsc">
                M.Sc
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="qualification" id="quliftBEd" value="B.Ed">
              <label class="form-check-label" for="quliftBEd">
                B.Ed
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="qualification" id="quliftMBA" value="MBA">
              <label class="form-check-label" for="quliftMBA">
                MBA
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="qualification" id="quliftMABEd" value="MA,BEd">
              <label class="form-check-label" for="quliftMABEd">
                MA,B.Ed
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="qualification" id="quliftBSc" value="B.Sc">
              <label class="form-check-label" for="quliftBSc">
                B.Sc
              </label>
            </div>
          </div>
          <div>
            <label for="monthlysalary" class="form-label">Monthly Salary</label>
            <input type="monthlysalary" class="form-control" name="monthlysalary" id="monthlysalary" value="<?php echo $teacher['monthlysalary']; ?>" placeholder="Enter your Monthlysalary">
          </div>
          <div>
            <label for="mobileno" class="form-label">Mobileno</label>
            <input type="number" class="form-control" name="mobileno" id="mobileno" value="<?php echo $teacher['mobileno']; ?>" placeholder="Enter your 10 digit mobile number">
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
</body>

</html>