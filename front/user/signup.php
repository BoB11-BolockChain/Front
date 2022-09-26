<!--

=========================================================
* Neumorphism UI - v1.0.0
=========================================================

* Product Page: https://themesberg.com/product/ui-kits/neumorphism-ui
* Copyright 2020 Themesberg MIT LICENSE (https://www.themesberg.com/licensing#mit)

* Coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Primary Meta Tags -->
<title>Neumorphism UI - Sign up</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="title" content="Neumorphism UI - Sign up">
<meta name="author" content="PDxF-Soojeong">

<!-- Fontawesome -->
<!-- <link type="text/css" href="../../vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet"> -->

<!-- Pixel CSS -->
<link type="text/css" href="../css/neumorphism.css" rel="stylesheet">

<!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

</head>

<body>
    <main>
        <!-- Section -->
        <section class="min-vh-100 d-flex bg-primary align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-6 justify-content-center">
                        <div class="card bg-primary shadow-soft border-light p-4">
                            <div class="card-header text-center pb-0">
                                <h2 class="mb-0 h5">Create Account</h2>                               
                            </div>
                            <div class="card-body">
                                <form action="./signup_chk.php", method="POST" class="mt-4">
                                    <!-- Form -->
                                    <div class="form-group">
                                        <label for="exampleInputIcon4">Your email</label>
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><span class="fas fa-envelope"></span></span>
                                            </div>
                                            <input name="email" class="form-control" id="exampleInputIcon4" placeholder="example@company.com" type="text" aria-label="email adress">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputIcon4">Your ID</label>
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><span class="fas fa-envelope"></span></span>
                                            </div>
                                            <input name="id" class="form-control" id="" placeholder="Id" type="text" aria-label="id">
                                        </div>
                                    </div>
                                    <!-- End of Form -->
                                    <div class="form-group">
                                        <!-- Form -->
                                        <div class="form-group">
                                            <label for="exampleInputPassword7">Password</label>
                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><span class="fas fa-unlock-alt"></span></span>
                                                </div>
                                                <input name="pw" class="form-control" id="exampleInputPassword7" placeholder="Password" type="password" aria-label="Password" required>
                                            </div>
                                        </div>
                                        <!-- End of Form -->
                                        <!-- Form -->
                                        <div class="form-group">
                                            <label for="exampleConfirmPassword7">Confirm Password</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><span class="fas fa-unlock-alt"></span></span>
                                                </div>
                                                <input name="conpw" class="form-control" id="exampleConfirmPassword7" placeholder="Confirm password" type="password" aria-label="Password" required>
                                            </div>
                                        </div>
                                        <!-- End of Form -->
                                        <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck6">
                                            <label class="form-check-label" for="defaultCheck6">
                                                I agree to the <a href="#">terms and conditions</a>
                                            </label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-block btn-primary">Sign Up</button>
                                </form>
                
                                <div class="d-block d-sm-flex justify-content-center align-items-center mt-4">
                                    <span class="font-weight-normal">
                                        Already have an account?
                                        <a href="./signin.php" class="font-weight-bold">Login here</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Core -->
<script src="../../vendor/jquery/dist/jquery.min.js"></script>
<script src="../../vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="../../vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../../vendor/headroom.js/dist/headroom.min.js"></script>

<!-- Vendor JS -->
<script src="../../vendor/onscreen/dist/on-screen.umd.min.js"></script>
<script src="../../vendor/nouislider/distribute/nouislider.min.js"></script>
<script src="../../vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="../../vendor/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="../../vendor/jarallax/dist/jarallax.min.js"></script>
<script src="../../vendor/jquery.counterup/jquery.counterup.min.js"></script>
<script src="../../vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
<script src="../../vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
<script src="../../vendor/prismjs/prism.js"></script>

<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Neumorphism JS -->
<script src="../../assets/js/neumorphism.js"></script>
</body>

</html>