<?php
$page = "Settings";
include "./components/dashheader.php";
include "./components/dashnav.php";
require_once "./auth/password.php";
?>

    <?php include "./components/dashmenu.php" ?>

        <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
            <h1 class="h2 mb-4">Settings</h1>
            <!-- Password-->
            <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
              <div class="card-body">
                <div class="d-flex align-items-center pb-4 mt-sm-n1 mb-0 mb-lg-1 mb-xl-3"><i class="ai-lock-closed text-primary lead pe-1 me-2"></i>
                  <h2 class="h4 mb-0">Password change</h2>
                </div>
                <?php
                  if (isset($_SESSION['error_message'])) {
                      ?>
                      <div class="alert alert-danger" role="alert">
                          <div class="alert-message">
                            <i class="ai-triangle-alert fs-xl me-2"></i> <?php echo $_SESSION['error_message']; ?>
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
                <form class="row" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                  <div class="row align-items-center g-3 g-sm-4 pb-3">
                    <div class="col-sm-6">
                      <label class="form-label" for="current-pass">Current password</label>
                      <div class="password-toggle">
                        <input class="form-control" type="password" name="password" id="current-pass">
                        <label class="password-toggle-btn" aria-label="Show/hide password">
                          <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                        </label>
                      </div>
                    </div>
                    <div class="col-sm-6"><a class="d-inline-block fs-sm fw-semibold text-decoration-none mt-sm-4" href="password-recovery">Forgot password?</a></div>
                    <div class="col-sm-6">
                      <label class="form-label" for="new-pass">New password</label>
                      <div class="password-toggle">
                        <input class="form-control" type="password" name="newPassword" id="newpassword">
                        <label class="password-toggle-btn" aria-label="Show/hide password">
                          <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                        </label>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label class="form-label" for="confirm-pass">Confirm new password</label>
                      <div class="password-toggle">
                        <input class="form-control" type="password" id="confirmpassword" name="confirmpassword">
                        <label class="password-toggle-btn" aria-label="Show/hide password">
                          <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                        </label>
                      </div>
                    </div>
                    <div class="mt-4"><span id='message'></span></div>
                  </div>
                  <div class="alert alert-info d-flex my-3 my-sm-4"><i class="ai-circle-info fs-xl me-2"></i>
                    <p class="mb-0">Password must be minimum 8 characters long - the more, the better.</p>
                  </div>
                  <div class="d-flex justify-content-end pt-3">
                    <button class="btn btn-primary ms-3" name="password_change_btn" type="submit">Save changes</button>
                  </div>
                </form>
              </div>
            </section>

            <!-- Delete account-->
            <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4">
              <div class="card-body">
                <div class="d-flex align-items-center pb-4 mt-sm-n1 mb-0 mb-lg-1 mb-xl-3"><i class="ai-trash text-primary lead pe-1 me-2"></i>
                  <h2 class="h4 mb-0">Delete account</h2>
                </div>
                <div class="alert alert-warning d-flex mb-4"><i class="ai-triangle-alert fs-xl me-2"></i>
                  <p class="mb-0">When you delete your account, your public profile will be deactivated immediately. If you change your mind before the 14 days are up, sign in with your email and password, and we'll send a link to reactivate account. <a href="#" class="alert-link">Learn more</a></p>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="confirm">
                  <label class="form-check-label text-dark fw-medium" for="confirm">Yes, I want to delete my account</label>
                </div>
                <div class="d-flex flex-column flex-sm-row justify-content-end pt-4 mt-sm-2 mt-md-3">
                  <button class="btn btn-danger" type="button"><i class="ai-trash ms-n1 me-2"></i>Delete account</button>
                </div>
              </div>
            </section>
        </div>

<?php include "./components/dashfooter.php"; ?>