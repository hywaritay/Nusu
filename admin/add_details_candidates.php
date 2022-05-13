
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Voting System</title>
    <link rel="stylesheet" href="../bootstrap.min.css" />
    <link rel="stylesheet" href="../css/shop-homepage.css" />
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<div class="container">

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">ADD CANDIDATES</h5>
            <button type="button" class="close"  aria-label="Close">
            <a href="add_candidates.php" ><span aria-hidden="true">  &times;</span></a>
            
            </button>
        </div>
        <div class="modal-body">

    <div class="col-sm-12">

   

        <form method="POST" enctype="multipart/form-data">

            <?php

                require("../includes/db.php");

                $elections_name = $_GET['elections_name'];
                $total_candidates = $_GET['total_candidates'];


                
                ?>

                
                <label for="Election_name">Election Name</label>
                <input type="text" name="elections_name" value="<?php echo $elections_name; ?>" class="form-control" readonly="readonly">

                <?php


                for ($i=1; $i<= $total_candidates; $i++) { 

                    ?>

                    <br>
                    <!--- candidate first name and last name--->
                    <div class="form-row" style="width:450px;">

                    <div class="col">

                    <div class="form-group" >
                        <label >Candidate <?php echo $i; ?> : First Name </label>
                        <input type="text" name="candidate_Fname<?php echo $i;?>" class="form-control">
                    </div>

                    </div>


                    <div class="col">

                    <div class="form-group" style="margin-left:5px">
                        <label >Candidate <?php echo $i; ?> : Last Name </label>
                        <input type="text" name="candidate_Lname<?php echo $i;?>" class="form-control">
                    </div>

                    </div>

                    </div>


                    <div class="form-row my-1" style="width:450px;">
                       
                        <div class="col">
                            <div class="form-group">
                                <label >Candidate  <?php echo $i; ?> : ID Number</label>
                                <input type="text" name="candidate_IDNumber<?php echo $i;?>" class="form-control">
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group" style="margin-left:5px">
                                <label >Candidates  <?php echo $i; ?>: Party Name</label>
                                <input type="text" name="candidate_Pname<?php echo $i;?>" class="form-control">
                             </div>
                        </div>
                    </div>


                    <div class="form-row my-1" style="width:450px;">

                    <div class="col">
                         <div class="form-group">
                            <label >Candidates <?php echo $i; ?> : Party Image</label>
                            <input type="file" name="candidate_PImage<?php echo $i;?>" class="form-control">
                        </div>
                    </div>

                    <div class="col">
                         <div class="form-group" style="margin-left:0px">
                            <label >Candidates <?php echo $i; ?> : Candidate Image</label>
                            <input type="file" name="candidate_Image<?php echo $i;?>" class="form-control">
                        </div>
                    </div>


                    </div>
                  

                    <?php

                         }
            ?>
            
        <div class="modal-footer">               
            <input type="submit" name="add_detail_candidates" class="btn btn-success">
        </div>  
        </form>

    </div>

    </div>
</div>


              <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

<script>
       $(document).ready(function(){
            $('#exampleModal').modal('show');
        }); 
    </script>
</body>
</html>

<?php


        require("../includes/db.php");
    

        if (isset($_POST['add_detail_candidates'])) {
            # code...
            $total_candidates = $_GET['total_candidates'];
            $elections_name = $_POST['elections_name'];

            for ($i=1; $i<=$total_candidates; $i++) {  

             $candidate_Fname[] = $_POST['candidate_Fname'.$i];
             $candidate_Lname[] = $_POST['candidate_Lname'.$i];
             $candidate_IDNumber[] = $_POST['candidate_IDNumber'.$i];
             $candidate_Pname[] = $_POST['candidate_Pname'.$i];
             $candidate_PImage[] = addslashes(file_get_contents($_FILES["candidate_PImage".$i]["tmp_name"]));
             $PimageProperties = getimageSize($_FILES['candidate_PImage'.$i]['tmp_name']);
             $candidate_Image[] = addslashes(file_get_contents($_FILES['candidate_Image'.$i]["tmp_name"]));
             $CimageProperties = getimageSize($_FILES["candidate_Image".$i]['tmp_name']);

                }

                for ($i=0; $i<$total_candidates; $i++) { 
                    $insert = "INSERT into candidates_tbl (firstName,lastName,ID_Number,partyName,partyImage,candidateImage,partyImageProperties,candidateImageProperties,elections_name) values('$candidate_Fname[$i]','$candidate_Lname[$i]','$candidate_IDNumber[$i]','$candidate_Pname[$i]',
                    '$candidate_PImage[$i]','$candidate_Image[$i]',$PimageProperties[$i],
                    $CimageProperties[$i],'$elections_name')";

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

