
<?php

include ('adminHeader.php');

?>


<div class="container-fluid" >

<!-- Page Heading -->

<!-- DataTales Example -->
<div class="card shadow mb-4" style="margin-top:40px">
  <div class="card-header py-3">
    <h5 class="m-0 font-weight-bold text-primary">STUDENT DETAILS</h5>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
                       <th>No.</th>
                        <th>FIRST NAME</th>
                        <th>LAST NAME</th>
                        <th>MIDDLE NAME</th>
                        <th>SEX</th>
                        <th>ID NUMBER</th>
                        <th>SCHOOL</th>
                        <th>YEAR</th>
                        <th>DEPARTMENT</th>
                        <th>PROGRAM TYPE</th>
                        <th>PROGRAM</th>
          </tr>
        </thead>
      

       
        <?php

require("../includes/db.php");

$select = "select * from register_tbl ";

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
                                <label>  <?php echo $row['student_firstName'];?> </label>        
                            </div>

                        </td>

                        <td>
                            <div class="form-group">
                            <label>  <?php echo $row['student_lastName'];?> </label>
                            </div>

                        </td>

                        
                        <td>
                            <div class="form-group">
                            <label>  <?php echo $row['student_middleName'];?> </label>
                            </div>

                        </td>

                        <td>
                            <div class="form-group">
                            <label>  <?php echo $row['student_sex'];?> </label>
                            </div>

                        </td>

                        <td>
                            <div class="form-group">
                            <label>  <?php echo $row['studentID'];?> </label>
                            </div>

                        </td>

                        <td>
                            <div class="form-group">
                            <label>  <?php echo $row['school'];?> </label>
                            </div>

                        </td>

                        <td>
                            <div class="form-group">
                            <label>  <?php echo $row['year'];?> </label>
                            </div>

                        </td>

                        <td>
                            <div class="form-group">
                            <label>  <?php echo $row['department'];?> </label>
                            </div>

                        </td>

                        <td>
                            <div class="form-group">
                            <label>  <?php echo $row['progType'];?> </label>
                            </div>

                        </td>

                        <td>
                            <div class="form-group">
                            <label>  <?php echo $row['program'];?> </label>
                            </div>

                        </td>

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