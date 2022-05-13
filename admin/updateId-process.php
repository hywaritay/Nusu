<?php

    include("../includes/db.php");
                if (isset($_POST['update'])) {
                    # code...
                    $user_id = $_POST['user_id'];
                    $user_progType = $_POST['user_progType'];
                    $user_program = $_POST['user_program'];
                    $user_id_generated = $_POST['user_id_generated'];

                    if ($user_id_generated != "") {


                        $update = "update register_tbl set user_id_generated='$user_id_generated' where studentID = '$user_id';";

                        $run = $conn->query($update);
    
                        if ($run) {
                            # code...
    
    
                            $select  = "select * from register_tbl where studentID = '$user_id'";
                            $run2 = $conn->query($select);
                          if ($run2->num_rows>0) {
            
                                while ($row = $run2 -> fetch_array()) {
                                    # code...
                                    $user_Fname = $row['student_firstName'];
                                    $user_Lname = $row['student_lastName'];
                                    $user_id = $row['studentID'];
                                    $user_email = $row['email'];
                                    $user_id_generated = $row['user_id_generated'];


                                     # code...

                                    $to= $user_email; // Receiver Email ID, Replace with your email ID
                                    $subject='Requested id';
                                    $message="Dear :".$user_Fname."\n".
                                    "Your ID is :".$user_id_generated."\n".
                                    "NOTE: Use this with your login password to cast vote"."\n\n";
                                    $headers = "FROM:hywaritay1993@gmail.com";


                                    if(mail("nusu.edu.sl@gmail.com", $subject, $message,$headers)){
                                    
                                        $delete = "delete from id_request_tbl where studentID='$user_id';";
                                        $del = $conn->query($delete);
                                        if ($del) {
                                            # code...
                
                                            echo "<script> alert('Update Successfully and deleted')</script>;";
                                            echo "<script> window.location.href = 'idrequest.php'</script>";
                                        }else {
                                            
                                            echo "<script> alert('Something went wrong !Error')</script>";
                                        }

                                    }
                                        else{
                                            echo "Something went wrong!";
                                            echo "to: ".$to;
                                            echo "subject: ".$subject;
                                            echo "message: ".$message;
                                            echo "headers: ".$headers;
                                        }
                                }
                        
                             
                            }
    
                       
    
                        }
                       

                   

                       
                    }else {
                        echo "error";
                    }
                }
    ?>