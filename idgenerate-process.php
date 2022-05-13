
<?php

if (isset($_POST['idrequest'])) {
    # code...
    $user_Fname = $_POST['user_Fname'];
    $user_Lname = $_POST['user_Lname'];
    $user_id = $_POST['user_id'];
    $user_school = $_POST['user_school'];
    $user_department = $_POST['user_department'];
    $user_progType = $_POST['user_progType'];
    $user_program = $_POST['user_program'];
    $user_year = $_POST['user_year'];

    require("includes/db.php");


        # code...
        $insert = "insert into id_request_tbl(student_firstName,student_lastName,studentID,school,department,progType,program,year,status,date) values('$user_Fname','$user_Lname','$user_id','$user_school','$user_department','$user_progType','$user_program','$user_year','unread',CURRENT_TIMESTAMP)";
        $run = $conn->query($insert);

        if($run){
            echo "<script> alert('Your request has been submited successfully')</script>";
            header("location:idgenerate1.php");
        }else{
            echo "<script> alert('Something went wrong try again')</script>";
        }
    
}

?>