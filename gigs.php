<?php
$page = "Gigs";
include "./components/dashheader.php";
include "./components/dashnav.php";
?>

    <?php include "./components/dashmenu.php" ?>

        <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
            <div class="d-flex align-items-center mb-4">
                <h1 class="h2 mb-0">Gigs</h1>
                <a class="btn ms-auto btn-outline-primary" type="button" href="#gigModal" data-bs-toggle="modal">Add new gig</a>
            </div>
            <div class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4">
                <div class="card-body pb-4">
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
                    
                    <div class="accordion accordion-alt accordion-orders" id="orders">

                        <?php
                            $select_query = "SELECT * FROM gigs WHERE userID = '".$_SESSION['id']."'";
                            $result = mysqli_query($conn, $select_query);
                            if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while($row = mysqli_fetch_assoc($result)) { 
                                    $status = $row['status'];
                                    switch ($status) {
                                        case "Approved";
                                            $class  = 'bg-faded-success';
                                            $text = 'text-success';
                                            break;
                                        case "Pending";
                                            $class  = 'bg-faded-warning';
                                            $text = 'text-warning';
                                            break;
                                        case "Banned";
                                            $class  = 'bg-faded-danger';
                                            $text = 'text-danger';
                                            break;
                                        default:
                                            $class  = '';
                                    }
                        ?>
                        
                        <div class="accordion-item border-top mb-0">
                            <div class="accordion-header">
                                <a class="accordion-button d-flex fs-4 fw-normal text-decoration-none py-3 collapsed" href="#<?php echo $row['accordionID']; ?>" data-bs-toggle="collapse" aria-expanded="false" aria-controls="<?php echo $row['accordionID']; ?>">
                                    <div class="d-flex justify-content-between w-100" style="max-width: 75%;">
                                        <div class="col me-3 me-sm-3">
                                            <div class="fs-sm text-muted">#<?php echo $row['gigID']; ?></div>
                                            <span class="badge <?php echo $class; ?> <?php echo $text; ?> fs-xs"><?php echo $status; ?></span>
                                        </div>
                                        <div class="col me-3 me-sm-3">
                                            <div class="fs-sm text-muted mb-2">Title</div>
                                            <div class="fs-sm fw-medium text-dark"><h6><?php echo $row['title']; ?></h6></div>
                                        </div>
                                        <div class="col me-3 me-sm-3 ms-sm-5">
                                            <div class="fs-sm text-muted mb-2">Commission</div>
                                            <div class="fs-sm fw-medium text-dark"><?php echo $row['commission']; ?>%</div>
                                        </div>
                                    </div>
                                    <div class="accordion-button-img d-none d-sm-flex ms-auto">
                                        <div class="mx-1"><img class="rounded-circle" src="<?php echo $row['postAD']; ?>" width="60" alt="Gig Ad"></div>
                                    </div>
                                </a>
                            </div>

                            <div class="accordion-collapse collapse" id="<?php echo $row['accordionID']; ?>" data-bs-parent="#orders" style="">
                                <div class="accordion-body">
                                    <div class="table-responsive pt-1">
                                        <table class="table align-middle w-100" style="min-width: 450px;">
                                            <tbody>
                                                <tr>
                                                    <td class="border-0 py-1 px-0">
                                                        <div class="d-flex align-items-center">
                                                            <div class="d-inline-block flex-shrink-0 bg-secondary" style="width: 150px">
                                                                <img src="<?php echo $row['postAD']; ?>" class="rounded-1" width="100%" alt="Gig Ad">
                                                            </div>
                                                            <div class="ps-3 ps-sm-4">
                                                                <h4 class="h6 mb-2">Gig Description:</h4>
                                                                <p><?php echo $row['gigDescription']; ?></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="border-0 py-1 pe-0 ps-3 ps-sm-4">
                                                        <div class="fs-sm text-muted mb-2">Pay Out</div>
                                                        <div class="fs-sm fw-medium text-dark"><?php echo $row['payOut']; ?></div>
                                                    </td>
                                                    <td class="border-0 py-1 pe-0 ps-3 ps-sm-4">
                                                        <div class="fs-sm text-muted mb-2">Product Training</div>
                                                        <div class="fs-sm fw-medium text-dark"><?php echo $row['productTraining']; ?></div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="bg-secondary rounded-1 p-4 my-2">
                                        <div class="row">
                                            <div class="col-sm-4 col-md-4 col-lg-4 mb-3 mb-md-0">
                                                <div class="fs-sm fw-medium text-dark mb-1">Website:</div>
                                                <div class="fs-sm"><?php echo $row['website']; ?></div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 mb-4 mb-md-0">
                                                <div class="fs-sm fw-medium text-dark mb-1">Youtube:</div>
                                                <div class="fs-sm"><?php echo $row['youtubeLink']; ?></div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 mb-4 mb-md-0">
                                                <div class="fs-sm fw-medium text-dark mb-1">Others:</div>
                                                <div class="fs-sm"><?php echo $row['otherLink']; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        }else {
                            echo "<div class='text-center'>
                            <img src='./assets/img/empty.png' alt='empty'>
                            <h5>No gigs yet! <a class='text-primary' type='button' href='#gigModal' data-bs-toggle='modal'>add new gigs now</a>.</h5>
                            </div>";
                        }
                        ?>
                    </div>
                    <!-- Pagination-->
                    <!-- <div class="d-sm-flex align-items-center pt-4 pt-sm-5">
                    <nav class="order-sm-2 ms-sm-auto mb-4 mb-sm-0" aria-label="Orders pagination">
                        <ul class="pagination pagination-sm justify-content-center">
                        <li class="page-item active" aria-current="page"><span class="page-link">1<span class="visually-hidden">(current)</span></span></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        </ul>
                    </nav>
                    <button class="btn btn-primary w-100 w-sm-auto order-sm-1 ms-sm-auto me-sm-n5" type="button">Load more orders</button>
                    </div> -->
                </div>
            </div>
        </div>

        <?php include "./components/gigs-modal.php"; ?>
    
<?php include "./components/dashfooter.php"; ?>