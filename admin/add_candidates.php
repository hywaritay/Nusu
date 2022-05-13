
<?php

include ('adminHeader.php');

?>

  

        <form method="GET" action="add_details_candidates.php" style="padding:20px">
        <h3>ADD CANDIDATES</h3>
            <div class="form-group">
                <label for="electionName">Add Election Name</label>
                
                <select class="form-control small" name="elections_name" style="width:300px">

                    <option value="" selected="selected">Select Election</option>

<?php

    require("../includes/db.php");
    $select = "select * from elections_tbl";

    $run = $conn->query($select);

    if ($run->num_rows>0) {
        # code...
        while ($row=$run->fetch_array()) {
            # code...

            ?>

            <option value="<?php echo $row['elections_name']; ?>"><?php echo $row['elections_name']; ?></option>

            <?php
        }
    }
?>

</select>

            </div>



            <label for="total_candidate">No of Candidates</label>

            <div class="input-group" style="width:300px">
                
                <input type="text" name="total_candidates" class="form-control" >
                   <div class="input-group-append">
                   <input type="submit" class="btn btn-info" name="add_elections" value="ADD" >
                        

                    </div>
            </div>
            
    </form>

  



<div class="container-fluid" >

<!-- Page Heading -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h5 class="m-0 font-weight-bold text-primary">CANDIDATE DETAILS</h5>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
                       <th>No.</th>
                        <th>FIRST NAME</th>
                        <th>LAST NAME</th>
                        <th>ID NUMBER</th>
                        <th>ELECTION NAME</th>
                        <th>PARTY NAME</th>
                        <th>PARTY IMAGE</th>
                        <th>CANDIDATE IMAGE</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
          </tr>
        </thead>
      

       
        <?php

$select = "select * from candidates_tbl ";

$run=$conn->query($select);

if ($run->num_rows>0) {
    # code...
    $num=0;
    while ($row=$run->fetch_array()) {
        # code...
        $id = $row['id'];
      
        ?>

       

                    <tr>

                        <td>
                            <div class="form-group">
                                <label>  <?php echo $num = $num +1?> </label>        
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
                            <label>  <?php echo $row['elections_name'];?> </label>
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

                        <td>
                            <div class="form-group">

                            <button type="submit" class="btn btn-info btn-block" name="updateCandidate">
                                <a href="updateCandidate.php?id=<?php echo $id; ?>" id="updateCandidate" style="color:white;" >update</a>
                                </button>
                                
                            </div>
                        </td>


                        <td>
                            <div class="form-group">

                            <button type="submit" class="btn btn-danger btn-block" name="deleteCandidate">
                                <a href="deleteCandidate.php?id=<?php echo $id; ?>" id="deleteCandidate" style="color:white;">delete</a>
                                </button>
                                
                            </div>
                        </td>

                    </tr>

     

        

        <?php
    }
}

?>


         
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


  <!-- Footer -->
  <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

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

  <script type="text/JavaScript">
  
    window.addEventListener("load",function () {
      
      const loader = document.querySelector(".loader");
      loader.className += " hidden"

    });
  
  </script>


</body>
</html>

    <?php

        require("../includes/db.php");

        

    ?>