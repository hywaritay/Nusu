<?php

    session_start();
    include("loginHeader1.php");

    if(!$_SESSION['email']){
        header('location:login.php');

    }
?>

<br>

<div class="container " >

<div class="row justify-content-center ">

    <H4 class="mb-5">ENTER YOUR VOTER ID AND PASSWORD TO CASTE VOTE</H4>
</div>
    <div class="row justify-content-center ">
        <div  class="col-sm-5 col-sm-offset-3  mb-5 card " style=" background-color: #dde1e7;">

            <form method="POST" action="election-process.php" id="myfrm">
                    
                    
                            <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="Email">Enter Voter ID</label>
                                        </div>
                                        <div class="col">
                                            <input type="text"  name="user_id" class="form-control" id="Email" placeholder="Enter Your ID" required>
                                        </div>
                                    </div>                  
                            </div>


                
                            <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="password">Enter Password</label>
                                        </div>
                                        <div class="col">
                                            <input type="password" name="user_password" class="form-control" id="Password" placeholder="Enter Password" required>
                                        </div>
                                    </div>                  
                            </div>

                
                <div class="form-group">

                        <button type="submit" class="btn btn-success btn-block" name="vote" >Enter Voting Area</button>
                </div>

            </form>

        </div>

    </div>
</div>

