<?php

require("../includes/db.php");

if (isset($_POST['add_elections'])) {
    # code...
    $elections_name = $_POST['elections_name'];
    $elections_start_date = $_POST['elections_start_date'];
    $elections_end_date = $_POST['elections_end_date'];
    $etime=$_REQUEST['etime'];
    $stime=$_REQUEST['stime'];
    
    $date_now = new DateTime($elections_start_date);
    $date2    = new DateTime($elections_end_date);

    if ($date_now > $date2)   {
            echo "<script type='text/javascript'>alert('Enter Valid Date');</script>";
                         }

    else{                     
            $insert = "INSERT INTO elections_tbl (elections_name,elections_start_date,elections_end_date,elections_start_time,elections_end_time) values('$elections_name','$elections_start_date','$elections_end_date', '$stime','$etime')";

            $run=$conn->query($insert);

            if($run){
                echo "<script> alert('you have successfully add a new election'); </script>";
                header("Location: add_new_elections.php");
            }else {
                echo "<script> alert('sorry  you can\'t add a new election ' ); </script>";
            }

    }    
}

?>