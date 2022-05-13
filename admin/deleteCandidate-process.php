<?php

    include("../includes/db.php");
                if (isset($_POST['deleteCandidate'])) {
                    # code...
                    $CandidateID = $_POST['CandidateID'];
                    $firstName = $_POST['firstName'];
                    $lastName = $_POST['lastName'];
                    $ID_Number = $_POST['ID_Number'];
                    $partyName = $_POST['partyName'];
                    $elections_name = $_POST['elections_name'];
                  
                
                    $delete = "delete from candidates_tbl where id = '$CandidateID';";

                    $run = $conn->query($delete);

                    if ($run) {
                        # code...
                       
                            echo "<script> window.location.href = 'add_candidates.php'</script>";
                        
                       
                    }else {
                        echo "error";
                    }
                }
    ?>