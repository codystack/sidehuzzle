<?php
include "./components/header.php";
include "./components/navbar.php";
?>
    <section class="bg-dark position-relative py-5">
        <div class="d-none d-dark-mode-block position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(255,255,255, .02);"></div>
        <div class="container dark-mode position-relative zindex-2 py-5 mb-4 mb-sm-5">
            <div class="row pb-5 mb-2 mb-sm-0 mb-lg-3">
                <div class="col-lg-10 col-xl-9">
                    <nav aria-label="breadcrumb">
                        <ol class="pt-lg-3 pb-lg-4 pb-2 breadcrumb">
                            <li class="breadcrumb-item"><a href="./">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About us</li>
                        </ol>
                    </nav>
                    <h1 class="display-2 pb-2 pb-sm-3">Canada's<br>gig marketplace</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="container position-relative zindex-3 py-5 pb-5 mb-5" style="margin-top: -135px;">
        <div class="rounded-5 overflow-hidden"> 
          <div class="jarallax ratio ratio-16x9" data-jarallax data-speed="0.6">
            <div class="jarallax-img" style="background-image: url(assets/img/about.jpg);"></div>
          </div>
        </div>
        <div class="row pt-5 mt-n2 mt-sm-0 mt-md-2 mt-lg-4 mt-xl-5">
            <div class="col-12 mb-4">
                <div class="fs-sm text-uppercase mb-3">Who we are</div>
                <h2 class="display-6">About us</h2>
            </div>
            <div class="col-md-6 col-lg-6">
                <p class="fs-xl">Welcome to our marketplace, where we provide a unique opportunity for individuals and businesses to earn commissions or revenue shares by referring new customers to our platform.</p>
                <p class="fs-xl">Our marketplace is designed to provide a seamless experience for both Merchants and Resellers.</p>
                <p class="fs-xl">We offer a wide range of gigs that cater to various industries, making it easy for resellers to find an interesting gig to resell.</p>
                <p class="fs-xl">As a gig reseller, you can earn a commission or revenue share for each sale made by a customer you refer to a gig on the platform.</p>
                <p class="fs-xl">This provides an excellent opportunity for individuals and businesses to earn additional income simply by sharing gigs on our platform with their network.</p>
                <p class="fs-xl">At our marketplace, we pride ourselves on our commitment to customer satisfaction. We offer top-quality safe gigs at competitive commissions. </p>
            </div>
            <div class="col-md-6 col-lg-6">
                <p class="fs-xl">Additionally, we have a dedicated support team that is available 24/7 to assist customers with any queries they may have.</p>
                <p class="fs-xl">We understand the importance of building strong relationships with all our partners. That's why we offer regular communication and support to ensure that our partners have everything they need to succeed. </p>
                <p class="fs-xl">We provide access to marketing materials and tools that make it easy to promote our platform and track your referrals and earnings.</p>
                <p class="fs-xl">In summary, our marketplace offers a unique opportunity for individuals and businesses to earn commissions or revenue shares by referring new customers to gigs on our platform.</p>
                <p class="fs-xl">Join us today and start earning!</p>
            </div>
        </div>
    </section>

    <?php include "./components/cta.php"; ?>
    
    <?php include "./components/clients.php"; ?>

<?php include "./components/footer.php"; ?>