<?php
require_once "./auth/gig-query.php";
?>   
    <!-- Add new gig modal-->
    <div class="modal fade" id="gigModal" data-bs-backdrop="static" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h4 class="modal-title">Add new gig</h4>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="modal-body needs-validation pt-0" novalidate enctype="multipart/form-data">
                    <div class="row row-cols-1 row-cols-lg-2 g-4 pb-2 pb-sm-3 mb-4">
                        <div class="col" style="display: none">
                            <label class="form-label" for="address1">User ID</label>
                            <input class="form-control" type="text" name="userID" required value="<?php echo $_SESSION['id']; ?>">
                        </div>
                        <div class="col">
                            <label class="form-label" for="title">Title</label>
                            <input class="form-control" type="text" name="title" required placeholder="Web Development Gig">
                        </div>
                        <div class="col">
                            <label class="form-label" for="payOut">Pay out</label>
                            <select class="form-select" required name="payOut">
                                <option value="" disabled selected>Select a pay out method</option>
                                <option value="Daily">Daily</option>
                                <option value="Weekly">Weekly</option>
                                <option value="Monthly">Monthly</option>
                                <option value="Anytime">Anytime</option>
                            </select>
                        </div>
                        <div class="col">
                            <label class="form-label" for="categories">Categories</label>
                            <select class="form-select" required name="categories">
                                <option value="" disabled selected>Select categories</option>
                                <option value="Fashion and Apparel">Fashion and Apparel</option>
                                <option value="Beauty and Personal Care">Beauty and Personal Care</option>
                                <option value="Home and Garden">Home and Garden</option>
                                <option value="Electronics and Appliances">Electronics and Appliances</option>
                                <option value="Food and Beverage">Food and Beverage</option>
                                <option value="Health and Wellness">Health and Wellness</option>
                                <option value="Travel and Hospitality">Travel and Hospitality</option>
                                <option value="Automotive">Automotive</option>
                                <option value="Education and Training">Education and Training</option>
                                <option value="Financial Services">Financial Services</option>
                                <option value="Real Estate">Real Estate</option>
                                <option value="Sports and Fitness">Sports and Fitness</option>
                                <option value="Toys and Games">Toys and Games</option>
                                <option value="Arts and Crafts">Arts and Crafts</option>
                                <option value="Business Services">Business Services</option>
                                <option value="Entertainment and Media">Entertainment and Media</option>
                                <option value="Gifts and Occasions">Gifts and Occasions</option>
                                <option value="Industrial and Manufacturing">Industrial and Manufacturing</option>
                                <option value="Nonprofit and Social Causes">Nonprofit and Social Causes</option>
                                <option value="Pet Supplies and Services">Pet Supplies and Services</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="col">
                            <label class="form-label" for="commission">Commission</label>
                            <div class="range-slider" data-start-min="10" data-min="1" data-max="100" data-step="1">
                                <div class="range-slider-ui"></div>
                                <input type="hidden" class="form-control range-slider-value-min" name="commission">
                            </div>
                        </div>
                        <div class="col">
                            <label class="form-label" for="youtubeLink">Youtube link</label>
                            <input type="text" class="form-control" name="youtubeLink" placeholder="https://youtu.be/M2HPGhM8Yfs">
                        </div>
                        <div class="col">
                            <label class="form-label" for="website">Website</label>
                            <input type="text" class="form-control" name="website" placeholder="www.google.com">
                        </div>
                        <div class="col">
                            <label class="form-label" for="otherLink">Other link</label>
                            <input type="text" class="form-control" name="otherLink" placeholder="www.anyotherlink.com">
                        </div>
                        <div class="col">
                            <label class="form-label" for="productTraining">More product training</label>
                            <select class="form-select" required name="productTraining">
                                <option value="" disabled selected>Select product training</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="col col-lg-12">
                            <label class="form-label" for="productTraining">Upload post AD <span class="small fw-light text-primary">(JPG with H 1000px & W 500px.)</span></label>
                            <input class="form-control" type="file" id="file-input" name="postAD">
                        </div>
                        <div class="col-12 col-lg-12">
                            <label class="form-label" for="gigDescription">Gig description</label>
                            <textarea class="form-control" rows="5" placeholder="Resell website" name="gigDescription"></textarea>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-sm-row">
                        <button class="btn btn-secondary mb-3 mb-sm-0" type="reset" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary ms-sm-3" name="gig_upload_btn" type="submit">Upload Gig</button>
                    </div>
                </form>
            </div>
        </div>
    </div>