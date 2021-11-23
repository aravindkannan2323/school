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

    <title>Edit Hr</title>
  </head>

  <?php

$dbobj = new Database();
$connection = $dbobj->createconnection();

$query = "SELECT * FROM hrs WHERE id=" . $_GET['id'];
$result = mysqli_query($connection, $query);

$hr = mysqli_fetch_assoc($result);

$permission = explode(',', $hr['permission']);

?>

  <body>
      <div class="container">
    <h1>Edit Hrs</h1>
    <form action="update.php" method="POST" class="needs-validation" novalidate>
      <div class="row">
        <div class='col-md-6'>
          <div>
            <label for="username" class="form-label">Username *</label>
            <input type="text" class="form-control required" name="username" id="username"value="<?php echo $hr['username']; ?>" placeholder="Enter your Username" required> 
          </div>
          <div>
            <label for="email" class="form-label">Email *</label>
            <input type="email" class="form-control required" name="email" id="email" value="<?php echo $hr['email']; ?>"  placeholder="Enter your Email" required> 
          </div>
          <div>
              <label for="" class="form-label"><b>Permission</b></label>
              <div class="form-check">
              <input class="form-check-input" type="checkbox" name="permission[]" id="permissadd" value="Add" <?php echo (in_array('Add', $permission)) ? 'checked' : ''; ?> >
              <label class="form-check-label" for="permissadd">
                Add
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="permission[]" id="permissedit" value="Edit" <?php echo (in_array('Edit', $permission)) ? 'checked' : ''; ?> >
              <label class="form-check-label" for="permissedit">
                Edit
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="permission[]" id="permisslist" value="List" <?php echo (in_array('List', $permission)) ? 'checked' : ''; ?> >
              <label class="form-check-label" for="permisslist">
               List
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="permission[]" id="permissdelete" value="Delete" <?php echo (in_array('Delete', $permission)) ? 'checked' : ''; ?> >
              <label class="form-check-label" for="permissdelete">
                Delete
              </label>
            </div>
          </div>
          <div>
            <label for="password" class="form-label">Password *</label>
            <input type="password" class="form-control required" name="password" id="password" value="<?php echo $hr['password']; ?>"  placeholder="Enter your 12 digit password" required>
          </div>

          <input type="hidden" name="id" id="id" value="<?php echo $_GET['id']; ?>">

          <button type="submit" class="btn btn-success mt-2">Update</button>
     </div>
    </div>
          </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
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