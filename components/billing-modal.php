<?php
require_once "./auth/billing-query.php";
?>
    <!-- Add payment modal-->
    <div class="modal fade" id="addCard" data-bs-backdrop="static" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h4 class="modal-title">Add Account Information</h4>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="modal-body needs-validation pt-0" novalidate>
                    <div class="mb-2" style="display: none">
                        <label class="form-label" for="card-name">User ID</label>
                        <input class="form-control" type="text" required name="userID" value="<?php echo $_SESSION['id'];?>">
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="card-name">Bank name</label>
                        <input class="form-control" type="text" required name="bankName">
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="card-name">Account name</label>
                        <input class="form-control" type="text" required name="accountName">
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="card-number">Account number</label>
                        <input class="form-control" type="text" required name="accountNumber">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="country">Account type</label>
                        <select class="form-select" required name="accountType">
                            <option value="" disabled selected>Select a account type</option>
                            <option value="Chequing Account">Chequing Account</option>
                            <option value="Savings Account">Savings Account</option>
                        </select>
                    </div>
                    <div class="d-flex flex-column flex-sm-row">
                        <button class="btn btn-secondary mb-3 mb-sm-0" type="reset" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary ms-sm-3" name="add_billing_btn" type="submit">Add account</button>
                    </div>
                </form>
            </div>
        </div>
    </div>