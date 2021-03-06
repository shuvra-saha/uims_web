<?php if($this->session->userdata('logged_in') == True) {
    header('Location'.base_url().'login/adminPage');
}
?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome</title>

    <!-- Bootstrap core CSS vendor/bootstrap/css/-->
    <link href="<?php echo base_url() ?>/assets/css_1/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css_1/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css_1/simple-line-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS <link rel="stylesheet" href="device-mockups/device-mockups.min.css"> -->


    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>/assets/css/new-age.min.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <p>
            <?php
            if($this->session->userdata('type') == 'admin'){
                //print_r($this->session->userdata('type'));
                header('Location:'.base_url().'login/adminPage');
            }elseif ($this->session->userdata('type') == 'director'){
                //print_r($this->session->userdata('type'));
                header('Location:'.base_url().'login/chairmanPage');
            }
            ?></p>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#features">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header class="masthead">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-lg-7 my-auto">
                <div class="header-content mx-auto">
                    <h1 class="mb-5">Welcome To Our Inventory Management System. Manage and Secure Your Inventory.</h1>
                    <a href="login" class="btn btn-outline btn-xl js-scroll-trigger">Start Now for Free!</a>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="features bg-primary" id="features">
    <div class="container">
        <div class="section-heading text-center">
            <h2>Unlimited Features, Unlimited Fun</h2>
            <p class="text-muted">Check out what you can do with this app theme!</p>
            <hr>
        </div>
        <div class="row">
            <div class="col-lg-4 my-auto">
                <div class="device-container">
                    <div class="device-mockup iphone6_plus portrait white">
                        <div class="device">
                            <div class="screen">
                                <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                <img src="img/demo-screen-1.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="button">
                                <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 my-auto">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="feature-item">
                                <i class="icon-screen-smartphone text-primary"></i>
                                <h3>Device Mockups</h3>
                                <p class="text-muted">Ready to use HTML/CSS device mockups, no Photoshop required!</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="feature-item">
                                <i class="icon-camera text-primary"></i>
                                <h3>Flexible Use</h3>
                                <p class="text-muted">Put an image, video, animation, or anything else in the screen!</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="feature-item">
                                <i class="icon-present text-primary"></i>
                                <h3>Free to Use</h3>
                                <p class="text-muted">As always, this theme is free to download and use for any purpose!</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="feature-item">
                                <i class="icon-lock-open text-primary"></i>
                                <h3>Open Source</h3>
                                <p class="text-muted">Since this theme is MIT licensed, you can use it commercially!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="contact bg-success" id="contact">
    <div class="container">
        <h2>We
            love
            new friends!</h2>
        <ul class="list-inline list-social">
            <li class="list-inline-item social-twitter">
                <a href="#">
                    <i class="fa fa-twitter"></i>
                </a>
            </li>
            <li class="list-inline-item social-facebook">
                <a href="#">
                    <i class="fa fa-facebook"></i>
                </a>
            </li>
            <li class="list-inline-item social-google-plus">
                <a href="#">
                    <i class="fa fa-google-plus"></i>
                </a>
            </li>
        </ul>
    </div>
</section>

<footer>
    <div class="container">
        <p>&copy; Team1527 2018. All Rights Reserved.</p>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="<?php echo base_url() ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="<?php echo base_url() ?>/assets/js/jquery.easing.min.js"></script>

<!-- Custom scripts for this template -->
<script src="<?php echo base_url() ?>/assets/js/new-age.min.js"></script>

</body>

</html>
