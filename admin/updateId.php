<?php

include ('adminHeader.php');

?>



    <div class="container">


          <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">GENERATE VOTNG ID FOR STUDENT</h5>
            <button type="button" class="close"  aria-label="Close">
            <a href="idrequest.php" ><span aria-hidden="true">  &times;</span></a>
            
            </button>
        </div>
        <div class="modal-body">
        
        <div class="col-sm-9 ">
            <?php

                $postfix = "";
                $prefix = "";
                $id_generated = "";

                    include("../includes/db.php");
                $id = $_GET['id'];

                $select = "select * from id_request_tbl where id='$id';";

                $run = $conn->query($select);

                if($run->num_rows>0){

                    while ($row = $run->fetch_array()) {
                        # code...

                        $user_id = $row['studentID'];
                        $user_progType = $row['progType'];
                        $user_program = $row['program'];
                    
                    }
                    switch ($user_progType) {
                        case 'Certificate':
                            # code...
                            $prefix = "CER";
                            $rand = rand(9999999,1234567);
                            $postfix = "xyz";
                            $id_generated = $prefix.$rand.$postfix;
                            break;

                        case 'Ordinary Diploma':
                            # code...
                            $prefix = "OD";
                            $rand = rand(9999999,1234567);
                            $postfix = "xyz";
                            $id_generated = $prefix.$rand.$postfix;
                            break;

                        case 'Higher Diploma':
                            # code...
                            $prefix = "HND";
                            $rand = rand(9999999,1234567);
                            $postfix = "xyz";
                            $id_generated = $prefix.$rand.$postfix;
                            break;

                        case 'Bachelor of Science':
                            # code...
                            $prefix = "BSC";
                            $rand = rand(9999999,1234567);
                            $postfix = "xyz";
                            $id_generated = $prefix.$rand.$postfix;
                            break;
                            
                        
                        default:
                            # code...
                            break;
                    }


                    ?>

                        <form method="POST" action="updateId-process.php">
                    


                                    
                                    <div class="form-group">

                                            <label for="userID">STUDENT ID</label>
                                            <input type="number" name="user_id" class="form-control" id="Email" value="<?php echo $user_id; ?>" readonly>

                                    </div>

                                    
                                    <div class="form-group">

                                            <label for="progType">Program Type</label>
                                            <input type="text" name="user_progType" class="form-control" id="progType" value="<?php echo $user_progType; ?>" readonly>

                                    </div>

                                    <div class="form-group">

                                            <label for="Program">Program</label>
                                            <input type="text" name="user_program" class="form-control" id="Program" value="<?php echo $user_program; ?>" readonly>

                                    </div>

                                    <div class="form-group">

                                            <label for="idgenerate">ID Generate By System</label>
                                            <input type="text" name="user_id_generated" class="form-control" id="idgenerate"  value="<?php echo strtoupper($id_generated); ?>" readonly>

                                    </div>
                                
                                <div class="form-group">
                                <div class="modal-footer">
                                <button type="submit" class="btn btn-info btn-block" name="update">Update Id</button>
                               
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
        <div class="modal-footer">
            <button type="button" class="btn btn-danger"> <a href="idrequest.php" class="btn btn-danger">Close</a> </button>
          
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


