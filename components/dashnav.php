            <header class="navbar navbar-expand-lg fixed-top">
                <div class="container">
                    <a class="navbar-brand pe-sm-3">
                        <img src="./assets/img/logodark.svg" alt="logo" width="200">
                    </a>
                    <div class="dropdown nav d-none d-sm-block order-lg-3">
                        <a class="nav-link d-flex align-items-center p-0" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="border rounded-circle" src="<?php echo $_SESSION['picture'];?>" width="48" alt="<?php echo $_SESSION['firstName'];?>'s Avatar">
                            <div class="ps-2">
                                <div class="fs-xs lh-1 opacity-60">Hello,</div>
                                <div class="fs-sm dropdown-toggle"><?php echo $_SESSION['firstName'];?></div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end my-1">
                            <h6 class="dropdown-header fs-xs fw-medium text-muted text-uppercase pb-1">Account</h6>
                            <a class="dropdown-item" href="profile"><i class="ai-user-check fs-lg opacity-70 me-2"></i>Profile</a>
                            <a class="dropdown-item" href="setting"><i class="ai-settings fs-lg opacity-70 me-2"></i>Settings</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout"><i class="ai-logout fs-lg opacity-70 me-2"></i>Sign out</a>
                        </div>
                    </div>
                    <button class="navbar-toggler ms-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
                    <nav class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav navbar-nav-scroll me-auto" style="--ar-scroll-height: 520px;">
                            <!-- <li class="nav-item"><a class="nav-link" href="explore">Explore</a></li> -->
                            <li class="nav-item dropdown d-sm-none border-top mt-2 pt-2">
                                <a class="nav-link" href="#" data-bs-toggle="dropdown" aria-expanded="false"><img class="border rounded-circle" src="<?php echo $_SESSION['picture'];?>" width="48" alt="<?php echo $_SESSION['firstName'];?>'s Avatar">
                                    <div class="ps-2">
                                        <div class="fs-xs lh-1 opacity-60">Hello,</div>
                                        <div class="fs-sm dropdown-toggle"><?php echo $_SESSION['firstName'];?></div>
                                    </div>
                                </a>
                                <div class="dropdown-menu">
                                    <h6 class="dropdown-header fs-xs fw-medium text-muted text-uppercase pb-1">Account</h6>
                                    <a class="dropdown-item" href="profile"><i class="ai-user-check fs-lg opacity-70 me-2"></i>Profile</a>
                                    <a class="dropdown-item" href="setting"><i class="ai-settings fs-lg opacity-70 me-2"></i>Settings</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="logout"><i class="ai-logout fs-lg opacity-70 me-2"></i>Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </header>

            <div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
                <div class="row pt-sm-2 pt-lg-0">