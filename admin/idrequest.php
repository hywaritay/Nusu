<?php

include ('adminHeader.php');

?>

<div class="container">
  <!-- DataTales Example -->
<div class="card shadow mb-4" style="margin-top:40px">
  <div class="card-header py-3">
    <h4 class="m-0 font-weight-bold text-primary"> REQUESTED DATA</h4>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"  >
        <thead>
          <tr>
                       <th>No.</th>
                        <th>FIRST NAME</th>
                        <th>LAST NAME</th>
                        <th>STUDENT ID</th>
                        <th>SCHOOL</th>
                        <th>DEPARTMENT</th>
                        <th>PROGRAM TYPE</th>
                        <th>PROGRAM</th>
                        <th>YEAR</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
          </tr>
        </thead>
      

       

            <?php
            include("../includes/db.php");
            $select = "select * from id_request_tbl;";
            $run = $conn->query($select);
            if ($run->num_rows>0) {
                # code...
                $total = 0;

                while ($row=$run->fetch_array()) {
                    # code...
                    $total = $total + 1;
                    $id = $row['id'];
             

        ?>

            <tr>
                <td><?php echo $total; ?></td>
                <td><?php echo $row['student_firstName']; ?></td>
                <td><?php echo $row['student_lastName']; ?></td>
                <td><?php echo $row['studentID']; ?></td>
                <td><?php echo $row['school']; ?></td>
                <td><?php echo $row['department']; ?></td>
                <td><?php echo $row['progType']; ?></td>
                <td><?php echo $row['program']; ?></td>
                <td><?php echo $row['year']; ?></td>

                <td>
                            <div>

                                <button type="submit" class="btn btn-info btn-block" >
                                <a href="updateId.php?id=<?php echo $id; ?>" id="updateId" style="color:white" >update</a>
                                </button>
                            </div>
                </td>
                
                <td>
                            <div>

                                <button type="submit" class="btn btn-danger btn-block" name="deleteIdRequest">
                                <a href="deleteIdRequest.php?id=<?php echo $id; ?>" id="deleteIdRequest" style="color:white" >delete</a>
                                </button>
                            </div>
                </td>
            </tr>

            <?php

                }

                }

                else{

                ?>

                <tr>
                    <td colspan="4"> RECORD NOT FOUND</td>
                </tr>

                <?php

                }
                ?>

        </table>


    </div>
    
  </div>

        

    </div>
</div>

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
  <script src="js/popup.js"></script>

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
