<?php



session_start();
include("header.php");
require("includes/db.php");

$Error = "";
$Success = "";

if(isset($_POST['login'])){
   
    $username = $_POST['username'];
    $user_password = $_POST['password'];

    $select = "select * from register_tbl where username = '$username'";

    $run = $conn->query($select);
    if ($run->num_rows>0) {
        # code...
        while ($row = $run -> fetch_array()) {
            # code...

           $hashedPwdChecked = password_verify($user_password,$row['password']);

            if ($hashedPwdChecked == false) {
                # code...
                header("Location: login.php?login=error");
                exit();
            }elseif ($hashedPwdChecked == true) {
                # code...
                    
            $_SESSION['username'] = $user_name = $row['username'];
            $_SESSION['email'] = $user_name = $row['email'];
            $_SESSION['studentID'] = $user_id= $row['studentID'];

            echo "<script>window.location.href='welcome1.php'</script>";
            exit(); 
            
        }

            
            
    

        }
    }else {
        # code...
        $Error = "<p class='text text-center text-danger'>Invalid Email or Password! Try Again</p>";
    
    }

  
}

