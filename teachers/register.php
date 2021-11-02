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

<body>
  <div class="container">
    <h1>Register</h1>
    
    <form action="create.php" method="POST" class="needs-validation" novalidate>
      <div class="row">
        <div class='col-md-6'>
          <div>
            <label for="name" class="form-label">Name *</label>
            <input type="text" class="form-control required" name="name" id="name" placeholder="Enter your Full Name" required>
          </div>

          <div>
            <label for="dob" class="form-label">DOB *</label>
            <input type="date" class="form-control required" name="dob" id="dob" format="yyyy-mm-dd" required>
          </div>

          <div>
            <label for="age" class="form-label">Age *</label>
            <input type="number" class="form-control required" name="age" id="age" min="25" max="35" required>
          </div>

          <div>
            <label for="email" class="form-label">Email *</label>
            <input type="email" class="form-control required" name="email" id="email" placeholder="Enter your Email" required>
          </div>
          
          <div>
            <label for="department" class="form-label"><b>Department</b></label>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="english" name="department[]" id="deptenglish">
              <label class="form-check-label" for="deptenglish">
                English
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="tamil" name="department[]" id="depttamil">
              <label class="form-check-label" for="depttamil">
                Tamil
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="maths" name="department[]" id="deptmaths">
              <label class="form-check-label" for="deptmaths">
                Maths
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="physics" name="department[]" id="deptphysics">
              <label class="form-check-label" for="deptphysics">
                Physics
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="History" name="department[]" id="depthistory">
              <label class="form-check-label" for="depthistory">
                History
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="Accounts&commerce" name="department[]" id="deptaccounts&commerce">
              <label class="form-check-label" for="deptaccounts&commerce">
                Accounts&commerce
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="computer science" name="department[]" id="deptcomputerscience">
              <label class="form-check-label" for="deptcomputerscience">
                Computer science
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="chemistry" name="department[]" id="deptchemistry" checked>
              <label class="form-check-label" for="deptchemistry">
                Chemistry
              </label>
            </div>
          </div>

          <div>
            <label for="" class="form-label"><b>Qualification</b></label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="qualification" id="quliftMsc">
              <label class="form-check-label" for="quliftMsc">
                M.Sc
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="qualification" id="quliftBEd">
              <label class="form-check-label" for="quliftBEd">
                B.Ed
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="qualification" id="quliftMBA">
              <label class="form-check-label" for="quliftMBA">
                MBA
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="qualification" id="quliftMABEd">
              <label class="form-check-label" for="quliftMABEd">
                MA,B.Ed
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="qualification" id="quliftBSc">
              <label class="form-check-label" for="quliftBSc">
                B.Sc
              </label>
            </div>
          </div>
          <div>
            <label for="monthlysalary" class="form-label">Monthly Salary *</label>
            <input type="monthlysalary" class="form-control required" name="monthlysalary" id="monthlysalary" placeholder="Enter your Monthlysalary" required>
          </div>
          <div>
            <label for="mobileno" class="form-label">Mobile No *</label>
            <input type="tel" class="form-control required" name="mobileno" id="mobileno" maxlength="10" placeholder="Enter your 10 digit mobile number" required>
          </div>

          <button type="submit" class="btn btn-success mt-2">Save</button>

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
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
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