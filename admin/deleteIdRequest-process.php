<?php

    include("../includes/db.php");
                if (isset($_POST['delete'])) {
                    # code...
                    $user_id = $_POST['user_id'];
                    $user_progType = $_POST['user_progType'];
                    $user_program = $_POST['user_program'];
                    $user_id_generated = $_POST['user_id_generated'];
                    $delete = "delete from register_tbl  where studentID = '$user_id';";

                    $run = $conn->query($delete);

                    if ($run) {
                        # code...
                        
                            echo "<script> alert('Record has been deleted successfully')</script>;";
                            echo "<script> window.location.href = 'idrequest.php'</script>";
                       
                    }else {
                        echo "error";
                    }
                }
    ?>