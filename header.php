<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Products</title> -->

    <!-- <link rel="stylesheet" href="./style.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <?php wp_head();?>
    
</head>

<body>
    <div class="container-fluid">
        <!-- navbar section starts -->
        <!-- ------------------------------------------------------------------------------------ -->

        <!--Navbar-->
        <nav class="navbar navbar-light amber lighten-4 mb-4">

            <!-- Navbar brand -->
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <a class="navbar-brand" href="index.html">
                <div class="d-flex justify-content-center align-items-center">
                    <div>
                        <img class="img-responsive img-fluid logo" src="
<?php echo get_template_directory_uri(); ?>./assets/img/logo.png" alt="">
                    </div>
                    <div>
                        <p class="logo-upper-text">Ithin Kithul</p>
                        <hr>
                        <p class="logo-down-text">CEYLON TREACLE</p>
                    </div>
                </div>

            </a>

            <!-- Collapse button -->
            <div>
                <button class="navbar-button"><span class="mr-4"><img class="img-responsive img-fluid"
                            src="
<?php echo get_template_directory_uri(); ?>./assets/img/user-icon.svg" alt=""></span></button>
                <button onclick="openForm()" class="navbar-button"><span class="mr-4"><img
                            class="img-responsive img-fluid" src="
<?php echo get_template_directory_uri(); ?>./assets/img/cart-icon.svg" alt=""></span></button>

                <button class="navbar-toggler first-button" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent20" aria-controls="navbarSupportedContent20"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <div class="animated-icon1"><span></span><span></span><span></span></div>
                </button>
            </div>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent20">

                <!-- Links -->
                <ul class="navbar-nav mr-auto text-center">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tropical Kithul Ways</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Our Story</a></li>
                    <li class="nav-item"><a class="nav-link" href="
<?php echo get_template_directory_uri(); ?>/products.html">Our Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">The Process</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Sustainability</a></li>
                </ul>
                <!-- Links -->

            </div>
            <!-- Collapsible content -->

        </nav>
        <!--/.Navbar-->