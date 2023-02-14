<?php include 'include/header.php' ?>
    <title>Celebrant - Login</title>
    <body>
<?php include 'include/menu.php' ?>

    <!-- Begin: Main Slider -->
    <section data-scroll-section class="main-slider p-0 innerBaner" id="mainSlider">
        <div class="swiper-container homeSlider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-inner">
                        <div class="container">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-lg-5">
                                    <h2 data-swiper-parallax="-200">Login</h2>
                                </div>
                                <div class="col-lg-6">
                                    <div class="slideIMg">
                                        <figure>
                                            <img src="images/ban5.png" class="img-fluid" alt="">
                                        </figure>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bannerImages">
            <img src="images/ban1.png" class="ban1" alt="">
            <img src="images/ban2.png" class="ban2" alt="">
            <img src="images/ban3.png" class="ban3" alt="">
            <img src="images/ban4.png" class="ban4" alt="">
            <img src="images/ban6.png" class="ban6" alt="">
            <img src="images/ban7.png" class="ban7" alt="">
            <img src="images/ban8.png" class="ban8" alt="">
            <img src="images/ban9.png" class="ban9" alt="">
            <img src="images/ban10.png" class="ban10" alt="" data-scroll data-scroll-speed="2" data-scroll-delay="0.1">
        </div>
    </section>
    <!-- End: Main Slider -->

    <section data-scroll-section class="accountAccesSec loginPage">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="whitebg">
                        <div class="icon">
                            <h2>login </h2>
                            <ul>
                                <li><a href=""><span><img src="images/iconFB.png" alt=""> </span> Facebook</a></li>
                                <li><a href=""><span><img src="images/iconeGoogle.png" alt=""> </span> Google</a></li>
                                <li><a href=""> <span><img src="images/iconApple.png" alt=""></span> Apple</a></li>

                            </ul>

                        </div>
                        <form action="" class="formStyle form-row">
                            <div class="input-group">

                                <input type="text" class="form-control" placeholder="Enter your Email ">
                            </div>
                            <div class="input-group">

                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="input-group  align-items-sm-center">
                                <a class="themeBtn " href="account.php">Sign In</a>
                            </div>

                        </form>
                        <hr>
                        <div class="passwrd"><a href="reset-password.php" class="forgetPass">Forgot my
                                password</a><span>or</span><a href="reset-password.php" class="forgetPass"> Create a New
                                Account</a></div>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-scroll-section class="instaSec">
        <div class="container">
            <div class="secHeading">
                <h2>Follow Us On Instagram <a href="#"><i class="fab fa-instagram"></i></a></h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="swiper-container instaSlider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <figure>
                                    <img src="images/insta1.png" class="img-fluid" alt="img">
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure>
                                    <img src="images/insta2.png" class="img-fluid" alt="img">
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure>
                                    <img src="images/insta3.png" class="img-fluid" alt="img">
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure>
                                    <img src="images/insta4.png" class="img-fluid" alt="img">
                                </figure>
                            </div>
                        </div>
                        <!-- <div class="swiper-pagination"></div>
                        <div class="swiper-button-next"><i class="fal fa-chevron-right"></i></div>
                        <div class="swiper-button-prev"><i class="fal fa-chevron-left"></i></div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-scroll-section class="creditSec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="credtContent">
                        <h2>Start Our Trial Today. No Credit Card Required.</h2>
                        <form>
                            <input type="text" placeholder="Enter Your Email address ...">
                            <button class="themeBtn">Get Started</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-5">
                    <figure>
                        <img src="images/todayimg.png" class="img-fluid" alt="img">
                    </figure>
                </div>
            </div>
        </div>
    </section>


<?php include 'include/footer.php' ?>