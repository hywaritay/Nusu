<?php

include("header.php");

?>
    <!-- ------------x---------------  Navigation --------------------------x------------------- -->

    <!----------------------------- Main Site Section ------------------------------>

    <main class="main">

        <!------------------------ Site Title ---------------------->



        <!------------x----------- Site Title ----------x----------->

        <!-- --------------------- Blog Carousel ----------------- -->

        <section id="about" style="background:#dde1e7;">
            <div class="blog">
                <div class="container">
                    <br>
                    <br>
                    <div><h1 class="section-title center mb-0" style="font-size: 40px; ">LOGIN</h1></div> 
                    <div class="owl-carousel owl-theme blog-post">



                        
                        <div  data-aos="fade-right" data-aos-delay="200">
                            
                            <!---login form-->

                        <div class="content" style="margin-left:400px;">
                                <div class="text">Login Form</div>
                                    <form action="login-process.php" method="post" enctype="multipart/form-data" id="log-form">
                                            <div class="field">
                                                <input type="text" required name="username" id="username" class="form-control" >
                                                <span class="fas fa-user" style="margin-left:10px;"></span>
                                                <label>Username</label>
                                            </div>
                                    <div class="field">
                                                <input type="password" required name="password" id="password" class="form-control">
                                                <span class="fas fa-lock" style="margin-left:10px;"></span>
                                                <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                                <label>Password</label>
                                    </div>
                                    <div class="forgot-pass">
                                    <a href="#">Forgot Password?</a></div>
                                    <button type="submit" class="btn  rounded-pill text-dark px-5 btnlogin" name="login">Login</button>
                                            <div class="sign-up">
                                    Not a member?
                                            <a href="register1.php">signup now</a>
                                            </div>
                                    </form>
                        </div>




                            <!---end login form-->

                        </div>
                        
                    </div>                                   
                </div>
            </div>
        </section>

        <!-- ----------x---------- Blog Carousel --------x-------- -->


    </main>

    <!---------------x------------- Main Site Section ---------------x-------------->


    <!-- --------------------------- Footer ---------------------------------------- -->

<?php

include("footer.php");

?>

<script>


$(".toggle-password").click(function() {

$(this).toggleClass("fa-eye fa-eye-slash");
var input = $($(this).attr("toggle"));
if (input.attr("type") == "password") {
  input.attr("type", "text");
} else {
  input.attr("type", "password");
}
});

</script>

    <!-- -------------x------------- Footer --------------------x------------------- -->

    <!-- Jquery Library file -->
    <script src="./js/Jquery3.4.1.min.js"></script>

    <!-- --------- Owl-Carousel js ------------------->
    <script src="./js/owl.carousel.min.js"></script>

    <!-- ------------ AOS js Library  ------------------------- -->
    <script src="./js/aos.js"></script>

    <!-- Custom Javascript file -->
    <script src="./js/script.js"></script>
</body>

</html>

