<?php
include "./components/header.php";
?>

        <main class="page-wrapper">
            <div class="d-lg-flex position-relative h-100">
                <a class="text-nav btn btn-icon bg-light border rounded-circle position-absolute top-0 end-0 p-0 mt-3 me-3 mt-sm-4 me-sm-4" href="./" data-bs-toggle="tooltip" data-bs-placement="left" title="Back to home"><i class="ai-home"></i></a>
                <div class="d-flex flex-column align-items-center w-lg-50 h-100 px-3 px-lg-5 pt-5 mt-sm-5">
                    <div class="w-100 mt-5 pt-5" style="max-width: 526px;">
                        <h1 class="mb-4">Log in to Sidehuzzle</h1>
                        <form class="needs-validation" novalidate>
                            <div class="pb-3 mb-3">
                                <div class="position-relative"><i class="ai-mail fs-lg position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                                    <input class="form-control form-control-lg ps-5" type="email" placeholder="Email address" required>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="position-relative"><i class="ai-lock-closed fs-lg position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                                    <div class="password-toggle">
                                        <input class="form-control form-control-lg ps-5" type="password" placeholder="Password" required>
                                        <label class="password-toggle-btn" aria-label="Show/hide password">
                                            <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap align-items-center justify-content-between pb-4">
                                <form-check class="my-1">
                                    <input class="form-check-input" type="checkbox" id="keep-signedin">
                                    <label class="form-check-label ms-1" for="keep-signedin">Keep me signed in</label>
                                </form-check>
                                <a class="fs-sm fw-semibold text-decoration-none my-1" href="account-password-recovery.html">Forgot password?</a>
                            </div>
                            <button class="btn btn-lg btn-primary w-100 mb-4" style="border-radius: 1rem;" type="submit">Sign in</button>
                        </form>
                        <p class="pb-3 mb-3 mb-lg-4">Don't have an account yet?&nbsp;&nbsp;<a href='sign-up'>Sign up</a></p>
                    </div>
                </div>

                <div class="w-50 bg-size-cover d-none d-sm-inline-flex bg-repeat-0 bg-position-center vh-100" style="background-image: url(assets/img/cover.jpg);"></div>
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