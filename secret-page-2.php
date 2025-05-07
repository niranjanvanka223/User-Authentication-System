<?php
  include_once 'db.php';
  include_once 'functions.php';

  isLoggedIn();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Secret Page 2 - Login System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body>
    <div class="container text-center m-5">
        <h1>Secret Page 2 - Login System</h1>
        <h2><?php echo "Hey ".$_SESSION['USER_NAME']. ", Welcome! "; ?></h2>
        <div class="pages p-5">
            <a href="secret.php" class="btn btn-primary mx-2">Secret</a>
            <a href="secret-page-1.php" class="btn btn-primary mx-2">Secret Page 1</a>
            <a href="secret-page-2.php" class="btn btn-primary mx-2">Secret Page 2</a>
            <a href="secret-page-3.php" class="btn btn-primary mx-2">Secret Page 3</a>
            <a href="logout.php" class="btn btn-danger mx-2">Logout</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>