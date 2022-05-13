<?php

    session_start();
    include("loginHeader1.php");

    require('includes/db.php');

    if(!$_SESSION['user_id_generated']){
        header('location:election.php');

    }
?>

<br>

<div class="container">


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Generate ID</h5>
                        <button type="button" class="close"  aria-label="Close">
                        <a href="election1.php" ><span aria-hidden="true">  &times;</span></a>
                        
                        </button>
                    </div>
            
                <div class="modal-body">

                            <div class="col-sm-10 ">

                                <form  method="post" >

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label > <h5>Election name :</h5></label>
                                        </div>
                                                                
                                        <div class="col">
                                            
                                            <select class="form-control" name="elections_name">

                                                <option value="" selected="selected">Select Election</option>

                                                    <?php

                                                        require("includes/db.php");
                                                        $select = "select * from elections_tbl";

                                                        $run = $conn->query($select);

                                                        if ($run->num_rows>0) {
                                                                                    
                                                            while ($row=$run->fetch_array()) {

                                                    ?>

                                                            <option value="<?php echo $row['elections_name']; ?>"><?php echo $row['elections_name']; ?></option>

                                                    <?php
                                                        }
                                                            
                                                        }
                                                    ?>

                                            </select>
                                        
                                        </div>
                                </div>                  
                            </div>
                                
                                    
                                    <input type="submit" value="submit" name="search_candidate" class="btn btn-block" id="buttons">

                                </form>

                            </div>

</div>
</div>
</div>  

</div>



<?php

    date_default_timezone_set("Asia/Karachi");

    if (isset($_POST['search_candidate'])) {
        # code...

        $elections_name = $_POST['elections_name'];
        $select = "select * from elections_tbl where elections_name='$elections_name'";

        $run=$conn->query($select);

        if ($run->num_rows>0) {
            # code...
            while ($row=$run->fetch_array()) {
                # code...
                $elections_start_date=$row['elections_start_date'];
                $elections_end_date=$row['elections_end_date'];

            }
        }

        $current_ts=time();

        $elections_start_date_ts=strtotime($elections_start_date);
        $elections_end_date_ts = strtotime($elections_end_date);

        if ($elections_start_date_ts>$current_ts) {
            # code...
            echo "Election did not start please wait...";
        }elseif ($current_ts>$elections_end_date_ts) {

            echo "ELection has been closed you did not cast your vote ";
            # code...
        }else{

            ?>

<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Generate ID</h5>
                        <button type="button" class="close"  aria-label="Close">
                        <a href="election1.php" ><span aria-hidden="true">  &times;</span></a>
                        
                        </button>
                    </div>
            
                <div class="modal-body">

                    <a href="votecaste1.php?elections_name=<?php echo str_replace('','-',$elections_name);?>">CLick Here</a>


                </div>

            </div>
        </div>
</div>

            <?php
        }
    }

?>




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