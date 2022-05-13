<?php

    session_start();
    include("loginHeader1.php");

    if(!$_SESSION['user_id_generated']){
        header('location:election.php');

        exit();

    }
?>

<br>

<div class="container-fluid">
<div class="card shadow">
   
        <div class="card-body">
            <form  method="post" enctype="multipart/form-data" id="votecaste-form">
                            <?php

                                    require("includes/db.php");
                                    $elections_name = $_GET['elections_name'];
                                    $elections_name=str_replace('-','',$elections_name);

                                    ?>


                        <div class="form-group">
                            <input type='text' value="<?php echo $elections_name;?>" class='form-control' readonly />
                        </div>

                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <tr>
                                <th>CASTE VOTE</th>
                                <th>FIRST NAME</th>
                                <th>LAST NAME</th>
                                <th>ID NUMBER</th>
                                <th>PARTY NAME</th>
                                <th>PARTY IMAGE</th>
                                <th>CANDIDATE IMAGE</th>
                            </tr>

                            <?php

                                $select = "select * from candidates_tbl where elections_name = '$elections_name'";
                                $run=$conn->query($select);
                                if ($run->num_rows>0) {
                                    # code...
                                    while ($row=$run->fetch_array()) {
                                        # code...
                            ?>

                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <div class="box">
                                                            <label >
                                                                <input type="radio"  name="ID_Number" value="<?php echo $row['ID_Number'];?>">
                                                                <span class="vote">Vote</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="form-group">
                                                        <label>  <?php echo $row['firstName'];?> </label>        
                                                    </div>

                                                </td>

                                                <td>
                                                    <div class="form-group">
                                                    <label>  <?php echo $row['lastName'];?> </label>
                                                    </div>

                                                </td>

                                                <td>
                                                    <div class="form-group">
                                                    <label>  <?php echo $row['ID_Number'];?> </label>
                                                    </div>

                                                </td>

                                                <td>
                                                    <div class="form-group">
                                                    <label>  <?php echo $row['partyName'];?> </label>
                                                    </div>

                                                </td>


                                                <td>
                                                    <div class="form-group">
                                                
                                                <?php 
                                                
                                                echo '<img src="data:image/jpeg;base64,'.base64_encode($row['partyImage']).'" height="100" width="100" />';
                                                
                                                ?>
                                                
                                                    </div>

                                                </td>


                                                <td>
                                                    <div class="form-group">
                                                
                                                <?php 
                                                
                                                echo '<img src="data:image/jpeg;base64,'.base64_encode($row['candidateImage']).'" height="100" width="100" />';
                                                
                                                ?>
                                                
                                                    </div>

                                                </td>

                                            </tr>
                                
                                <?php
                                        }
                                        }

                                ?>

                        </table>
                    </div>

                <input type="submit" class="btn btn-success" value="Now Caste Your Vote" name="vote_caste">
            </form>
        </div>
           
</div>
</div>


<?php

    if (isset($_POST['vote_caste'])) {
        # code...
        $candidates_IDNumber = $_POST['ID_Number'];
        $user_email = $_SESSION['email'];

        $select = "select * from results_tbl where user_email='$user_email' and elections_name='$elections_name'";
        $exel=$conn->query($select);

        if ($exel->num_rows>0) {
            # code...

            echo "You have already caste your vote against the Election".$elections_name;
        }else {
            
            $insert = "insert into results_tbl (user_email,candidates_IDNumber,elections_name) values('$user_email','$candidates_IDNumber',
        '$elections_name')";

         $run=$conn->query($insert);

         if ($run) {
             # code...

             $update = "update candidates_tbl set  total_votes=`total_votes`+'1' where ID_Number='$candidates_IDNumber'
             and elections_name='$elections_name'";

             $exe=$conn->query($update);

             if ($exe) {
                 # code...
                 echo "You Have Successfully cast your vote";
             }
             else {
                 echo "You did not caste your vote successfully";
             }
         }else {
             echo "Error";
         }
            
        }

        
    }

?>


<?php
    require_once "includes/db.php";
    if(isset($_GET['image_id'])) {
        $sql = "SELECT partyImageProperties,partyImage FROM candidates_tbl WHERE id=" . $_GET['image_id'];
		$result = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_error($conn));
		$row = mysqli_fetch_array($result);
		header("Content-type: " . $row["partyImageProperties"]);
        echo base64_encode($row['partyImage'] );
	}
	
?>


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

</body>
</html>