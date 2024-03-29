<?php include_once "template/header.php"; ?>
    <section class="main container ">
        <div class="row min-vh-100 justify-content-center align-items-center">
            <div class="col-12 col-mg-6 col-lg-5">
                <div class="my-5">

                    <div class="border bg-white rounded-lg shadow-sm">
                        <div class="p-4">
                            <h2 class="text-center font-weight-normal">Create Account</h2>
                            <p class="text-center text-black-50 mb-4 ">
                                Already have an account?
                                <a href="login.php">Sign in here</a>
                            </p>
                            <a href="#" class="btn btn-lg btn-outline-secondary w-100">
                                <i class="feather-log-in"></i>
                                Sign in with Google
                            </a>
                            <hr class="mb-5">

                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-12">
                                        <label>Full Name</label>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <input type="text" name="fname" class="form-control form-control-lg" placeholder="First Name" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">

                                            <input type="text" name="lname" class="form-control form-control-lg" placeholder="Last Name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control form-control-lg" required>
                                </div>
                                <div class="mb-3">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control form-control-lg" required>
                                </div>
                                <div class="mb-3">
                                    <label>Confirm Password</label>
                                    <input type="password" name="password_confirmation" class="form-control form-control-lg" required>
                                </div>
                                <div class="mb-3 mb-5">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="termsCheckbox" name="termsCheckbox">
                                        <label class="custom-control-label text-muted" for="termsCheckbox">
                                            I accept the <a href="#">Terms and Conditions</a>
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-lg w-100 btn-primary" name="register">Sign Up</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include_once "template/footer.php"; ?>