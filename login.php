<?php
  include_once 'db.php';
  include_once 'functions.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Login System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body>
    <?php
      if(isset($_POST['loginBtn'])){
        $txtEmail = $_POST['txtEmail'];
        $txtPassword = $_POST['txtPassword'];
        userLogin($con, $txtEmail, $txtPassword);
      }
    ?>
    <div class="container d-flex justify-content-center">
      <div class="login-box mt-5 pt-5">
        <h1>Login</h1>
        <div class="card shadow" style="width: 500px;">
          <div class="card-body">
            <form method="post" action="">
              <div class="mb-3">
                <label for="txtEmail" class="form-label">Email address</label>
                <input type="email" class="form-control" id="txtEmail" name="txtEmail">
              </div>
              <div class="mb-3">
                <label for="txtPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="txtPassword" name="txtPassword">
              </div>
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="loginBtn">SignIn</button>
              </div>
              <div class="info-link text-end my-3">
                <p>Don't have an account? <a href="signup.php">Signup</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>