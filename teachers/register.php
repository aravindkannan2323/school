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
    <form action="create.php" method="POST">
        <div class="row">
            <div class='col-md-6'>
 <div>
  <label for="Inputname" class="form-label">name</label>
  <input type="text" class="form-control" name="name" id="name" placeholder="full name">
</div>

<div>
  <label for="Inputdob" class="form-label">dob</label>
  <input type="dob" class="form-control" name="dob" id="dob">
</div>
<div>
  <label for="Inputage" class="form-label">age</label>
  <input type="number" class="form-control" name="age" id="age">
</div>

<div>
  <label for="Inputemail" class="form-label">email</label>
  <input type="email" class="form-control" name="email" id="email">
</div>
<div>
  <label for="Inputdepartment" class="form-label">department</label>
  <input type="department" class="form-control" name="department" id="department">
</div>
<div>
  <label for="Inputqualification" class="form-label">qualification</label>
  <input type="qualification" class="form-control" name="qualification" id="qualification">
</div>
<div>
  <label for="Inputannualsalary" class="form-label">annualsalary</label>
  <input type="annualsalary" class="form-control" name="annualsalary" id="annualsalary">
</div>
<div>
  <label for="Inputmobileno" class="form-label">mobileno</label>
  <input type="number" class="form-control" name="mobileno" id="mobileno">
</div>
         
<button type="submit" class="btn btn-success mt-2">save</button>
              
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