<?php

    session_start();
    include("loginHeader1.php");

    
?>

<br>

<div class="container ">


    <div class="row justify-content-center">
    <div class="col-md-9 col-md-offset-3 ">

<h3 class="text text-info text-center">RESULT PORTION</h3>

<p class="text text-danger">
    In this section those elections results display which are closed or date expired
</p>

<form  method="post">

<div class="form-group">
    <select  class="form-control" name="elections_name">
        <option value="" selected="selected">Select ELection</option>
        <?php

            $current_ts=time();
            require("includes/db.php");
            $select = "select * from elections_tbl";

            $run = $conn->query($select);

            if ($run->num_rows>0) {
                # code...
                while ($row=$run->fetch_array()) {
                    # code...
                    $elections_name = $row['elections_name']; 
                    $elections_start_date = $row['elections_start_date'];
                    $elections_end_date = $row['elections_end_date'];

                    ?>

                    <?php 
                    
                        $elections_end_date_ts = strtotime($elections_end_date);

                        if ($elections_end_date_ts<$current_ts) {
                            # code...

                            ?>

                    <option value="<?php echo $elections_name; ?>"><?php echo $elections_name;?></option>                            

                    <?php

                        }
                }
            }

        ?>
    </select>

    </div>

    <div class="form-group">
        <input type="submit" name="search_results" class="btn btn-success" value="Search Result">
    </div>

    </form>

    <table class="table table-responsive table-hover table-bordered text-center">

    <tr>
        <td>#</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>ID Number</td>
        <td>Party Name</td>
        <td>Party Image</td>
        <td>Candidate Image</td>
        <td>Obtain Votes</td>
        <td>Winning Status</td>
    </tr>


    <?php

        if (isset($_POST['search_results'])) {
            # code...
            $elections_name = $_POST['elections_name'];
            $select = "Select * from results_tbl where elections_name='$elections_name'";
            $run = $conn->query($select);
            if ($run->num_rows>0) {
                # code...
                $total_elections_votes=0;
               
                while ($row=$run->fetch_array()) {
                    # code...
                    $total_elections_votes=$total_elections_votes + 1;
                   
                }
            }

            $select1 = "select * from candidates_tbl where elections_name = '$elections_name'";
            $run1=$conn->query($select1);
            if ($run1->num_rows>0) {
                $total = 0;
                # code...
                while ($row2=$run1->fetch_array()) {
                    # code...
                    $total = $total+1;
                    $firstName = $row2['firstName'];
                    $lastName = $row2['lastName'];
                    $IDNumber = $row2['ID_Number'];
                    $partyName = $row2['partyName'];
                    $total_votes = $row2['total_votes'];
                    $percentage= round((($total_votes/$total_elections_votes) * 100));

                    ?>
                    <tr>
                        <td><?php echo $total; ?></td>
                        <td><?php echo $firstName; ?></td>
                        <td><?php echo $lastName; ?></td>
                        <td><?php echo $IDNumber; ?></td>
                        <td><?php echo $partyName; ?></td>
                        <td> <?php 
                         echo '<img src="data:image/jpeg;base64,'.base64_encode($row2['partyImage']).'" height="80" width="80" />';
                         ?></td>
                        <td> <?php  echo '<img src="data:image/jpeg;base64,'.base64_encode($row2['candidateImage']).'" height="80" width="80" />'; ?> </td>
                       
                        <td><?php echo $total_votes; ?></td>
                        <td>

                            <?php

                                if ($percentage>50) {
                                    # code...
                                    ?>

                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar"
                                        aria-valuenow="<?php echo $percentage; ?>" aria-valuemin="0"
                                        aria-valuemax="<?php echo $percentage; ?>" style="width: <?php echo $percentage; ?>%">

                                        <?php echo $percentage; ?>%

                                        </div>
                                    </div>

                                    <?php
                                }else if($percentage>40){
                                    # code...

                                    ?>

                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" role="progressbar"
                                        aria-valuenow="<?php echo $percentage; ?>" aria-valuemin="0"
                                        aria-valuemax="<?php echo $percentage; ?>" style="width: <?php echo $percentage; ?>%">

                                        <?php echo $percentage; ?>%

                                        </div>
                                    </div>

                                    <?php

                                }else {
                                    # code...

                                    ?>

                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar"
                                        aria-valuenow="<?php echo $percentage; ?>" aria-valuemin="0"
                                        aria-valuemax="<?php echo $percentage; ?>" style="width: <?php echo $percentage; ?>%">

                                        <?php echo $percentage; ?>%

                                        </div>
                                    </div>

                                    <?php
                                }
                            ?>

                        </td>


                    </tr>

                    <?php
                }

                ?>

                <tr>
                    <td colspan="2">Total Votes</td>
                    <td><?php echo $total_elections_votes;?></td>
                
                </tr>
                <?php

            } else {
                ?>

                <tr>
                <td colspan="4">Record Not Found</td>
                </tr>

                <?php
                
            }
        }

?>


    </table>

</div>
    </div>

        

<div class="row">
<div class="row">

<div class="col-sm-4 col-lg-6">

  <!-- Area Chart -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Area Chart</h6>
    </div>
    <div class="card-body">
      <div class="chart-area">
      <?php


include("chat.php");


?>
      </div>
      <hr>
      Styling for the area chart can be found in the <code>/js/demo/chart-area-demo.js</code> file.
    </div>
  </div>

  <!-- Bar Chart -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Bar Chart</h6>
    </div>
    <div class="card-body">
      <div class="chart-bar">
        <canvas id="myBarChart"></canvas>
      </div>
      <hr>
      Styling for the bar chart can be found in the <code>/js/demo/chart-bar-demo.js</code> file.
    </div>
  </div>

</div>

<!-- Donut Chart -->
<div class="col-sm-4 col-lg-6 col-offset-1">
  <div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Donut Chart</h6>
    </div>
    <!-- Card Body -->
    <div class="card-body">
      <div class="chart-pie pt-4">
        <canvas id="myPieChart"></canvas>
      </div>
      <hr>
      Styling for the donut chart can be found in the <code>/js/demo/chart-pie-demo.js</code> file.
    </div>
  </div>
</div>
</div>
</div>        
        
    
</div>

