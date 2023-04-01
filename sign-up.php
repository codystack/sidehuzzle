<?php
include "./components/header.php";
?>
            <div class="d-lg-flex position-relative h-100">
                <a class="text-nav btn btn-icon bg-light border rounded-circle position-absolute top-0 end-0 p-0 mt-3 me-3 mt-sm-4 me-sm-4" href="./" data-bs-toggle="tooltip" data-bs-placement="left" title="Back to home"><i class="ai-home"></i></a>
                <div class="d-flex flex-column align-items-center w-lg-50 h-100 px-3 px-lg-5 pt-5">
                <div class="w-100 mt-auto" style="max-width: 526px;">
                    <h1>Create Account</h1>
                    <p class="pb-3 mb-3 mb-lg-4">Have an account already?&nbsp;&nbsp;<a href='login'>Sign in here!</a></p>
                    <form class="needs-validation" novalidate>
                    <div class="row row-cols-1 row-cols-sm-2">
                        <div class="col mb-4">
                            <input class="form-control form-control-lg" type="text" placeholder="First name" required>
                        </div>
                        <div class="col mb-4">
                            <input class="form-control form-control-lg" type="text" placeholder="Last name" required>
                        </div>
                    </div>
                    <div class="mb-4">
                        <input class="form-control form-control-lg" type="tel" placeholder="Phone" required>
                    </div>
                    <div class="mb-4">
                        <input class="form-control form-control-lg" type="email" placeholder="Email address" required>
                    </div>
                    <div class="mb-4">
                        <select class="form-select form-select-lg" required id="categories">
                            <option selected>Select account type</option>
                            <option value="Reseller">Reseller</option>
                            <option value="Merchant">Merchant</option>
                        </select>
                    </div>
                    <div class="password-toggle mb-4">
                        <input class="form-control form-control-lg" type="password" placeholder="Password" required>
                        <label class="password-toggle-btn" aria-label="Show/hide password">
                            <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                        </label>
                    </div>
                    <div class="pb-4">
                        <div class="form-check my-2">
                        <input class="form-check-input" type="checkbox" id="terms">
                        <label class="form-check-label ms-1" for="terms">I agree to <a href="terms">Terms &amp; Conditions</a></label>
                        </div>
                    </div>
                    <button class="btn btn-lg btn-primary w-100 mb-4" style="border-radius: 1rem;" type="submit">Sign up</button>
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
    </body>
</html>