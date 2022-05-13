<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blooger</title>

        <!-- Custom Style   -->
        <link rel="stylesheet" href="css/Style.css">
 <!-- <link href="../admin/css/sb-admin-2.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">  
  <link href="../admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="./css/all.css">

    <!-- --------- Owl-Carousel ------------------->
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">

    <!-- ------------ AOS Library ------------------------- -->
    <link rel="stylesheet" href="./css/aos.css">


      <!-- javascript plugins -->
    <!-- <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css"> -->
    <script src="../admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/jquery/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="js/script.js"></script>

</head>

<body>

    <!-- ----------------------------  Navigation ---------------------------------------------- -->

    <nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="#" class="text-gray">Blooger</a>
            </div>
            <div class="toggle-collapse">
                <div class="toggle-icons">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div >
                <ul class="nav-items">
                    <li class="nav-link">
                        <a href="#">Home</a>
                    </li>
                    <li class="nav-link">
                        <a href="#about">About</a>
                    </li>
                    <li class="nav-link">
                        <a href="#contact">Contact Us</a>
                    </li>
                    <li class="nav-link">
                        <a href="#contact">Login</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
    <!-- ------------x---------------  Navigation --------------------------x------------------- -->

    <!----------------------------- Main Site Section ------------------------------>

    <div class="container-fluid content" id="register">
    <div class="row justify-content-center">
        <div class="col-11 col-sm-9 col-md-7 col-lg-7 col-xl-6 text-center p-0 mt-0 mb-0">
            <div class="card px-0 pt-2 pb-0 mt-2 mb-2" style=" background-color: #dde1e7;">
                <h2 id="heading">Sign Up Your User Account</h2>
                <p>Fill all form field to go to next step</p>
                <form action="createAccount.php" method="POST" enctype="multipart/form-data" id="msform" autocomplete="off">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="personal"><strong>Profile</strong></li>
                        <li id="details"><strong>Details</strong></li>
                        <li id="account"><strong>Account Setup</strong></li>
                        <li id="PImage"><strong>Profile Image</strong></li>
                    </ul>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br> <!-- fieldsets -->
                    <fieldset id="Profile">
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Personal Information:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 1 - 4</h2>
                                </div>
                            </div> 
                            <div class="form-group">
                                 <input type="text"  name="firstName" required id="firstName" class="form-control" placeholder="First Name">                            
                            </div>
                            <input type="text" name="lastName" required id="lastName" class="form-control" placeholder="Last Name">
                            <input type="text"  name="middleName"  id="middleName" class="form-control" placeholder="Middle Name">
                       
                            <select name="gender" id="gender" required class="form-control">
                                    <option value="">Sex</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                            </select>

                            <input type="text" name="address" id="address" required class="form-control" placeholder="address">
                            

                        </div> <input type="button" name="next" class="next action-button" value="Next" id="next" />
                    </fieldset>
                    <fieldset id="Details">
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Student Information:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 2 - 4</h2>
                                </div>
                            </div> 


                            <input type="number"  name="studentID" required id="studentID" class="form-control" placeholder="Student ID" maxlength="7">
                            <select name="school" id="School" required class="form-control">
                                    <option value="">School</option>
                                    <option value="Agriculture">Agriculture</option>
                                    <option value="Education">Education</option>
                                    <option value="Environmental Sciences">Environmental Sciences</option>
                                    <option value="Natural Resources and Management">Natural Resources and Management</option>
                                    <option value="Social Sciences">Social Sciences</option>
                                    <option value="Technology">Technology</option>

                            </select>

                            <select name="department" required id="department" class="form-control">
                                    <option value="">Department</option>
                                    <option value="Animal Sciences">Animal Sciences</option>
                                    <option value="Soil Sciences">Soil Sciences</option>
                                    <option value="Chemistry">Chemistry</option>
                                    <option value="Forestry">Forestry</option>
                                    <option value="Wood Science">Wood Science</option>
                                    <option value="Economics">Economics</option>
                                    <option value="Agric Business Management">Agric Business Management</option>
                                    <option value="Crop Science">Crop Science</option>
                                    <option value="Nursing">Nursing</option>
                                    <option value="Biological Sciences">Biological Sciences</option>
                                    <option value="Aquaculture and Fisheries Management">Aquaculture and Fisheries Management</option>
                                    <option value="Wildlife Management and Conservation">Wildlife Management and Conservation</option>
                                    <option value="Agricultural Economics and Entreprenuership">Agricultural Economics and Entreprenuership</option>
                                    <option value="Sociology and Social Work">Sociology and Social Work</option>
                                    <option value="Agricultural and Biosystems Engineering">Agricultural and Biosystems Engineering</option>
                                    <option value="Mathematics and Statistics">Mathematics and Statistics</option>
                                    <option value="Physics and Computer Science">Physics and Computer Science</option>
                                    <option value="Industrial Technology">Industrial Technology</option>
                                    <option value="Institute of Food Technology, Nutrition and Consumer Studies">Institute of Food Technology, Nutrition and Consumer Studies</option>
                                </select>
                            
                                <select name="programType" required id="ProgramType" class="form-control">
                                    <option value="">Program Type</option>
                                    <option value="Certificate">Certificate</option>
                                    <option value="Ordinary Diploma">Ordinary Diploma</option>
                                    <option value="Higher Diploma">Higher Diploma</option>
                                    <option value="Bachelor of Science">Bachelor of Science</option>
                                </select>

                                <select name="program" id="Program" required class="form-control">
                                    <option value="">Program</option>
                                    <option value="Agriculture General">Agriculture General</option>
                                    <option value="Agricultural Extension and Rural Sociology">Agricultural Extension and Rural Sociology</option>
                                    <option value="Animal Science">Animal Science</option>
                                    <option value="Crop Science">Crop School</option>
                                    <option value="Crop Protection and Soil Science">Crop Protection and Soil Science</option>
                                    <option value="Agric-Business Management">Agric-Business Management</option>
                                    <option value="Home Economics and Community Development">Home Economics and Community Development</option>
                                    <option value="Nutrition and Dietetics">Nutrition and Dietetics</option>
                                    <option value="Food Nutrition Security">Food Nutrition Security</option>
                                    <option value="Agricultural Communication and Media">Agricultural Communication and Media</option>
                                    <option value="Agricultural Education">Agricultural Education</option>
                                    <option value="Home Economics Education">Home Economics Education</option>
                                    <option value="Applied Ecology and Conservation">Applied Ecology and Conservation</option>
                                    <option value="Biology">Biology</option>
                                    <option value="Chemistry">Chemistry</option>
                                    <option value="Geography">Geography</option>
                                    <option value="Physics">Physics</option>
                                    <option value="Development Studies">Development Studies</option>
                                    <option value="Environmental Chemistry">Environmental Chemistry</option>
                                    <option value="Environment and Development">Environment and Development</option>
                                    <option value="Environmental Management and Quality Control">Environmental Management and Quality Control</option>
                                    <option value="Rural Development">Rural Development</option>
                                    <option value="Natural Resources Management(General)">Natural Resources Management(General)</option>
                                    <option value="Aquaculture and Fisheries Management">Aquaculture and Fisheries Management</option>
                                    <option value="Forestry">Forestry</option>
                                    <option value="Horticlture">Horticlture</option>
                                    <option value="Wood Science">Wood Science</option>
                                    <option value="Wildlife Management">Wildlife Management</option>
                                    <option value="Ecotourism and Biodiversity Conservation">Ecotourism and Biodiversity Conservation</option>
                                    <option value="Agricultural Economics and Entreprenuership">Agricultural Economics and Entreprenuership</option>
                                    <option value="Agricultural Engineering">Agricultural Engineering</option>
                                    <option value="Energy Studies">Energy Studies</option>
                                    <option value="Business Information and Technology">Business Information and Technology</option>
                                    <option value="Computer Science">Computer Science</option>
                                    <option value="Electronics and Telecomminication">Electronics and Telecomminication</option>
                                    <option value="Statistics">Statistics</option>
                                    <option value="Mathematics">Mathematics</option>
                                    <option value="Applied Physics">Applied Physics</option>
                                    <option value="Physics with Computer Science">Physics with Computer Science</option>
                                    <option value="Industrial Technology">Industrial Technology</option>

                                </select>
                                   
                                                           
                            <select name="year" id="year" required class="form-control">
                                    <option value="">Year</option>
                                    <option value="ONE">ONE</option>
                                    <option value="TWO">TWO</option>
                                    <option value="THREE">THREE</option>
                                    <option value="FOUR">FOUR</option>
                            </select>


                        </div> 
                        <input type="button" name="next" class="next action-button" value="Next" id="next" /> 
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" id="previous" />
                    </fieldset>
                    <fieldset id="accountSetUp">
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Account Setup:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 3 - 4</h2>
                                </div>
                            </div> 

                            <input type="email"  name="email" id="email" required class="form-control" placeholder="email">
                            <input type="text"  name="username" id="username" required class="form-control" placeholder="Username" minlength="7" maxlength="10">
                            <input type="password" name="password" id="password" required class="form-control" placeholder="Password" minlength="7" maxlength="10">
                            <input type="password" class="form-control" id="conf_password" name="conf_password" placeholder="Confirm Password">

                        </div> 
                        <input type="button" name="next" class="next action-button" value="Next" id="next" /> 
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" id="previous"/>
                    </fieldset>
                    <fieldset id="profileImage">
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Finish:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 4 - 4</h2>
                                </div>
                            </div> <br><br>
                          
                                    <div class="upload-profile-image d-flex justify-content-center pb-5" id="preview-container">
                                        <div class="text-center">
                                            <div class="d-flex justify-content-center">
                                                <img class="camera-icon" src="./assets/camera-solid.svg" alt="camera" id="preview-icon">
                                            </div>
                                            <img src="./assets/profile/beard.png" style="width: 150px; height: 150px" class="img rounded-circle" alt="profile" id="picture">
                                            <small class="form-text text-black-50">Choose Image</small>
                                            <input type="file" form="msform"  class="form-control-file preview-image" name="profileUpload" id="upload-profile" required>
                                        </div>
                                    </div>
                        </div>
                <input type="submit" class="next action-button" name="submit" value="Submit">
                <input type="button" name="previous" class="previous action-button-previous" value="Previous" id="previous" />
                
                  
                        

                        
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

    <!---------------x------------- Main Site Section ---------------x-------------->


    <!-- --------------------------- Footer ---------------------------------------- -->

<?php

include("footer.php");

?>


<!-- -------------x------------- Footer --------------------x------------------- -->

<script src="./js/scripts.js"></script>
<!-- Jquery Library file -->
<script src="./js/Jquery3.4.1.min.js"></script>

<!-- --------- Owl-Carousel js ------------------->
<script src="./js/owl.carousel.min.js"></script>

<!-- ------------ AOS js Library  ------------------------- -->
<script src="./js/aos.js"></script>


</body>

</html>

