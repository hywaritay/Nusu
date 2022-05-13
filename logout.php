<?php

    session_start();
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['studentID']);
    unset($_SESSION['user_id_generated']);
    session_destroy();
    header("location:login.php");

?>