   <!-- footer section starts -->
   <footer>
            <div class="container-fluid mb-3">
                <div class="row">
                    <div class="col-md-12 text-center mt-5 mb-3">
                        <a class="navbar-brand" href="#">
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
                    </div>

                    <div class="col-md-12 text-center">
                        <div class="footer-nav text-center d-flex justify-content-center align-items-center mb-3">
                            <a class="nav-link" href="#">Our Products</a>
                            <a class="nav-link" href="#">Our Process</a>
                            <a class="nav-link" href="#">Our Story</a>
                            <a class="nav-link" href="#">Sustainability</a>
                            <a class="nav-link" href="#">FAQ</a>
                        </div>

                        <p>No: 123, Abc Avenue, Kandy, Sri Lanka</p>
                        <p>+94 771 123 45 / +94 771 678 91</p>
                        <p>ithinkithul@gmail.com</p>

                        <div class="footer-icons d-flex justify-content-center align-items-center mt-5 mb-5">
                            <img src="
<?php echo get_template_directory_uri(); ?>./assets/img/facebook.svg" alt="">
                            <img src="
<?php echo get_template_directory_uri(); ?>./assets/img/twitter-icon.svg" alt="">
                            <img src="
<?php echo get_template_directory_uri(); ?>./assets/img/insta-icon.svg" alt="">
                        </div>
                    </div>

                    <div class="col-md-12 d-flex align-items-center">



                        <div class="col-md-4">
                            <p class="mb-0">All rights reserved &copy; Ithunkithul2021</p>
                        </div>
                        <div class="col-md-4 text-center links">
                            <a class="mr-5" href="#"> TERMS & CONDITIONS </a>
                            <a href="#"> PRIVACY POLICY </a>
                        </div>
                        <div class="col-md-4 d-flex justify-content-end align-items-center">
                            <img src="
<?php echo get_template_directory_uri(); ?>./assets/img/footer icon.png" alt="" class="footer-img img-responsive img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer section starts -->


        <!-- ------------------------------------------------ -->
        <!-- ------------------------------------------------ -->
    </div>


    <!-- -------------------- popup From --------------------- -->

    <div class="form-popup" id="myForm">
        <form action="/action_page.php" class="form-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="cancel-btn p-2">
                            <button class="cancel-btn" type="button" onclick="closeForm()">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </button>
                        </div>

                    </div>
                </div>
                <div class="content">
                    <H1 class="mt-5">Your Cart</H1>
                    <hr>
                    <div class="container">
                        <div class="row mt-5 mb-5">
                            <div class="col-md-3">
                                <img src="
<?php echo get_template_directory_uri(); ?>./assets/img/bottle.png" alt="" class="img-responsive img-fluid">
                            </div>
                            <div class="col-md-9 ">
                                <div class="d-flex justify-content-space-between">
                                    <div>
                                        <h2>ITHIN KITHUL TREACLE</h2>
                                        <h2>50 ML</h2>
                                        <br>
                                    </div>
                                    <div>
                                        <button class="cart-plus-minus-button">01</button>
                                    </div>
                                </div>
                                <div class="amount d-flex align-items-center">
                                    <div>
                                        <p> $ 99.9 </p>
                                    </div>
                                    <div>
                                        <p> $ 99.9 </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="container">
                        <div class="row mt-5 mb-5">
                            <div class="col-md-3">
                                <img src="
<?php echo get_template_directory_uri(); ?>./assets/img/jaggery.png" alt="" class="img-responsive img-fluid">
                            </div>
                            <div class="col-md-9 ">
                                <div class="d-flex justify-content-space-between">
                                    <div>
                                        <h2>ITHIN KITHUL JAGGERY</h2>
                                        <h2>100 ML</h2>
                                        <br>
                                    </div>
                                    <div>
                                        <button class="cart-plus-minus-button">01</button>
                                    </div>
                                </div>
                                <div class="amount d-flex align-items-center">
                                    <div>
                                        <p> $ 199.9 </p>
                                    </div>
                                    <div>
                                        <p> $ 199.1 </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="amount d-flex align-items-center mt-5">
                        <div>
                            <h2> Total </h2>
                        </div>
                        <div>
                            <h2> $ 298.2* </h2>
                        </div>

                    </div>
                    <div class="total-text mt-5">
                        <p>
                            *This order price does not include shipping. Shipping cost will be calculated in the next
                            step.
                        </p>
                    </div>
                    <div class="amount d-flex align-items-center mt-5">
                        <div>
                            <p class="go-to-products-text">CONTINUE SHOPPING
                                <span> <a class="arrow-icon ml-3" href="#"> <i
                                            class="fa fa-arrow-circle-o-right "></i></a></span>
                            </p>
                        </div>
                        <div>
                            <button class="add-to-cart-btn">PROCEED</button>
                        </div>

                    </div>
                </div>
            </div>
    </div>
    </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function () {

            $('.first-button').on('click', function () {

                $('.animated-icon1').toggleClass('open');
            });
            $('.second-button').on('click', function () {

                $('.animated-icon2').toggleClass('open');
            });
            $('.third-button').on('click', function () {

                $('.animated-icon3').toggleClass('open');
            });
        });

        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }


    </script>
</body>

</html>