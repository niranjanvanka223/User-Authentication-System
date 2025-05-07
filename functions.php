<?php
    // SweetMessage
    function sweetMsg($title, $icon="success"){
        echo '<script>Swal.fire({
            icon: "'.$icon.'",
            title: "'.$title.'",
            showConfirmButton: false,
            timer: 3000
          });</script>';
    }

    function pr($var){
        echo '<pre>';
              print_r($var);
              echo '</pre>';
    }

    function isLoggedIn(){
        if(!isset($_SESSION['USER_LOGGED_IN']) || $_SESSION['USER_LOGGED_IN'] != 'YES'){
            header('Location: login.php');
          }
    }

    function userLogin($con, $txtEmail, $txtPassword){
        if(!empty($txtEmail) && !empty($txtPassword)){
            $txtEmail = mysqli_real_escape_string($con, $txtEmail);
            $txtPassword = mysqli_real_escape_string($con, $txtPassword);
            $sql = "SELECT * FROM users WHERE email='$txtEmail' AND password='$txtPassword'";
            if($result = $con->query($sql)){
              if($result->num_rows == 1){
                $row = $result->fetch_object();
                if($row->status == 1){
                  $_SESSION['USER_LOGGED_IN'] = 'YES';
                  $_SESSION['USER_NAME'] = $row->name;
                  $_SESSION['USER_ROLE'] = $row->role;
                  sweetMsg('Login Success!');
                  header('refresh:3; url=secret.php');
                }else{
                  sweetMsg('Your account is not Activated!', 'error');
                }
              }else{
                sweetMsg('Account not Found! Try again or Signup!', 'error');
              }
            }
          }else{
            sweetMsg('All fields are required!', 'error');
          }
    }

    // User Signup
    function userSignup($con, $txtName, $txtEmail, $txtPassword, $txtConfPassword){
        if(!empty($txtName) && !empty($txtEmail) && !empty($txtPassword) && !empty($txtConfPassword)){
            $txtName = mysqli_real_escape_string($con, $txtName);
            $txtEmail = mysqli_real_escape_string($con, $txtEmail);
            $txtPassword = mysqli_real_escape_string($con, $txtPassword);
            $txtConfPassword = mysqli_real_escape_string($con, $txtConfPassword);
  
            // Check whether this email exists?
            $sql = "SELECT * FROM users WHERE email='$txtEmail'";
            if($result = $con->query($sql)){
              if($result->num_rows > 0){
                sweetMsg('Email already exists!', 'error');
              }else{
                if($txtPassword === $txtConfPassword){
                  $regSql = "INSERT INTO users(user_id, email, password, name, role, status) VALUES('', '$txtEmail', '$txtPassword', '$txtName', 'user', '1')";
                  if($con->query($regSql)){
                    sweetMsg('Account has been Created.');
                    header('refresh:2; url=login.php');
                  }else{
                    sweetMsg('Something went wrong!', 'error');
                  }
  
                }else{
                  sweetMsg('Passwords are not matched!', 'error');
                }
              }
            }
            
  
          }else{
            sweetMsg('All fields are required!', 'error');
          }
    }

?>