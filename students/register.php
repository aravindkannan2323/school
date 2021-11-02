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
            <label for="username" class="form-label">Username *</label>
            <input type="text" class="form-control required" name="username" id="username" placeholder="Enter Username" required>
          </div>
          <div>
            <label for="rolleno" class="form-label">Roll No *</label>
            <input type="text" class="form-control required" name="rolleno" id="rolleno" placeholder="Enter Rolleno" required>
          </div>
          <div>
            <label for="class" class="form-label">Class *</label>
            <input type="text" class="form-control required" name="class" id="class" placeholder="Enter your class" required>
          </div>
          <div>
            <label for="dob" class="form-label">DOB *</label>
            <input type="Date" class="form-control required" name="dob" id="dob" required>
          </div>
          <div>
            <label for="age" class="form-label">Age *</label>
            <input type="number" class="form-control required" name="age" id="age" placeholder="Enter your Age" required>
          </div>
          <div>
            <label for="bloodgroup" class="form-label">Blood Group *</label>
            <select class="form-select" aria-label="Default select example">
              <option selected>BloodGroup</option>
              <option value="AB-ve">AB-ve</option>
              <option value="b+ve">B+ve</option>
              <option value="o-ve">O-ve</option>
              <option value="B-ve">B-ve</option>
              <option value="o+ve">O+ve</option>
            </select>
          </div>
          <div>
            <label for="email" class="form-label">Email *</label>
            <input type="email" class="form-control required" name="email" id="email" placeholder="Enter Your Email" required>
          </div>
          <div>
            <label for="mobileno" class="form-label">Mobile No *</label>
            <input type="tel" class="form-control required" name="mobileno" id="mobileno" placeholder="Enter your 10 digit mobile number" required>
          </div>
          <div>
            <label for="password" class="form-label">Password *</label>
            <input type="password" class="form-control required" name="password" id="password" placeholder="Enter your 12 digit password" required>
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