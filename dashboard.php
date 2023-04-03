<?php
include "./components/dashheader.php";
include "./components/dashnav.php";
?>

    <?php include "./components/dashmenu.php" ?>

        <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
            <div class="d-sm-flex align-items-center mb-4">
                <h1 class="h2 mb-4 mb-sm-0 me-4">Dashboard</h1>
            </div>
            <div class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4">
                <div class="card-body">
                    <div class="row g-3 g-xl-4">
                        <div class="col-md-4 col-sm-6">
                            <div class="h-100 bg-secondary rounded-3 text-center p-4">
                                <h6 class="pb-2 mb-1">Earnings (before taxes)</h6>
                                <div class="h2 text-primary mb-2">$842.00</div>
                                <p class="fs-sm text-muted mb-0">Sales 8/1/2022 - 8/15/2022</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="h-100 bg-secondary rounded-3 text-center p-4">
                                <h6 class="pb-2 mb-1">Your balance</h6>
                                <div class="h2 text-primary mb-2">$735.00</div>
                                <p class="fs-sm text-muted mb-0">To be paid on 8/15/2022</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="h-100 bg-secondary rounded-3 text-center p-4">
                                <h6 class="pb-2 mb-1">Lifetime earnings</h6>
                                <div class="h2 text-primary mb-2">$9,156.74</div>
                                <p class="fs-sm text-muted mb-0">Based on list price</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php include "./components/dashfooter.php"; ?>