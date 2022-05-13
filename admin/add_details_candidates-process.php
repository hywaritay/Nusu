<?php


        require("../includes/db.php");
    

        if (isset($_POST['_candidates'])) {
            # code...
            $total_candidates = $_GET['total_candidates'];
            $elections_name = $_POST['elections_name'];

            for ($i=1; $i<=$total_candidates; $i++) {  

             $candidate_Fname[] = $_POST['candidate_Fname'.$i];
             $candidate_Lname[] = $_POST['candidate_Lname'.$i];
             $candidate_IDNumber[] = $_POST['candidate_IDNumber'.$i];
             $candidate_Pname[] = $_POST['candidate_Pname'.$i];
             $candidate_PImage[] = addslashes(file_get_contents($_FILES['candidate_Fname'.$i]['tmp_name'.$i]));
              

                }

                for ($i=0; $i<$total_candidates ; $i++) { 
                    $insert = "INSERT into candidates_tbl (firstName,lastName,ID_Number,partyName,partyImage) values('$candidate_Fname[$i]','$candidate_Lname[$i]','$candidate_IDNumber[$i]','$candidate_Pname[$i]','$candidate_PImage[$i]',
                    '$elections_name')";

                    $run=$conn->query($insert);

                }
                if ($run) {
                    # code...
                    echo "Success";
                }else {
                    echo "Error";
                }

                

            }
?>