                </div>
            </div>
            <!-- Divider for dark mode only-->
            <hr class="d-none d-dark-mode-block">
            <!-- Sidebar toggle button-->
            <button class="d-lg-none btn btn-sm fs-sm btn-primary w-100 rounded-0 fixed-bottom" data-bs-toggle="offcanvas" data-bs-target="#sidebarAccount"><i class="ai-menu me-2"></i>Account menu</button>
        </main>
        <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/nouislider/dist/nouislider.min.js"></script>
        <script src="assets/vendor/cleave.js/dist/cleave.min.js"></script>
        <script src="assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script>
        <script src="//code.tidio.co/6b4eftih9m55n7m8az5xz0ufqwtawwle.js" async></script>
        <script src="assets/js/main.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src='https://cdn.jsdelivr.net/npm/moment@2.29.1/min/moment.min.js'></script>
        <script>
            function confirmDelete(self) {
                var id = self.getAttribute("data-id");
            
                document.getElementById("form-delete-user").id.value = id;
                $("#userDeleteModal").modal("show");
            }
        </script>
        <script>
            (function() {
                function onTidioChatApiReady() {
                    window.tidioChatApi.hide();
                    window.tidioChatApi.on("close", function() {
                    window.tidioChatApi.hide();
                    });
                }

                if (window.tidioChatApi) {
                    window.tidioChatApi.on("ready", onTidioChatApiReady);
                } else {
                    document.addEventListener("tidioChat-ready", onTidioChatApiReady);
                }

                document.querySelector(".chat-button").addEventListener("click", function() {
                    window.tidioChatApi.show();
                    window.tidioChatApi.open();
                });
            })();
        </script>

        <!-- Password Matching-->
        <script>
            $('#confirmpassword').on('keyup', function () {
                if ($('#newpassword').val() == $('#confirmpassword').val()) {
                    $('#message').html('Password matched😜').css('color', 'green');
                } else
                    $('#message').html('Password did not match😡').css('color', 'red');
            });
        </script>

        <script>
            function triggerClick(e) {
                document.querySelector('#picture').click();
            }
            function displayImage(e) {
                if (e.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e){
                        document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
                    }
                    reader.readAsDataURL(e.files[0]);
                }
            }
        </script>
    </body>
</html>