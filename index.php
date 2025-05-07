<?php
    // include_once 'db_p.php';
    include_once 'db_oop.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Login System</h1>
        <!-- <h2>Procedural</h2>
        <h2>OOP</h2>
        <h2>PDO</h2> -->

        <!-- Procedural -->
        <?php
        /*
            $user_sql = "SELECT * FROM users";
            if($result = mysqli_query($con, $user_sql)){
                // print_r($result);
                echo "<pre>";
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
                        // print_r($row);
                        echo $row['email'];
                        echo "<br>";
                    }
                }
            }
        */
        ?>
        <!-- /Procedural -->

        <!-- OOP -->
        <?php
        /*
          $sql = "SELECT * FROM users";
          if($result = $con->query($sql)){
            // print_r($result);
            echo "<pre>";
            if($result->num_rows > 0){
              while($row = $result->fetch_array()){
                // print_r($row);
                echo $row['name']."<br>";
                
              }
            }
          }
        */
        ?>
        <!-- /OOP -->




    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>