<?php

include ('adminHeader.php');

?>



    <div class="container">


          <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">DELETE CANDIDATE </h5>
            <button type="button" class="close"  aria-label="Close">
            <a href="add_candidates.php" ><span aria-hidden="true">  &times;</span></a>
            
            </button>
        </div>
        <div class="modal-body">
        
        <div class="col-sm-9 ">
            <?php

               

                    include("../includes/db.php");
                $candidate_id = $_GET['id'];

                $select = "select * from candidates_tbl where id='$candidate_id';";

                $run = $conn->query($select);

                if($run->num_rows>0){

                    while ($row = $run->fetch_array()) {
                        # code...
                        $candidate_id = $row['id'];    
                        $firstName = $row['firstName'];
                        $lastName = $row['lastName'];
                        $ID_Number = $row['ID_Number'];
                        $partyName = $row['partyName'];
                        $partyImage = $row['partyImage'];
                        $candidateImage = $row['candidateImage'];
                        $elections_name = $row['elections_name'];



                    
                    
                   


                    ?>

                        <form method="POST" action="deleteCandidate-process.php" >
                    
                                
                            <div class="form-row ">
                                <div class="col">
                                        <div class="form-group" style="margin-left:30px;">

                                        <label for="ID"> ID</label>
                                        <input type="text" name="CandidateID" class="form-control" id="CandidateID" value="<?php echo $candidate_id; ?>" readonly>

                                     </div>
                                </div>

                                <div class="col" >
                                        <div class="form-group" style="margin-left:50px;">

                                            <label for="firstName">First Name</label>
                                            <input type="text" name="firstName" class="form-control" id="firstName" value="<?php echo $firstName; ?>" readonly >

                                    </div>
                                </div>

                            </div>


                            <div class="form-row">
                                <div class="col">
                                            <div class="form-group" style="margin-left:30px;">

                                            <label for="lastName">Last Name</label>
                                            <input type="text" name="lastName" class="form-control" id="lastName" value="<?php echo $lastName; ?>" readonly >

                                    </div>
                                </div>

                                <div class="col">
                                        <div class="form-group" style="margin-left:50px;">

                                            <label for="studentID">Student ID</label>
                                            <input type="text" name="ID_Number" class="form-control" id="ID_Number" value="<?php echo $ID_Number; ?>" readonly >

                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col">
                                        
                                    <div class="form-group" style="margin-left:30px;">

                                            <label for="partyName" >Party Name</label>
                                            <input type="text" name="partyName" class="form-control" id="partyName" value="<?php echo $partyName; ?>" readonly >

                                    </div>
                                </div>


                                <div class="col">
                                         <div class="form-group" style="margin-left:50px;">

                                            <label for="studentID">Election Name</label>
                                            <input type="text" name="elections_name" class="form-control" id="elections_name" value="<?php echo $elections_name; ?>" readonly >

                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col">
                                         <div class="form-group" style="margin-left:30px;">

                                            <label for="candidateImage">Candidate Image</label>
                                            <label>       <?php  echo '<img src="data:image/jpeg;base64,'.base64_encode($row['candidateImage']).'" height="100" width="100" />';?> </label> 

                                    </div>
                                </div>

                                <div class="col">
                                          <div class="form-group" style="margin-left:50px;">

                                            <label for="partyImage">Party Image</label>
                                    <label>       <?php  echo '<img src="data:image/jpeg;base64,'.base64_encode($row['partyImage']).'" height="100" width="100" />';?> </label> 

                                    </div>
                                </div>
                            </div>
                                                        
                                
                                <div class="form-group">
                                <div class="modal-footer">
                                <button type="submit" class="btn btn-danger btn-block" name="deleteCandidate" style="height:50px;margin-top:5px;margin-left:50px;">Delete </button>
                                <button type="submit" class="btn btn-info btn-block" style="margin-left:50px;"> <a href="add_candidates.php" class="btn btn-info btn-block">Cancel</a> </button>
          
                                 </div>
                                        </div>

                         </form>

        <?php

                    }
                    
                } else{
                    echo "Record Not Found";
                }

            ?>
        </div>


        </div>
       
        </div>
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


