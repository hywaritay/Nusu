<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>NUSU Voting System</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/style2.css" rel="stylesheet" />
          <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/homepage.css" rel="stylesheet">
    </head>
    <body id="page-top" class="body">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background:black;padding-top:0px;padding:bottom:10px;">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">NUSU Voting System</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu<i class="fas fa-bars ml-1"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive" >
                    <ul class="navbar-nav text-uppercase ml-auto" >
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="idgenerate1.php" >ID Generate</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="election1.php">Vote</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="result1.php">Results</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="logout.php">Logout</a></li>
                        <li><a href=""><?php

                                    require("includes/db.php");


                                        $user = $_SESSION['username'];
                                            $select = "select profileImg from register_tbl where username = '$user'";

                                            $run=$conn->query($select);

                                            if ($run->num_rows>0) {
                                                # code...
                                                while ($row=$run->fetch_array()) {
                                                    # code...
                                            
                                            echo '<img src="data:image/jpeg;base64,'.base64_encode($row['profileImg']).'" height="50" width="50" class="img rounded-circle" style="padding:5px;" /> ';

                                            }
                                        }

                                            

                                    ?>
                            </a>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>