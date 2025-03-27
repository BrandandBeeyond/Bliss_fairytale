<?php
session_start();
include("include/dbcon.php");
include("include/function.php");
?>

<head>

    <meta charset="utf-8" />
    <title>Register | strata - Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="resources/strata-logo-sm.png">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>




<body class="bg-pattern">
    <div class="bg-overlay"></div>
    <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-8">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="">
                                <div class="text-center">
                                    <a href="index.php" class="">
                                        <img src="assets/images/strata-logo.png" alt="" height="50"
                                            class="auth-logo logo-dark mx-auto">
                                        <img src="assets/images/strata-logo.png" alt="" height="50"
                                            class="auth-logo logo-light mx-auto">
                                    </a>
                                </div>
                                <!-- end row -->
                                <h4 class="font-size-18 text-muted my-3 pb-4 text-center">Create superadmin account now !
                                </h4>
                               
                                <form class="needs-validation" novalidate method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Superadmin Name</label>
                                                <input type="text" class="form-control" placeholder="Superadmin Name"
                                                    required name="adminName">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Superadmin Email</label>
                                                <input type="text" class="form-control" placeholder="Superadmin Email"
                                                    required name="adminEmail">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Password</label>
                                                <input type="password" class="form-control" placeholder="Password"
                                                    required name="adminPass">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Confirm Password</label>
                                                <input type="password" class="form-control"
                                                    placeholder="Confirm Password" required name="adminCPass">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Contact Number</label>
                                                <input type="text" class="form-control" placeholder="Contact Number"
                                                    required name="adminPNo">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Superadmin Image</label>
                                                <input type="file" class="form-control" required name="adminimg1">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" name="addsuperadmin" class="btn btn-primary">Submit</button>
                                </form>

                                <?php
                                addSuperAdmin();
                                ?>

                            </div>
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <p class="text-white-50">Allready have an account ? <a href="login.php"
                                class="fw-medium text-primary"> Login </a> </p>

                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>
    <!-- end Account pages -->

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <script src="assets/js/app.js"></script>

</body>

</html>