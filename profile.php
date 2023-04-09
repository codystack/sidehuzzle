<?php
$page = "Profile";
include "./components/dashheader.php";
include "./components/dashnav.php";
require_once "./auth/profile-query.php";
?>

    <?php include "./components/dashmenu.php" ?>

        <?php
            $select_query = "SELECT * FROM users WHERE id ='".$_SESSION['id']."'";
            $result = mysqli_query($conn, $select_query);
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $picture = $row['picture'];
                $firstName = $row['firstName'];
                $lastName = $row['lastName'];
                $email = $row['email'];
                $phone = $row['phone'];
        ?>

        <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
            <h1 class="h2 mb-4">Settings</h1>
            <!-- Basic info-->
            <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
              <div class="card-body">
                <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3"><i class="ai-user text-primary lead pe-1 me-2"></i>
                  <h2 class="h4 mb-0">Basic info</h2>
                </div>
                <div class="d-flex align-items-center">
                    <div class="dropdown">
                        <a class="d-flex flex-column justify-content-end position-relative overflow-hidden rounded-circle bg-size-cover bg-position-center flex-shrink-0" href="#" data-bs-toggle="dropdown" aria-expanded="false" style="width: 120px; height: 120px; background-image: url(<?php echo $picture; ?>);">
                            <span class="d-block text-light text-center lh-1 pb-1" style="background-color: rgba(0,0,0,.5)"><i class="ai-camera"></i></span></a>
                        <div class="dropdown-menu my-1">
                            <button type="button" class="dropdown-item fw-normal" onClick="triggerClick()" id="profileDisplay"><i class="ai-camera fs-base opacity-70 me-2"></i>Upload new photo</button>
                            <!-- <a class="dropdown-item text-danger fw-normal" href="#"><i class="ai-trash fs-base me-2"></i>Delete photo</a> -->
                        </div>
                    </div>
                    <div class="ps-3">
                        <h3 class="h6 mb-1">Profile picture</h3>
                        <p class="fs-sm text-muted mb-0">PNG or JPG no bigger than 1000px wide and tall.</p>
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
                            <div class="row g-3 g-sm-4 mt-0 mt-lg-2">
                                <div class="col-sm-6" style="display: none;">
                                    <input type="file" name="picture" value="<?php echo $picture; ?>" onChange="displayImage(this)" id="picture" class="form-control">
                                </div>
                            </div>
                            <button class="btn btn-dark mt-2 btn-sm" name="profile_picture_btn" type="submit">Change Picture</button>
                        </form>
                    </div>
                </div>

                <?php
                    if (isset($_SESSION['error_message'])) {
                        ?>
                        <div class="alert alert-danger mt-5" role="alert">
                            <div class="alert-message text-center">
                                <?php echo $_SESSION['error_message']; ?>
                            </div>
                        </div>
                        <?php
                        unset($_SESSION['error_message']);
                    }
                ?>

                <?php
                    if (isset($_SESSION['success_message'])) {
                        ?>
                        <div class="alert alert-success mt-5" role="alert">
                            <div class="alert-message text-center">
                                <?php echo $_SESSION['success_message']; ?>
                            </div>
                        </div>
                        <?php
                        unset($_SESSION['success_message']);
                    }
                ?>
                
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                    <div class="row g-3 g-sm-4 mt-0 mt-lg-2">
                        <div class="col-sm-6">
                            <label class="form-label" for="fn">First name</label>
                            <input class="form-control" type="text" value="<?php echo $firstName;?>" name="firstName">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="ln">Last name</label>
                            <input class="form-control" type="text" value="<?php echo $lastName;?>" name="lastName">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="email">Email address</label>
                            <input class="form-control" type="email" value="<?php echo $email;?>" name="email">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="phone">Phone</label>
                            <input class="form-control" type="tel" data-format="{&quot;numericOnly&quot;: true, &quot;delimiters&quot;: [&quot;+1 &quot;, &quot; &quot;, &quot; &quot;], &quot;blocks&quot;: [0, 3, 3, 2]}" value="<?php echo $phone;?>" name="phone">
                        </div>
                        <div class="col-12 d-flex justify-content-end pt-3">
                            <button class="btn btn-secondary" type="reset">Cancel</button>
                            <button class="btn btn-primary ms-3" name="update_profile_btn" type="submit">Save changes</button>
                        </div>
                    </div>
                </form>
                
              </div>
            </section>
        </div>

        <?php } exit();
            }
        ?>

<?php include "./components/dashfooter.php"; ?>