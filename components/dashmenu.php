        <aside class="col-lg-3 pe-lg-4 pe-xl-5 mt-n3">
            <div class="position-lg-sticky top-0">
                <div class="d-none d-lg-block" style="padding-top: 105px;"></div>
                <div class="offcanvas-lg offcanvas-start" id="sidebarAccount">
                    <button class="btn-close position-absolute top-0 end-0 mt-3 me-3 d-lg-none" type="button" data-bs-dismiss="offcanvas" data-bs-target="#sidebarAccount"></button>
                    <div class="offcanvas-body">
                        <div class="pb-2 pb-lg-0 mb-4 mb-lg-5">
                            <img class="d-block rounded-circle mb-2" src="<?php echo $_SESSION['picture']; ?>" width="80" alt="<?php echo $_SESSION['firstName']?>'s Avatar">
                            <h3 class="h5 mb-1"><?php echo $_SESSION['firstName']?> <?php echo $_SESSION['lastName']; ?></h3>
                            <span class="badge bg-faded-info text-info fs-sm"><?php echo $_SESSION['accountType']; ?></span>
                        </div>
                        <nav class="nav flex-column pb-2 pb-lg-4 mb-3">
                            <h4 class="fs-xs fw-medium text-muted text-uppercase pb-1 mb-2">Dashboard</h4>
                            <a class="nav-link fw-semibold py-2 px-0 active" href="dashbord"><i class="ai-user-check fs-5 opacity-60 me-2"></i>Overview</a>
                            <a class="nav-link fw-semibold py-2 px-0" href="gigs"><i class="ai-cart fs-5 opacity-60 me-2"></i>Gigs</a>
                            <a class="nav-link fw-semibold py-2 px-0" href="earnings"><i class="ai-activity fs-5 opacity-60 me-2"></i>Earnings</a>
                            <a class="nav-link fw-semibold py-2 px-0" href="billing"><i class="ai-wallet fs-5 opacity-60 me-2"></i>Billing</a>
                            <a class="nav-link fw-semibold py-2 px-0" href=""><i class="ai-messages fs-5 opacity-60 me-2"></i>Support</a>
                            <a class="nav-link fw-semibold py-2 px-0" href="settings"><i class="ai-settings fs-5 opacity-60 me-2"></i>Settings</a>
                        </nav>
                        <hr>
                        <nav class="nav flex-column mt-3">
                            <a class="nav-link fw-semibold py-2 px-0" href="logout"><i class="ai-logout fs-5 opacity-60 me-2"></i>Sign out</a>
                        </nav>
                    </div>
                </div>
            </div>
        </aside>