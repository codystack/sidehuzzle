<?php
include "./components/header.php";
include "./components/navbar.php";
?>

    <section class="bg-dark dark-mode position-relative py-5">
        <div class="position-absolute top-0 start-0 w-100 h-75" style="background-image: url(assets/img/noise.png); mix-blend-mode: soft-light; opacity: 12%"></div>
        <div class="container position-relative zindex-2 py-md-3 py-lg-4 py-xl-5">
            <div class="row align-items-center justify-content-center pb-2 pb-sm-3 pt-4">
                <div class="col-10 col-sm-8 col-md-6 col-xl-5 offset-lg-1 order-md-2 pb-3 pb-md-0 mb-3 mb-sm-4 mb-md-0">
                    <div class="swiper"
                        data-swiper-options="{
                        &quot;effect&quot;: &quot;creative&quot;,
                        &quot;loop&quot;: true,
                        &quot;allowTouchMove&quot;: false,
                        &quot;speed&quot;: 450,
                        &quot;autoplay&quot;: {
                            &quot;delay&quot;: 6000,
                            &quot;disableOnInteraction&quot;: false
                        },
                        &quot;creativeEffect&quot;: {
                            &quot;prev&quot;: {
                            &quot;shadow&quot;: true,
                            &quot;translate&quot;: [&quot;-20%&quot;, 0, -1]
                            },
                            &quot;next&quot;: {
                            &quot;translate&quot;: [&quot;100%&quot;, 0, 0]
                            }
                        },
                        &quot;thumbnails&quot;: {
                            &quot;el&quot;: &quot;#thumbnails&quot;,
                            &quot;images&quot;: [
                            &quot;assets/img/web.jpg&quot;,
                            &quot;assets/img/pos.jpg&quot;,
                            &quot;assets/img/realtor.jpg&quot;
                            ]
                        }
                        }" style="border-radius: 50%; border-bottom-right-radius: 0;">
                        <div class="swiper-wrapper">
                        <!-- Item-->
                        <div class="swiper-slide">
                            <div class="position-relative overflow-hidden" style="border-bottom-left-radius: 50%; border-top-left-radius: 50%;">
                            <img src="assets/img/web.jpg" alt="Web development">
                            <div class="d-flex align-items-end justify-content-end position-absolute start-0 bottom-0 w-100" style="height: 215px; background: linear-gradient(0deg, rgba(15, 17, 21, 0.8) 0%, rgba(16, 20, 24, 0) 100%);">
                                <div class="text-end pe-4 pb-4">
                                <h3 class="h5 mb-1">Develoment & IT</h3>
                                <p class="fs-sm mb-0">Web/Mobile Development</p>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- Item-->
                        <div class="swiper-slide">
                            <div class="position-relative overflow-hidden" style="border-bottom-left-radius: 50%; border-top-left-radius: 50%;">
                            <img src="assets/img/pos.jpg" alt="Payment Solution">
                            <div class="d-flex align-items-end justify-content-end position-absolute start-0 bottom-0 w-100" style="height: 215px; background: linear-gradient(0deg, rgba(15, 17, 21, 0.8) 0%, rgba(16, 20, 24, 0) 100%);">
                                <div class="text-end pe-4 pb-4">
                                <h3 class="h5 mb-1">Finance & Accounting</h3>
                                <p class="fs-sm mb-0">POS & Payment Services</p>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- Item-->
                        <div class="swiper-slide">
                            <div class="position-relative overflow-hidden" style="border-bottom-left-radius: 50%; border-top-left-radius: 50%;">
                            <img src="assets/img/realtor.jpg" alt="Real Estate">
                            <div class="d-flex align-items-end justify-content-end position-absolute start-0 bottom-0 w-100" style="height: 215px; background: linear-gradient(0deg, rgba(15, 17, 21, 0.8) 0%, rgba(16, 20, 24, 0) 100%);">
                                <div class="text-end pe-4 pb-4">
                                <h3 class="h5 mb-1">Real Estate</h3>
                                <p class="fs-sm mb-0">Mortgage & Property Sale</p>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    
                    <div class="swiper-thumbnails swiper-thumbnails-circle flex-nowrap justify-content-end pt-4" id="thumbnails"></div>
                </div>
                <div class="col-sm-10 col-md-6 col-lg-6 order-md-1">
                    <h1 class="display-1 d-none d-lg-block pb-3 mb-4">Passive income for working people.</h1>
                    <h1 class="display-3 d-lg-none pb-1 pb-sm-2">Passive income for working people.</h1>
                    <p class="fs-lg pb-2 pb-sm-3 pb-md-4 pb-xl-5 mb-xl-2">Get paid on time, every time. <br>Payment is available for withdrawal as soon as it clears.</p>
                    <div class="d-sm-flex">
                        <a class="btn btn-lg btn-primary w-100 w-md-auto mb-3 mb-sm-0 me-sm-3 me-lg-4" href="#gigs" data-scroll data-scroll-offset="120">Explore Gigs<i class="ai-arrow-down ms-2 me-n2"></i></a>
                        <a class="btn btn-lg btn-outline-light w-100 w-md-auto" href="sign-up">Create account</a></div>
                </div>
            </div>
        </div>
    </section>

    <?php include "./components/gigs.php"; ?>

    <?php include "./components/cta.php"; ?>

    <section class="container mt-n3 mt-sm-0 pb-5 mb-1 mb-sm-2 mb-lg-3 mb-xl-4 mb-xxl-5 py-5">
        <h2 class="h1 pb-3 mb-lg-4 text-center">Browse our categories</h2>
        <div class="row g-4 pb-2 pb-md-4">
            <div class="col-md-4">
                <div class="card zoom-effect h-100 border-0 rounded-1 overflow-hidden" style="min-height: 320px;">
                    <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-10 zindex-2"></span>
                    <div class="zoom-effect-wrapper rounded-1 position-absolute top-0 start-0 w-100 h-100">
                        <div class="zoom-effect-img bg-size-cover bg-position-bottom-center position-absolute top-0 start-0 w-100 h-100" style="background-image: url(assets/img/softCat.jpg);"></div>
                    </div>
                    <a class="card-body d-flex flex-column justify-content-end align-items-start position-absolute top-0 start-0 w-100 h-100 text-decoration-none zindex-3" href="#">
                        <span class="bg-light text-dark rounded-pill fs-sm fw-semibold lh-1 py-3 px-4">Development & IT</span>
                    </a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card zoom-effect border-0 rounded-1 overflow-hidden">
                    <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-10 zindex-2"></span>
                    <div class="zoom-effect-wrapper rounded-1">
                        <img class="zoom-effect-img" src="assets/img/realCat.jpg" alt="Category image">
                    </div>
                    <a class="card-body d-flex flex-column justify-content-end align-items-start position-absolute top-0 start-0 w-100 h-100 text-decoration-none zindex-3" href="#">
                        <span class="bg-light text-dark rounded-pill fs-sm fw-semibold lh-1 py-3 px-4">Real Estate & Mortgage</span>
                    </a>
                </div>
                <div class="row g-4 pt-4">
                    <div class="col-sm-6">
                        <div class="card zoom-effect border-0 rounded-1 overflow-hidden">
                            <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-10 zindex-2"></span>
                            <div class="zoom-effect-wrapper rounded-1">
                                <img class="zoom-effect-img" src="assets/img/payCat.jpg" alt="Category image">
                            </div>
                            <a class="card-body d-flex flex-column justify-content-end align-items-start position-absolute top-0 start-0 w-100 h-100 text-decoration-none zindex-3" href="#">
                                <span class="bg-light text-dark rounded-pill fs-sm fw-semibold lh-1 py-3 px-4">Finance & Accounting</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card zoom-effect border-0 rounded-1 overflow-hidden">
                            <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-10 zindex-2"></span>
                            <div class="zoom-effect-wrapper rounded-1">
                                <img class="zoom-effect-img" src="assets/img/designCat.jpg" alt="Category image">
                            </div>
                            <a class="card-body d-flex flex-column justify-content-end align-items-start position-absolute top-0 start-0 w-100 h-100 text-decoration-none zindex-3" href="#">
                                <span class="bg-light text-dark rounded-pill fs-sm fw-semibold lh-1 py-3 px-4">Design & Creative</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<?php include "./components/footer.php"; ?>