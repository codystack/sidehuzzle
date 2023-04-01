<?php
include "./components/header.php";
include "./components/navbarlight.php";
?>
    <section class="container pt-5 pb-lg-2 pb-xl-4 py-xxl-5 my-5">
        <nav aria-label="breadcrumb">
            <ol class="pt-lg-3 pb-lg-4 pb-2 breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
        </nav>
        <div class="row pb-1 pb-sm-3 pb-lg-4 pt-4">
            <div class="col-lg-4 pe-xxl-4">
                <h1 class="display-2">Contacts</h1>
                <p class="fs-lg pb-4 mb-0 mb-sm-2">Get in touch with us by completing the below form or call us now</p>
            </div>
            <div class="col-lg-8 col-xl-7 offset-xl-1">
                <form class="row g-4 needs-validation" novalidate="">
                    <div class="col-sm-6">
                        <label class="form-label fs-base" for="name">Name</label>
                        <input class="form-control form-control-lg" type="text" placeholder="Your name" required="" id="name">
                        <div class="invalid-feedback">Please enter your name!</div>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label fs-base" for="email">Email</label>
                        <input class="form-control form-control-lg" type="email" placeholder="Email address" required="" id="email">
                        <div class="invalid-feedback">Please provide a valid email address!</div>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label fs-base" for="phone">Phone</label>
                        <input class="form-control form-control-lg" type="text" placeholder="Phone number" id="phone">
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label fs-base" for="categories">Categories</label>
                        <select class="form-select form-select-lg" id="categories">
                            <option value="All categories">All categories</option>
                            <option value="Development & IT">Development & IT</option>
                            <option value="Real Estate & Mortgage">Real Estate & Mortgage</option>
                            <option value="Finance & Accounting">Finance & Accounting</option>
                            <option value="Design & Creative">Design & Creative</option>
                        </select>
                    </div>
                    <div class="col-sm-12">
                        <label class="form-label fs-base" for="message">How can we help?</label>
                        <textarea class="form-control form-control-lg" rows="5" placeholder="Enter your message here..." required="" id="message"></textarea>
                        <div class="invalid-feedback">Please enter your message!</div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="agree">
                            <label class="form-check-label" for="agree">I agree to the 
                                <a class="nav-link d-inline fs-normal text-decoration-underline p-0" href="terms">Terms &amp; Conditions</a>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-12 pt-2">
                        <button class="btn btn-lg btn-primary" type="submit" style="border-radius: 1rem;">Send a request</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

<?php include "./components/footer.php"; ?>