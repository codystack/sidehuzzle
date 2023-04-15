<?php
$page = "Dashboard";
include "./components/dashheader.php";
include "./components/dashnav.php";
?>

    <?php include "./components/dashmenu.php" ?>

        <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
            <div class="d-sm-flex align-items-center mb-4">
                <h1 class="h2 mb-4 mb-sm-0 me-4">Dashboard</h1>
            </div>
            <div class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
                <div class="card-body">
                    <div class="row g-3 g-xl-4">
                        <div class="col-md-4 col-sm-6">
                            <div class="h-100 bg-secondary rounded-3 text-center p-4">
                                <h6 class="pb-2 mb-1">Earnings (before taxes)</h6>
                                <div class="h2 text-primary mb-2">$0.00</div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="h-100 bg-secondary rounded-3 text-center p-4">
                                <h6 class="pb-2 mb-1">Your balance</h6>
                                <div class="h2 text-primary mb-2">$0.00</div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="h-100 bg-secondary rounded-3 text-center p-4">
                                <h6 class="pb-2 mb-1">Lifetime earnings</h6>
                                <div class="h2 text-primary mb-2">$0.00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4">
                <div class="card-body">
                    <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3"><i class="ai-briefcase text-primary lead pe-1 me-2"></i>
                        <h2 class="h4 mb-0">Gigs</h2><a class="btn btn-sm btn-secondary ms-auto" href="gigs">View all</a>
                    </div>
                    
                    <div class="accordion accordion-alt accordion-orders" id="orders">

                        <?php
                            $select_query = "SELECT * FROM gigs WHERE userID = '".$_SESSION['id']."' ORDER BY dateCreated DESC LIMIT 5";
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
                                            <div class="fs-sm text-muted"><?php echo $row['gigID']; ?></div>
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
                                                        <div class="fs-sm fw-medium text-dark"><?php echo $row['payOut']; ?></div>
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
                </div>
            </section>
        </div>

        <?php include "./components/gigs-modal.php"; ?>
        
<?php include "./components/dashfooter.php"; ?>