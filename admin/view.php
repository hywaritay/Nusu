<h1>Notifications</h1>

<?php
    
    require("../includes/db.php");

    $id = $_GET['id'];

    $query ="UPDATE `id_request_tbl` SET `status` = 'read' WHERE `id` = $id;";
    $run = $conn->query($query);

        if($run){
            
            header("location:idrequest.php");
        }else{
            echo "<script> alert('Something went wrong try again')</script>";
        }
    
?><br/>
<a href="updateId.php.php">Back</a>