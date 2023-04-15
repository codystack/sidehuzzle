<?php
include "./components/header.php";
include "./components/navbarlight.php";
?>

    <div class="pt-lg-5 mt-3"></div>
    <?php
        $gigID = $_GET['gigID'];
        $select_query = "SELECT * FROM gigs WHERE gigID = '$gigID'";
        $result = mysqli_query($conn, $select_query);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) { 
    ?>
    <section class="container py-5 mt-5 mb-sm-2 mb-lg-3 mb-xl-4 mb-xxl-5">
        <h2 class="h1 d-md-none"><?php echo $row['title']; ?></h2>
        <div class="d-flex d-md-none align-items-center pb-3 mb-3">
            <div class="h3 mb-0 me-3">$14.00</div>
            <del class="fs-5 fw-medium text-muted me-3">$19.00</del><span class="badge bg-faded-danger text-danger d-md-none">Sale</span>
        </div>
        <div class="row pb-sm-1 pb-md-4">
            <!-- Gallery-->
            <div class="col-md-6 gallery mb-3 mb-md-0">
                <!-- Item-->
                <a class="d-block gallery-item card-hover zoom-effect mb-4" href="<?php echo $row['postAD']; ?>">
                    <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-1 overflow-hidden zindex-2 opacity-0"><i class="ai-zoom-in fs-2 text-white position-relative zindex-2"></i>
                        <div class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-20"></div>
                    </div>
                    <div class="zoom-effect-wrapper rounded-1">
                        <div class="zoom-effect-img bg-secondary">
                            <img class="d-block mx-auto" src="<?php echo $row['postAD']; ?>" alt="<?php echo $row['title']; ?>">
                        </div>
                    </div>
                </a>
                <div class="row row-cols-1 row-cols-sm-2 g-4 mb-4">
                </div>
            </div>

            <!-- Product details-->
            <div class="col-md-6 col-xl-5 offset-xl-1">
                <div class="d-none d-md-block" style="margin-top: -90px;"></div>
                <div class="position-md-sticky top-0 ps-md-4 ps-lg-5 ps-xl-0">
                <div class="d-none d-md-block" style="padding-top: 90px;"></div>
                <div class="d-flex align-items-center pt-3 py-3"><span class="badge bg-faded-danger text-danger d-none d-md-inline-block me-4">Sale</span></div>
                <h1 class="d-none d-md-inline-block pb-1 mb-2"><?php echo $row['title']; ?></h1>
                <p class="fs-sm mb-4"><?php echo $row['gigDescription']; ?></p>
                <div class="d-none d-md-flex align-items-center pb-3 mb-3">
                    <div class="h3 mb-0 me-3"><?php echo $row['commission']; ?>%</div>
                    <del class="fs-5 fw-medium text-muted">$19.00</del>
                </div>
                <!-- Color button selector-->
                <div class="h6">Color:<span class="text-muted fw-normal ms-1" id="colorOption">Gray concrete</span></div>
                <div class="d-flex pb-3">
                    <div class="me-2 mb-2">
                    <input class="btn-check" type="radio" name="color" data-binded-label="colorOption" value="Gray concrete" checked id="color1">
                    <label class="btn btn-icon btn-sm btn-outline-secondary rounded-circle" for="color1"><span class="d-block bg-size-cover bg-position-center rounded-circle" style="width: 1.5rem; height: 1.5rem; background-color: #c0c0c0; background-image: url(../assets/img/shop/pattern/marble.jpg);"></span></label>
                    </div>
                    <div class="me-2 mb-2">
                    <input class="btn-check" type="radio" name="color" data-binded-label="colorOption" value="Soft beige" id="color2">
                    <label class="btn btn-icon btn-sm btn-outline-secondary rounded-circle" for="color2"><span class="d-block rounded-circle" style="width: 1.5rem; height: 1.5rem; background-color: #d9c9a1;"></span></label>
                    </div>
                    <div class="me-2 mb-2">
                    <input class="btn-check" type="radio" name="color" data-binded-label="colorOption" value="Bluish sky" id="color3">
                    <label class="btn btn-icon btn-sm btn-outline-secondary rounded-circle" for="color3"><span class="d-block rounded-circle" style="width: 1.5rem; height: 1.5rem; background-color: #a1b7d9;"></span></label>
                    </div>
                    <div class="me-2 mb-2">
                    <input class="btn-check" type="radio" name="color" data-binded-label="colorOption" value="Green grass" id="color4">
                    <label class="btn btn-icon btn-sm btn-outline-secondary rounded-circle" for="color4"><span class="d-block rounded-circle" style="width: 1.5rem; height: 1.5rem; background-color: #74947d;"></span></label>
                    </div>
                    <div class="me-2 mb-2">
                    <input class="btn-check" type="radio" name="color" data-binded-label="colorOption" value="Woody brown" id="color5">
                    <label class="btn btn-icon btn-sm btn-outline-secondary rounded-circle" for="color5"><span class="d-block bg-size-cover bg-position-center rounded-circle" style="width: 1.5rem; height: 1.5rem; background-color: #af8352; background-image: url(../assets/img/shop/pattern/wood.jpg);"></span></label>
                    </div>
                </div>
                <!-- Weight button selector-->
                <div class="h6">Weight</div>
                <div class="d-flex">
                    <div class="me-3">
                    <input class="btn-check" type="radio" name="weight" value="140 g" checked id="weight1">
                    <label class="btn btn-outline-secondary px-2" for="weight1"><span class="mx-1">140 g</span></label>
                    </div>
                    <div class="me-3">
                    <input class="btn-check" type="radio" name="weight" value="260 g" id="weight2">
                    <label class="btn btn-outline-secondary px-2" for="weight2"><span class="mx-1">260 g</span></label>
                    </div>
                    <div class="me-3">
                    <input class="btn-check" type="radio" name="weight" value="440 g" id="weight3">
                    <label class="btn btn-outline-secondary px-2" for="weight3"><span class="mx-1">440 g</span></label>
                    </div>
                </div>
                <!-- Action buttons-->
                <div class="d-sm-flex d-md-block d-lg-flex py-4 py-md-5 my-3 my-md-0 mt-lg-0 mb-lg-4">
                    <div class="count-input bg-gray rounded-3 me-4 mb-3 mb-sm-0 mb-md-3 mb-lg-0">
                    <button class="btn btn-icon btn-lg fs-xl" type="button" data-decrement>-</button>
                    <input class="form-control" type="number" value="1" readonly>
                    <button class="btn btn-icon btn-lg fs-xl" type="button" data-increment>+</button>
                    </div>
                    <div class="d-flex align-items-center">
                    <button class="btn btn-lg btn-primary w-100 w-lg-auto me-2" type="button"><i class="ai-cart me-2 ms-n1"></i>Add to cart</button>
                    <div class="nav"><a class="nav-link fs-3 px-3" href="#" data-bs-toggle="tooltip" title="Add to Favorites"><i class="ai-heart"></i></a></div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <?php
        }
    }else {
        echo $gigID;
    }
    ?>

<?php include "./components/footer.php"; ?>