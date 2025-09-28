<div class="container py-2">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body p-4">
                    <h3 class="text-center mb-4">Create an Account</h3>

                    <form action="/register" method="POST" id="registerForm">
                        <!-- Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text"
                                class="form-control"
                                id="name"
                                name="name"
                                placeholder="Enter your name"
                                required>
                        </div>

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

                        <!-- Confirm Password -->
                        <div class="mb-3">
                            <label for="confirm_password" class="form-label">Confirm Password</label>
                            <input type="password"
                                class="form-control"
                                id="confirm_password"
                                name="confirm_password"
                                placeholder="Confirm password"
                                minlength="6"
                                required>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary w-100 py-2">Register</button>

                        <p class="text-center mt-3 mb-0">
                            Already have an account?
                            <a href="/login" class="text-decoration-none">Login</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





<script>
    
    const regForm = document.getElementById("registerForm");


    regForm.addEventListener("submit", function(e) {


        const name = document.getElementById("name").value.trim();
        if (name.length < 3) {
            e.preventDefault();
            alert("Name must be at least 3 characters long.");
            return;
        }


        const phone = document.getElementById("phone").value;
        if (phone.length < 11) {
            e.preventDefault();
            alert("Phone number must be exactly 11 digits.");
            return;
        }

        


        const pass = document.getElementById("password").value;
        const confirm = document.getElementById("confirm_password").value;
        if (pass !== confirm) {
            e.preventDefault();
            alert("Passwords do not match!");
        }
    });




</script>