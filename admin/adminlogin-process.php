<?php



session_start();

require("../includes/db.php");

$Error = "";
$Success = "";

if(isset($_POST['adminLogin'])){
   
    $username = $_POST['username'];
    $user_password = $_POST['password'];

    $select = "select * from admin_auth where username = '$username' and password = '$user_password'";

    $run = $conn->query($select);
    if ($run->num_rows>0) {
        # code...
       
                    
        while ($row = $run -> fetch_array()) {
            # code...           
            $_SESSION['username'] = $user_name = $row['username'];
            

            echo "<script>window.location.href='add_candidates.php'</script>";
            exit(); 
                 
            
    

        }
              

        
    }else {
        # code...
        echo "<p class='text text-center text-danger'>Invalid Email or Password! Try Again</p>";
    
        
    }

  
}

