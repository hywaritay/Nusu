
<?php
    // header.php
    include ('header.php');


?>

    

    <!-- registration area -->
    <section id="register">
        <div class="row m-0">
            <div class="col-lg-4 offset-lg-4">
                <div class="text-center pb-5">
                    <h1 class="login-title text-dark">Register</h1>
                    <p class="p-1 m-0 font-ubuntu text-black-50">Register and enjoy additional features</p>
                    <span class="font-ubuntu text-black-50">I already have <a href="login.php">Login</a></span>
                </div>

                

                
                <div class="d-flex justify-content-center">
                    <form  action="createAccount.php" method="POST" enctype="multipart/form-data" id="reg-form" autocomplete="off">

                    <!-- upload Image-->
                <div class="upload-profile-image d-flex justify-content-center pb-5" id="preview-container">
                    <div class="text-center">
                        <div class="d-flex justify-content-center">
                            <img class="camera-icon" src="./assets/camera-solid.svg" alt="camera" id="preview-icon">
                        </div>
                        <img src="./assets/profile/beard.png" style="width: 150px; height: 150px" class="img rounded-circle" alt="profile" id="picture">
                        <small class="form-text text-black-50">Choose Image</small>
                        <input type="file" form="reg-form"  class="form-control-file preview-image" name="profileUpload" id="upload-profile" required>
                    </div>
                </div>

                    <!-- first name and last name input -->
                        <div class="form-row">
                            <div class="col">
                                <input type="text"  name="firstName" required id="firstName" class="form-control" placeholder="First Name">
                            </div>
                            <div class="col">
                                <input type="text" name="lastName" required id="LastName" class="form-control" placeholder="Last Name">
                            </div>
                        </div>

                    <!-- middle name and student id -->

                        <div class="form-row my-4">
                       
                        <div class="col">
                                <input type="text"  name="middleName"  id="middleName" class="form-control" placeholder="Middle Name">
                        </div>

                        <div class="col">

                                <select name="gender" id="Gender" required class="form-control">
                                    <option value="">Sex</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                        </div>

                        </div>

                        <div class="form-row my-4">
                            <div class="col">
                                <input type="number"  name="studentID" required id="studentID" class="form-control" placeholder="Student ID" maxlength="7">
                             </div>

                             
                            <div class="col">

                                <select name="school" id="School" required class="form-control">
                                    <option value="">School</option>
                                    <option value="Agriculture">Agriculture</option>
                                    <option value="Education">Education</option>
                                    <option value="Environmental Sciences">Environmental Sciences</option>
                                    <option value="Natural Resources and Management">Natural Resources and Management</option>
                                    <option value="Social Sciences">Social Sciences</option>
                                    <option value="Technology">Technology</option>

                                </select>

                            </div>

                        </div>

                        <div class="form-row my-4">
                            <div class="col">
                                
                            
                            <select name="year" id="Year" required class="form-control">
                                    <option value="">Year</option>
                                    <option value="ONE">ONE</option>
                                    <option value="TWO">TWO</option>
                                    <option value="THREE">THREE</option>
                                    <option value="FOUR">FOUR</option>
                                </select>
                             
                            </div>

                            <div class="col">

                                <select name="department" required id="Department" class="form-control">
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

                            </div>

                        </div>
                       
                        <div class="form-row my-4">
                        
                            <div class="col">

                                <select name="programType" required id="ProgramType" class="form-control">
                                    <option value="">Program Type</option>
                                    <option value="Certificate">Certificate</option>
                                    <option value="Ordinary Diploma">Ordinary Diploma</option>
                                    <option value="Higher Diploma">Higher Diploma</option>
                                    <option value="Bachelor of Science">Bachelor of Science</option>
                                </select>

                            </div>

                            <div class="col">

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

                            </div>

                        </div>

                        
                        <!-- Email and Address -->
                        <div class="form-row my-4">
                            <div class="col">
                                <input type="email"  name="email" id="email" required class="form-control" placeholder="email">
                            </div>
                            <div class="col">
                                <input type="text" name="address" id="address" required class="form-control" placeholder="address">
                            </div>
                        </div>


                        <!-- Username and Password -->
                        <div class="form-row my-4">
                            <div class="col">
                                <input type="text"  name="username" id="username" required class="form-control" placeholder="Username" minlength="7" maxlength="10">
                            </div>
                            <div class="col">
                                <input type="password" name="password" id="password" required class="form-control" placeholder="Password" minlength="7" maxlength="10">
                            </div>
                        </div>


                        <div class="submit-btn text-center my-3">
                            <button type="submit" class="btn btn-warning rounded-pill text-dark px-5" name="submit">continue</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- #registration area -->

    <?php

        include ('footer.php');


    ?>

