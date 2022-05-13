<?php

    session_start();
    require("includes/db.php");

    if (isset($_POST['vote'])) {
        # code...
       $user_id = $_POST['user_id'];
       $user_password = $_POST['user_password'];

        $select = "select * from register_tbl where user_id_generated = '$user_id'";

        $run = $conn->query($select);

        if ($run->num_rows>0) {
            # code...
            
            while ($row=$run->fetch_array()) {
 

                $hashedPwdChecked = password_verify($user_password,$row['password']);

                if ($hashedPwdChecked == false) {
                    # code...
                    header("Location: election1.php?election=error");
                    exit();
                }elseif ($hashedPwdChecked == true) {

                    
                     $_SESSION['user_id_generated'] = $user_id_generated = $row['user_id_generated']; 
                        
                    echo "<script>window.location.href='vote.php'</script>";
                    exit(); 
                }

                
            }
           

        }else {
            
            echo "Your ID or Password Invalid";
        }
    }

?>