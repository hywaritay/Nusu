<?php

    include("../includes/db.php");
                if (isset($_POST['updateElection'])) {
                    # code...
                    $electionID = $_POST['electionID'];
                    $electionName = $_POST['electionName'];
                    $electionStartDate = $_POST['electionStartDate'];
                    $electionEndDate = $_POST['electionEndDate'];
                
                    $update = "update elections_tbl set elections_name='$electionName',elections_start_date='$electionStartDate',elections_end_date='$electionEndDate' where id = '$electionID';";

                    $run = $conn->query($update);

                    if ($run) {
                        # code...
                       
                            echo "<script> window.location.href = 'add_new_elections.php'</script>";
                        
                       
                    }else {
                        echo "error";
                    }
                }
    ?>