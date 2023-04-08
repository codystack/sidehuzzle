<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>404 Error :: Sidehuzzle Canada&trade;</title>

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
                setTimeout(function () {
                    document.getElementById('lady').classList.add('show');
                }, 300);
                setTimeout(function () {
                    document.getElementById('question').classList.add('show');
                }, 1000);
                setTimeout(function () {
                    document.getElementById('bubble').classList.add('show');
                }, 1600);
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
            <div class="d-flex flex-column flex-lg-row justify-content-between min-vh-100 position-relative">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-lg-none">
                    <div class="d-dark-mode-none position-absolute top-0 start-0 w-100 h-100" style="background-color: #f2f3f7;"></div>
                </div>
                <div class="d-flex flex-column justify-content-center w-lg-50 position-relative zindex-2 mt-auto mt-lg-0">
                    <div class="text-center text-lg-start pt-5 pb-3 py-lg-5 px-3 px-sm-4 px-lg-5 mx-auto" style="max-width: 630px;">
                        <h1 class="display-1">Error 404</h1>
                        <p class="lead pb-2 mb-4 mb-lg-5">The page you are looking for was moved, removed or might never existed.</p>
                        <a class="btn btn-lg btn-primary" href="./">Go to homepage</a>
                    </div>
                </div>
                <div class="d-flex flex-column position-relative justify-content-end align-items-center w-lg-50 position-relative overflow-hidden">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-none d-lg-block">
                        <div class="d-dark-mode-none position-absolute top-0 start-0 w-100 h-100" style="background-color: #f2f3f7;"></div>
                        <div class="d-none d-dark-mode-block position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(255,255,255, .04);"></div>
                    </div>
                    <div class="position-relative zindex-2" style="max-width: 948px;"><img src="assets/img/404/layer01.png" alt="Lady" id="lady"><img class="position-absolute top-0 start-0 w-100 h-100" src="assets/img/404/layer02-light.png" alt="Bubble" id="bubble">
                        <div class="position-absolute top-0 start-0 w-100 h-100" id="question">
                            <img class="d-dark-mode-none" src="assets/img/404/layer03-light.png" alt="Question mark">
                            <img class="d-none d-dark-mode-block" src="assets/img/404/layer03-dark.png" alt="Question mark">
                        </div>
                    </div>
                </div>
            </div>
        </main>
  </body>
</html>