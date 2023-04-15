    <section class="pb-5 pt-3 pt-sm-4 pt-lg-5 mb-xl-3 mb-xxl-5 bg-secondary" id="gigs">
        <div class="container py-5">
            <h2 class="h1 text-center">Explore the <span class="text-primary">Gigs</span> at your<br>fingertips</h2>
            <p class="text-center pb-4 mb-2 mb-lg-3">We have been helping businesses in the following industries for over a decade</p>
            <div class="row">
                <?php
                    $select_query = "SELECT * FROM gigs WHERE status = 'Approved'";
                    $result = mysqli_query($conn, $select_query);
                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) { 
                ?>
                <div class="col-md-4 mt-5 h-auto">
                    <div class="card h-100 border-0 rounded-4 pb-3">
                        <div class="position-relative ignore-dark-mode">
                            <div class="card-body position-absolute top-0 bottom-0 py-4">
                                <div class="d-table badge bg-danger rounded-pill mb-2">Hot Sale</div>
                                <!-- <div class="d-table badge bg-light text-nav rounded-pill">Available Gig</div> -->
                            </div>
                            <img class="rounded-4 rounded-bottom-0" src="<?php echo $row['postAD']; ?>" style="height: 250px; width: 100%;" alt="Gig Ad">
                        </div>
                        <div class="card-body pb-4">
                            <h3 class="h4"><?php echo $row['title']; ?></h3>
                            <p class="text-justify"><?php echo substr_replace($row['gigDescription'], "...", 150); ?></p>
                            <ul class="fs-sm ps-4 mb-0">
                                <li class="mb-2"><strong>Pay Out:</strong> <?php echo $row['payOut']; ?></li>
                                <li class="mb-2"><strong>Commission:</strong> <?php echo $row['commission']; ?>%</li>
                            </ul>
                        </div>
                        <div class="card-footer border-0 pt-0">
                            <a class="btn btn-outline-primary w-100" href="view-gig?gigID=<?php echo $row['gigID'];?>">I'm interested</a>
                        </div>
                    </div>
                </div>
                <?php
                    }
                }else {
                    echo "<div class='text-center'>
                    <img src='./assets/img/empty.png' alt='empty'>
                    <h5>No approved gigs yet!</h5>
                    </div>";
                }
                ?>
            </div>
        </div>
    </section>