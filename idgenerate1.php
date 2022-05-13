<?php

    session_start();
    include("loginHeader1.php");

    if(!$_SESSION['studentID']){
        header('location:login.php');

    }
?>

<div class="container" style="margin-top:50px" >

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Generate ID</h5>
                        <button type="button" class="close"  aria-label="Close">
                        <a href="welcome1.php" ><span aria-hidden="true">  &times;</span></a>
                        
                        </button>
                    </div>
            
                <div class="modal-body">
    <?php

    require("includes/db.php");
    $user_id = $_SESSION['studentID'];

    $select = "select * from id_request_tbl where studentID='$user_id'";

    $run = $conn->query($select);

    if ($run->num_rows>0) {
        # code...
       
    ?>

        <!-- modal box --->



                    <div class="col-sm-10" style="margin-left:20px;" >
                        <h4>Your Request Has Been Submited</h4>   
                    </div>
                    
                </div>

            </div>
        </div>
    </div>    

    



    <?php
    
    }else{



        ?>

        <?php

                $select  = "select * from register_tbl where studentID = '$user_id'";
                    $run = $conn->query($select);
                    if ($run->num_rows>0) {
                        # code...
                        while ($row = $run -> fetch_array()) {
                            # code...
                            $user_Fname = $row['student_firstName'];
                            $user_Lname = $row['student_lastName'];
                            $user_id = $row['studentID'];
                            $user_school = $row['school'];
                            $user_department = $row['department'];
                            $user_progType = $row['progType'];
                            $user_program = $row['program'];
                            $user_year = $row['year'];
                            $user_id_generated = $row['user_id_generated'];
                        }
                    }

                    if ($user_id_generated != "") {
                        # code...

         ?>

        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">GENERATE ID</h5>
                                <button type="button" class="close"  aria-label="Close">
                                <a href="welcome1.php" ><span aria-hidden="true">  &times;</span></a>
                                
                                </button>
                            </div>
                    
                        <div class="modal-body">
            
                            <div class="col-sm-10">
                                <h4>Your ID is "<span class="text text-danger"><?php echo $user_id_generated; ?></span>"</h4>
                                <p><b>NOTE: </b> Use this with your login password to cast vote</p>
                            </div>

                        </div>

                    </div>
                </div>
        </div>

    <?php
        }
        else{

    ?>
    <div class="row justify-content-center">
        <div class="col-sm-8 col-sm-offset-2 alert px-0 pt-2 pb-0 mt-3 mb-1 " >

                <form method="POST" action="idgenerate-process.php" id="myform">
                            
                            
                            <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="FirstName">First Name</label>
                                        </div>
                                        <div class="col">
                                            <input type="text" name="user_Fname" class="form-control" id="FirstName" placeholder="Enter Last Name" required value="<?php echo $user_Fname; ?>" readonly>
                                        </div>
                                    </div>                  
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="LastName">Last Name</label>
                                    </div>
                                    <div class="col">
                                          <input type="text" name="user_Lname" class="form-control" id="email" placeholder="Enter First Name" required value="<?php echo $user_Lname; ?>" readonly>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="student ID">Student ID</label>
                                    </div>
                                    <div class="col">
                                         <input type="text" name="user_id" class="form-control" id="email" placeholder="Enter student ID" required value="<?php echo $user_id; ?>" readonly>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                            <label for="School">School</label>
                                    </div>
                                    <div class="col">
                                        <input type="text" name="user_school" class="form-control" id="school" placeholder="Enter School" required value="<?php echo $user_school; ?>" readonly>
                                    </div>
                                </div>

                            </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                                <label for="department">Department</label>
                                        </div>
                                        <div class="col">
                                            <input type="text" name="user_department" class="form-control" id="department" placeholder="Enter department" required value="<?php echo $user_department; ?>" readonly>
                                        </div>
                                    </div>
                                </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                            <label for="progType">Program Type</label>
                                    </div>
                                    <div class="col">
                                        <input type="text" name="user_progType" class="form-control" id="progType" placeholder="Enter Program Type" required value="<?php echo $user_progType; ?>" readonly>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="program">Program</label>
                                    </div>
                                    <div class="col">
                                         <input type="text" name="user_program" class="form-control" id="program" placeholder="Enter program" required value="<?php echo $user_program; ?>" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                            <label for="year">Year</label>
                                    </div>
                                    <div class="col">
                                        <input type="text" name="user_year" class="form-control" id="year" placeholder="Enter year of program" required value="<?php echo $user_year; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                        
                        <div class="form-group">

                                <button type="submit" class="btn btn-block btn-success" name="idrequest">Id Request</button>
                        </div>

        
                    </form>

        </div>

    </div>


        <?php

            }
            }

        ?>



           
              <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- Bootstrap core JavaScript-->
    <script src="admin/vendor/jquery/jquery.min.js"></script>
  <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="admin/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="admin/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="admin/js/demo/datatables-demo.js"></script>
  
  <script>
       $(document).ready(function(){
            $('#exampleModal').modal('show');
            $('#exampleModal2').modal('show');
        }); 
    </script>




               
</body>
                
    </html>