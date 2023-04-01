<?php
include "./components/header.php";
?>
        <div class="d-flex flex-column align-items-center position-relative h-100 px-3 pt-5">
            <a class="text-nav btn btn-icon bg-light border rounded-circle position-absolute top-0 end-0 zindex-2 p-0 mt-3 me-3 mt-sm-4 me-sm-4" href="./" data-bs-toggle="tooltip" data-bs-placement="left" title="Back to home"><i class="ai-home"></i></a>
            <div class="mt-auto" style="max-width: 700px;">
                <h1 class="pt-3 pb-2 pb-lg-3">Forgot your password?</h1>
                <p class="pb-2">Change your password in three easy steps. This helps to keep your new password secure.</p>
                <ul class="list-unstyled pb-2 pb-lg-0 mb-4 mb-lg-5">
                    <li class="d-flex mb-2"><span class="text-primary fw-semibold me-2">1.</span>Fill in your email address below.</li>
                    <li class="d-flex mb-2"><span class="text-primary fw-semibold me-2">2.</span>We'll email you a temporary link.</li>
                    <li class="d-flex mb-2"><span class="text-primary fw-semibold me-2">3.</span>Click on the link to change your password on our secure website.</li>
                </ul>
                <div class="card dark-mode border-0 bg-primary">
                    <form class="card-body">
                        <div class="mb-4">
                            <div class="position-relative"><i class="ai-mail fs-lg position-absolute top-50 start-0 translate-middle-y text-light opacity-80 ms-3"></i>
                            <input class="form-control form-control-lg ps-5" type="email" placeholder="Email address" required>
                            </div>
                        </div>
                        <button class="btn btn-light" type="submit" style="border-radius: 1rem;">Get new password</button>
                    </form>
                </div>
            </div>
            <!-- Copyright-->
            <p class="w-100 fs-sm pt-5 mt-auto mb-5" style="max-width: 700px;"></p>
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