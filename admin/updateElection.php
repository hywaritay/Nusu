<?php

include ('adminHeader.php');

?>



    <div class="container">


          <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">EDIT ELECTION TABLE</h5>
            <button type="button" class="close"  aria-label="Close">
            <a href="add_new_elections.php" ><span aria-hidden="true">  &times;</span></a>
            
            </button>
        </div>
        <div class="modal-body">
        
        <div class="col-sm-9 ">
            <?php

               

                    include("../includes/db.php");
                $election_id = $_GET['id'];

                $select = "select * from elections_tbl where id='$election_id';";

                $run = $conn->query($select);

                if($run->num_rows>0){

                    while ($row = $run->fetch_array()) {
                        # code...
                        $elections_id = $row['id'];    
                        $elections_name = $row['elections_name'];
                        $elections_start_date = $row['elections_start_date'];
                        $elections_end_date = $row['elections_end_date'];
                    
                    }
                   


                    ?>

                        <form method="POST" action="updateElection-process.php">
                    

                        <div class="form-group">

                                    <label for="electionID">Election ID</label>
                                    <input type="text" name="electionID" class="form-control" id="electionID" value="<?php echo $elections_id; ?>" readonly>

                        </div>


                                    
                                    <div class="form-group">

                                            <label for="electionName">Election Name</label>
                                            <input type="text" name="electionName" class="form-control" id="electionName" value="<?php echo $elections_name; ?>" >

                                    </div>

                                    
                                    <div class="form-group">

                                            <label for="elctionStartDate">Election Start Date</label>
                                            <input type="date" name="electionStartDate" class="form-control" id="elctionStartDate" value="<?php echo $elections_start_date; ?>">

                                    </div>

                                    <div class="form-group">

                                            <label for="electionEndDate">Election End Date</label>
                                            <input type="date" name="electionEndDate" class="form-control" id="electionEndDate" value="<?php echo $elections_end_date; ?>" >

                                    </div>

                    
                                
                                <div class="form-group">
                                <div class="modal-footer">
                                <button type="submit" class="btn btn-info btn-block" name="updateElection" style="height:50px;margin-top:5px;">Update </button>
                                <button type="submit" class="btn btn-danger btn-block"> <a href="add_new_elections.php" class="btn btn-danger btn-block">Close</a> </button>
          
                                 </div>
                                        </div>

                         </form>

        <?php
                    
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


