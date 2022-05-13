<?php

include ('adminHeader.php');

?>

<div class="container">
    <div class="col-sm-6">

    <h3>ADD NEW ELECTION</h3>

        <form method="post" action="add_new_elections-process.php">
            <div class="form-group">
                <label for="electionName">Add Election Name</label>
                <input type="text" name="elections_name" class="form-control">
            </div>


            <div class="form-row my-4">
                       
                        <div class="col">
                              <div class="form-group">
                                      <label for="electionName">Election Start Date</label>
                                      <input type="date" name="elections_start_date" class="form-control">
                              </div>
                        </div>

                        <div class="col">
                            <div class="form-group">
                                  <label for="electionName">Election End Date</label>
                                  <input type="date" name="elections_end_date" class="form-control">
                            </div>
                        </div>
            </div>

            <div class="form-row my-4">
                       
                       <div class="col">
                             <div class="form-group">
                                     <label for="electionName">Election Start Time</label>
                                     <input type="time" name="stime" class="form-control">
                             </div>
                       </div>

                       <div class="col">
                           <div class="form-group">
                                 <label for="electionName">Election End Time</label>
                                 <input type="time" name="etime" class="form-control">
                           </div>
                       </div>
           </div>

            <input type="submit" class="btn btn-info" name="add_elections">
        </form>

    </div>
</div>

<?php

    require("../includes/db.php");
    $select = "select * from elections_tbl";

    $run = $conn->query($select);

    if ($run->num_rows>0) {
        # code...
        while ($row=$run->fetch_array()) {
            # code...
           

            ?>

           <br>
            <?php
        }
    }
?>



<div class="container-fluid" >

<!-- Page Heading -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h5 class="m-0 font-weight-bold text-primary">ELECTION DETAIL</h5>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
                       <th>No.</th>
                        <th>ELECTION NAME</th>
                        <th>ELECTION START DATE</th>
                        <th>ELECTION END DATE</th>
                        <th>ELECTION START TIME</th>
                        <th>ELECTION END TIME</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                        
          </tr>
        </thead>
      

       
        <?php

$select = "select * from elections_tbl";

$run=$conn->query($select);

if ($run->num_rows>0) {
    # code...
    $num=0;
    while ($row=$run->fetch_array()) {
        # code...
        $election_id = $row['id'];
      
        ?>

       

                    <tr>

                        <td>
                            <div class="form-group">
                                <label>  <?php echo $num = $num +1?> </label>        
                            </div>

                        </td>
                       

                        <td>
                            <div class="form-group">
                                <label>  <?php echo $row['elections_name'];?> </label>        
                            </div>

                        </td>

                        <td>
                            <div class="form-group">
                            <label>  <?php echo $row['elections_start_date'];?> </label>
                            </div>

                        </td>

                        <td>
                            <div class="form-group">
                            <label>  <?php echo $row['elections_end_date'];?> </label>
                            </div>

                        </td>

                        <td>
                            <div class="form-group">
                            <label>  <?php echo $row['elections_start_time'];?> </label>
                            </div>

                        </td>

                        <td>
                            <div class="form-group">
                            <label>  <?php echo $row['elections_end_time'];?> </label>
                            </div>

                        </td>

                        <td>
                            <div class="form-group">

                                <button type="submit" class="btn btn-info btn-block" name="updateElection">
                                <a href="updateElection.php?id=<?php echo $election_id; ?>" id="updateElection" style="color:white" >update</a>
                                </button>
                            </div>
                        </td>


                        <td>
                            <div class="form-group">

                                <button type="submit" class="btn btn-danger btn-block" name="deleteElection">
                                <a href="deleteElection.php?id=<?php echo $election_id; ?>" id="deleteElection" style="color:white" >delete</a>
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

   