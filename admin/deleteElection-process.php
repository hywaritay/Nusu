<?php

    include("../includes/db.php");
                if (isset($_POST['deleteElection'])) {
                    # code...
                    $electionID = $_POST['electionID'];
                    $electionName = $_POST['electionName'];
                    $electionStartDate = $_POST['electionStartDate'];
                    $electionEndDate = $_POST['electionEndDate'];
                
                    $delete = "delete from elections_tbl  where id = '$electionID';";

                    $run = $conn->query($delete);

                    if ($run) {
                        # code...
                       
                            echo "<script> window.location.href = 'add_new_elections.php'</script>";
                        
                       
                    }else {
                        echo "error";
                    }
                }
    ?>