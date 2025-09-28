<div class="container py-2">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body p-4">
                    <h3 class="text-center mb-4">Login With Account</h3>

                    <!-- Display flash messages -->
                    <?php if (isset($_SESSION['flash_message'])): ?>
                        <div class="alert alert-info">
                            <?php
                                echo $_SESSION['flash_message'];
                                unset($_SESSION['flash_message']);
                            ?>
                        </div>
                    <?php endif; ?>
                    
                    <?php if (isset($_SESSION['success'])): ?>
                        <div class="alert alert-success">
                            <?php
                                echo $_SESSION['success'];
                                unset($_SESSION['success']);
                            ?>
                        </div>
                    <?php endif; ?>
                    
                    <?php if (isset($_SESSION['error'])): ?>
                        <div class="alert alert-danger">
                            <?php
                                echo $_SESSION['error'];
                                unset($_SESSION['error']);
                            ?>
                        </div>
                    <?php endif; ?>

                    <form action="/login" method="POST">

                        <!-- Phone -->
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="phone"
                                class="form-control"
                                id="phone"
                                name="phone"
                                placeholder="e.g. 017XXXXXXXX"
                                required>
                            <div class="form-text">Must be 11 digits.</div>
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password"
                                class="form-control"
                                id="password"
                                name="password"
                                placeholder="Enter password"
                                minlength="6"
                                required>
                        </div>



                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary w-100 py-2">Login</button>

                        <p class="text-center mt-3 mb-0">
                            Don't have an account?
                            <a href="/register" class="text-decoration-none">Register</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    console.log("Login Page");
</script>