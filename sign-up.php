<?php
session_start();
require_once "./auth/signup.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Sign up :: Sidehuzzle Canada&trade;</title>

        <meta name="description" content="Sidehuzzle Canada&trade; connects businesses with independent professionals and agencies around the globe. Where companies and freelancers work together in new ways that unlock their potential.">
        <meta name="keywords" content="Fiverr, upwork, side hussle, gig, work, commission, income, passive income, freelancers">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png">
        <link rel="manifest" href="assets/favicon/site.webmanifest">
        <link rel="mask-icon" color="#6366f1" href="assets/img/favicon.png">
        <meta name="msapplication-TileColor" content="#080032">
        <meta name="msapplication-config" content="assets/favicon/browserconfig.xml">
        <meta name="theme-color" content="white">

        <!-- Theme mode-->
        <script>
            let mode = window.localStorage.getItem('mode'),
                root = document.getElementsByTagName('html')[0];
            if (mode !== undefined && mode === 'dark') {
                root.classList.add('dark-mode');
            } else {
                root.classList.remove('dark-mode');
            }
        </script>

        <!-- Page loading styles-->
        <style>
            .page-loading {
                position: fixed;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 100%;
                -webkit-transition: all .4s .2s ease-in-out;
                transition: all .4s .2s ease-in-out;
                background-color: #fff;
                opacity: 0;
                visibility: hidden;
                z-index: 9999;
            }
            .dark-mode .page-loading {
                background-color: #121519;
            }
            .page-loading.active {
                opacity: 1;
                visibility: visible;
            }
            .page-loading-inner {
                position: absolute;
                top: 50%;
                left: 0;
                width: 100%;
                text-align: center;
                -webkit-transform: translateY(-50%);
                transform: translateY(-50%);
                -webkit-transition: opacity .2s ease-in-out;
                transition: opacity .2s ease-in-out;
                opacity: 0;
            }
            .page-loading.active > .page-loading-inner {
                opacity: 1;
            }
            .page-loading-inner > span {
                display: block;
                font-family: 'Inter', sans-serif;
                font-size: 1rem;
                font-weight: normal;
                color: #6f788b;
            }
            .dark-mode .page-loading-inner > span {
                color: #fff;
                opacity: .6;
            }
            .page-spinner {
                display: inline-block;
                width: 2.75rem;
                height: 2.75rem;
                margin-bottom: .75rem;
                vertical-align: text-bottom;
                background-color: #d7dde2; 
                border-radius: 50%;
                opacity: 0;
                -webkit-animation: spinner .75s linear infinite;
                animation: spinner .75s linear infinite;
            }
            .dark-mode .page-spinner {
                background-color: rgba(255,255,255,.25);
            }
            @-webkit-keyframes spinner {
                0% {
                -webkit-transform: scale(0);
                transform: scale(0);
                }
                50% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
                }
            }
            @keyframes spinner {
                0% {
                -webkit-transform: scale(0);
                transform: scale(0);
                }
                50% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
                }
            }
        </style>

        <!-- Page loading scripts-->
        <script>
            (function () {
                window.onload = function () {
                const preloader = document.querySelector('.page-loading');
                preloader.classList.remove('active');
                setTimeout(function () {
                    preloader.remove();
                }, 1500);
                };
            })();
        </script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet" id="google-font">

        <link rel="stylesheet" media="screen" href="assets/vendor/swiper/swiper-bundle.min.css"/>
        <link rel="stylesheet" media="screen" href="assets/vendor/simplebar/dist/simplebar.min.css"/>
        <link rel="stylesheet" media="screen" href="assets/vendor/lightgallery/css/lightgallery-bundle.min.css"/>

        <link rel="stylesheet" media="screen" href="assets/css/style.css">
        <link rel="stylesheet" media="screen" href="assets/css/font/stylesheet.css">

    </head>
  
    <body>

        <div class="page-loading active">
            <div class="page-loading-inner">
                <div class="page-spinner"></div><span>Loading...</span>
            </div>
        </div>

        <main class="page-wrapper">
            <div class="d-lg-flex position-relative h-100">
                <a class="text-nav btn btn-icon bg-light border rounded-circle position-absolute top-0 end-0 p-0 mt-3 me-3 mt-sm-4 me-sm-4" href="./" data-bs-toggle="tooltip" data-bs-placement="left" title="Back to home"><i class="ai-home"></i></a>
                <div class="d-flex flex-column align-items-center w-lg-50 h-100 px-3 px-lg-5 pt-5">
                    <div class="w-100 mt-auto" style="max-width: 526px;">
                        <h1>Create Account</h1>
                        <p class="pb-3 mb-3 mb-lg-4">Have an account already?&nbsp;&nbsp;<a href='login'>Sign in here!</a></p>
                        <?php
                            if (isset($_SESSION['error_message'])) {
                                ?>
                                <div class="alert alert-danger" role="alert">
                                    <div class="alert-message">
                                        <i class="ai-triangle-alert fs-xl me-2"></i>
                                        <?php
                                        echo $_SESSION['error_message'];
                                        session_destroy();
                                        ?>
                                    </div>
                                </div>
                                <?php
                                unset($_SESSION['error_message']);
                            }
                        ?>
                        <?php
                            if (isset($_SESSION['success_message'])) {
                                ?>
                                <div class="alert alert-success" role="alert">
                                    <div class="alert-message">
                                        <i class="ai-circle-check fs-xl me-2"></i> <?php echo $_SESSION['success_message']; ?>
                                    </div>
                                </div>
                                <?php
                                unset($_SESSION['success_message']);
                            }
                        ?>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" autocomplete="off" class="needs-validation" novalidate>
                            <div class="row row-cols-1 row-cols-sm-2">
                                <div class="col mb-4">
                                    <input class="form-control form-control-lg" type="text" name="firstName" placeholder="First name" required>
                                </div>
                                <div class="col mb-4">
                                    <input class="form-control form-control-lg" type="text" name="lastName" placeholder="Last name" required>
                                </div>
                            </div>
                            <div class="mb-4">
                                <input class="form-control form-control-lg" type="tel" name="phone" data-format="{&quot;numericOnly&quot;: true, &quot;delimiters&quot;: [&quot;+1 &quot;, &quot; &quot;, &quot; &quot;], &quot;blocks&quot;: [0, 3, 3, 2]}" placeholder="+1 ___ ___ __" required>
                            </div>
                            <div class="mb-4">
                                <input class="form-control form-control-lg" type="email" name="email" placeholder="Email address" required>
                            </div>
                            <div class="mb-4">
                                <select class="form-select form-select-lg" required name="accountType">
                                    <option value="" selected="" disabled="">Select account type</option>
                                    <option value="Reseller">Reseller</option>
                                    <option value="Merchant">Merchant</option>
                                </select>
                            </div>
                            <div class="password-toggle mb-4">
                                <input class="form-control form-control-lg" type="password" name="password" placeholder="Password" required>
                                <label class="password-toggle-btn" aria-label="Show/hide password">
                                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                                </label>
                            </div>
                            <div class="pb-4">
                                <div class="form-check my-2">
                                    <input class="form-check-input" type="checkbox" id="terms" required>
                                    <label class="form-check-label ms-1" for="terms">I agree to <a href="terms">Terms &amp; Conditions</a></label>
                                </div>
                            </div>
                            <button class="btn btn-lg btn-primary w-100 mb-4" name="register_btn" style="border-radius: 1rem;" type="submit">Sign up</button>
                        </form>
                    </div>
                    <p class="w-100 fs-sm pt-5 mt-auto mb-5" style="max-width: 526px;"></p>
                </div>
                <div class="w-50 bg-size-cover bg-repeat-0 bg-position-center" style="background-image: url(assets/img/coverbg.jpg);"></div>
            </div>
        </main>
        
        <a class="btn-scroll-top" href="#top" data-scroll>
            <svg viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <circle cx="20" cy="20" r="19" fill="none" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"></circle>
            </svg><i class="ai-arrow-up"></i>
        </a>
        <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</html>