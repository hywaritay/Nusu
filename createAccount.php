<?php


    session_start();
    require('includes/db.php');

    if(isset($_POST['submit'])){
      
      
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $middleName = $_POST['middleName'];
        $gender = $_POST['gender'];
        $studentID = $_POST['studentID'];
        $school = $_POST['school'];
        $year = $_POST['year'];
        $department = $_POST['department'];
        $programType = $_POST['programType'];
        $program = $_POST['program'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $files = addslashes(file_get_contents($_FILES["profileUpload"]["tmp_name"]));
        

        // check for valid name type
        if (!preg_match ("/^[a-zA-z]*$/", $firstName) ) {  
            $ErrMsg = "Only alphabets and whitespace are allowed.";  
                     echo $ErrMsg;  
        } 

        if (!preg_match ("/^[a-zA-z]*$/", $lastName) ) {  
            $ErrMsg = "Only alphabets and whitespace are allowed.";  
                     echo $ErrMsg;  
        } 

        if (!preg_match ("/^[a-zA-z]*$/", $middleName) ) {  
            $ErrMsg = "Only alphabets and whitespace are allowed.";  
                     echo $ErrMsg;  
        } 

        if (!preg_match ("/^[0-9]*$/", $studentID) ){  
            $ErrMsg = "Only numeric value is allowed.";  
            echo $ErrMsg;  
        } 
 
            
            # code...
            //check if email is valid
            if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
                # code...
                header("Location: register.php?register=invalidEmail");
                
            }else {
                // check for username
                $sql = "SELECT * FROM register_tbl WHERE username = '$username'";
                $result = mysqli_query($conn,$sql);
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0) {
                    # code...
                    header("Location: register.php?register=usernamealreadytaken");
                    exit();
                }else {
                    # code...

                    // hashing the password
                    $hashedPwd = password_hash($password,PASSWORD_DEFAULT);
                    $insert = "insert into register_tbl(
                        student_firstName,student_lastName,student_middleName,student_sex,studentID,school,year,
                        department,progType,program,email,address,username,password,profileImg)
                         values('$firstName','$lastName','$middleName','$gender','$studentID','$school','$year',
                         '$department','$programType','$program','$email','$address','$username','$hashedPwd','$files')";
                    $run = $conn->query($insert);
                    if($run){
                        
                        $_SESSION['id'] = $row['id'];
                        header("Location: login.php");
            
                    }else{
                        echo "Error";
                    }
                }
            }
            
        

    
    }else {
        
        header("Location: register.php");
    }


?>