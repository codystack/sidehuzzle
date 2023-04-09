<?php
$page = "Billing";
include "./components/dashheader.php";
include "./components/dashnav.php";
?>

    <?php include "./components/dashmenu.php" ?>

        <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
            <h1 class="h2 mb-4">Billing</h1>
            <!-- Payment methods-->
            <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
              <div class="card-body">
                <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3"><i class="ai-card text-primary lead pe-1 me-2"></i>
                  <h2 class="h4 mb-0">Account information</h2>
                </div>
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
                
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <?php
                        $select_query = "SELECT * FROM billing WHERE userID = '".$_SESSION['id']."'";
                        $result = mysqli_query($conn, $select_query);
                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                            
                    ?>
                    <!-- Payment method-->
                    <div class="col">
                        <div class="card h-100 rounded-3 p-3 p-sm-4">
                        <div class="d-flex align-items-center pb-2 mb-1">
                            <h3 class="h6 text-nowrap text-truncate mb-0"><?php echo $row['accountType']; ?></h3>
                            <div class="d-flex ms-auto">
                            <button class="nav-link fs-xl fw-normal py-1 pe-0 ps-1 ms-2" type="button" data-bs-toggle="tooltip" aria-label="Edit" data-bs-original-title="Edit"><i class="ai-edit-alt"></i></button>
                            <button class="nav-link text-danger fs-xl fw-normal py-1 pe-0 ps-1 ms-2" type="button" data-bs-toggle="tooltip" aria-label="Delete" data-bs-original-title="Delete"><i class="ai-trash" data-id="<?php $id; ?>" onclick="confirmDelete(this);"></i></button>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <img src="./assets/img/bank.png" class="rounded-circle" width="52" height="42" alt="bank">
                            <div class="ps-2 fs-sm">
                                <div><h3 class="h6 text-nowrap text-truncate mb-0"><?php echo $row['accountName']; ?></h3></div>
                                <div class="text-dark"><?php echo $row['accountNumber']; ?> <span class="text-muted">(<?php echo $row['bankName']; ?>)</span></div>
                                <div class="text-muted"></div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <?php
                        }
                    }
                    ?>
                    <!-- Add payment method-->
                    <div class="col">
                        <div class="card h-100 justify-content-center align-items-center border-dashed rounded-3 py-5 px-3 px-sm-4"><a class="stretched-link d-flex align-items-center fw-semibold text-decoration-none" href="#addCard" data-bs-toggle="modal"><i class="ai-circle-plus fs-xl me-2"></i>Add new payment methods</a></div>
                    </div>
                </div>
              </div>
            </section>
        </div>

        <?php 
            include "./components/billing-modal.php"; 
            include "./components/delete.php";
        ?>

<?php include "./components/dashfooter.php"; ?>