<?php
include 'Database.php';
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


$dbobj = New Database();
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
            <label for="Inputname" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="<?php echo $teacher['name']; ?>" placeholder="Enter your Full Name">
          </div>

          <div>
            <label for="Inputdob" class="form-label">Dob</label>
            <input type="date" class="form-control" name="Dob" id="dob" format="yyyy-mm-dd" value="<?php echo $teacher['dob']; ?>">
          </div>
          <div>
            <label for="Inputage" class="form-label">Age</label>
            <input type="number" class="form-control" name="age" id="age" min="25" max="35" value="<?php echo $teacher['age']; ?>">
          </div>

          <div>
            <label for="Inputemail" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" value="<?php echo $teacher['email']; ?>" placeholder="Enter your Email">
          </div>
          <div>
            <label for="" class="form-label"><b>Department</b></label>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="english" id="deptenglish" value="<?php echo $teacher['English']; ?>" >
              <label class="form-check-label" for="deptenglish">
                English
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="tamil" id="depttamil" value="<?php echo $teacher['Tamil']; ?>">
              <label class="form-check-label" for="depttamil">
                Tamil
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="maths" id="deptmaths" value="<?php echo $teacher['Maths']; ?>">
              <label class="form-check-label" for="deptmaths">
                Maths
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="physics" id="deptphysics" value="<?php echo $teacher['Physics']; ?>">
              <label class="form-check-label" for="deptphysics">
                Physics
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="History" id="depthistory" value="<?php echo $teacher['History']; ?>">
              <label class="form-check-label" for="depthistory">
                History
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="Accounts&commerce" id="deptaccounts&commerce" value="<?php echo $teacher['Accounts&commerce']; ?>">
              <label class="form-check-label" for="deptaccounts&commerce">
                Accounts&commerce
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="computer science" id="deptcomputerscience" value="<?php echo $teacher['computerscience']; ?>">
              <label class="form-check-label" for="deptcomputerscience">
                Computerscience
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="chemistry" id="deptchemistry" value="<?php echo $teacher['chemistry']; ?>" checked>
              <label class="form-check-label" for="deptchemistry">
                Chemistry
              </label>
            </div>
          </div>
          <div>
            <label for="" class="form-label"><b>Qualification</b></label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="M.Sc" id="quliftMsc" value="<?php echo $teacher['M.Sc']; ?>">
              <label class="form-check-label" for="quliftMsc">
                M.Sc
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="B.Ed" id="quliftBEd" value="<?php echo $teacher['B.Ed']; ?>">
              <label class="form-check-label" for="quliftBEd">
                B.Ed
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="MBA" id="quliftMBA" value="<?php echo $teacher['MBA']; ?>">
              <label class="form-check-label" for="quliftMBA">
                MBA
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="MA,B.Ed" id="quliftMABEd" value="<?php echo $teacher['MA,B.Ed']; ?>">
              <label class="form-check-label" for="quliftMABEd">
                MA,B.Ed
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="B.Sc" id="quliftBSc" value="<?php echo $teacher['B.Sc']; ?>">
              <label class="form-check-label" for="quliftBSc">
                B.Sc
              </label>
            </div>
          </div>
          <div>
            <label for="Inputmonthlysalary" class="form-label">Monthlysalary</label>
            <input type="monthlysalary" class="form-control" name="monthlysalary" id="monthlysalary" value="<?php echo $teacher['monthlysalary']; ?>" placeholder="Enter your Monthlysalary">
          </div>
          <div>
            <label for="Inputmobileno" class="form-label">Mobileno</label>
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