<?php

    include("../includes/db.php");
                if (isset($_POST['updateCandidate'])) {
                    # code...
                    $CandidateID = $_POST['CandidateID'];
                    $firstName = $_POST['firstName'];
                    $lastName = $_POST['lastName'];
                    $ID_Number = $_POST['ID_Number'];
                    $partyName = $_POST['partyName'];
                    $elections_name = $_POST['elections_name'];
                    $candidate_Image = addslashes(file_get_contents($_FILES['candidate_Image']['tmp_name']));
                    $partyImage =addslashes(file_get_contents($_FILES["partyImage"]["tmp_name"]));
                
                    $update = "update candidates_tbl set firstName='$firstName',lastName='$lastName', ID_Number='$ID_Number',partyName='$partyName',elections_name='$elections_name',
                     candidateImage='$candidate_Image',partyImage='$partyImage' where id = '$CandidateID';";

                    $run = $conn->query($update);

                    if ($run) {
                        # code...
                       
                            echo "<script> window.location.href = 'add_candidates.php'</script>";
                        
                       
                    }else {
                        echo "error";
                    }
                }
    ?>