<head>

    <meta charset="utf-8" />
    <title>Login | Upzet - Admin & Dashboard Template</title>
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
<?php
error_reporting(-1);
ini_set('display_errors', 1);
session_start();
include("include/dbcon.php");
include("include/md5salt.php");
$wrongpass = "";
?>

<?php
// if (isset($_POST['adminLogin'])) {
//     $email = mysqli_real_escape_string($conn, $_POST['email']);
//     $pass = md5($_POST['password']);

//     // Check superadmin table
//     $sqlSuperAdmin = "SELECT * FROM superadmin WHERE adminEmail='$email' AND adminPassword='$pass'";
//     $resultSuperAdmin = mysqli_query($conn, $sqlSuperAdmin);

//     // Check admin table if no match found in superadmin
//     if (mysqli_num_rows($resultSuperAdmin) == 1) {
//         $_SESSION['email'] = $email;
//         $_SESSION['role'] = 'superadmin';
//         echo "<script>window.open('index.php?dashboard', '_self')</script>";
//     } else {
//         // Check admin table if no match in superadmin
//         $sqlAdmin = "SELECT * FROM admin WHERE adminEmail='$email' AND adminPassword='$pass'";
//         $resultAdmin = mysqli_query($conn, $sqlAdmin);

//         if (mysqli_num_rows($resultAdmin) == 1) {
//             $_SESSION['email'] = $email;
//             $_SESSION['role'] = 'admin';
//             echo "<script>window.open('index.php?dashboard', '_self')</script>";
//         } else {
//             $wrongpass = "Invalid Email/Password!<br>Something wrong? Contact Root Administrator";
//         }
//     }
// }

if (isset($_POST['adminLogin'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);

    // Check superadmin table
    $sqlSuperAdmin = "SELECT * FROM superadmin WHERE adminEmail='$email' AND adminPassword='$pass'";
    $resultSuperAdmin = mysqli_query($conn, $sqlSuperAdmin);

    if (mysqli_num_rows($resultSuperAdmin) == 1) {
        $superadmin = mysqli_fetch_assoc($resultSuperAdmin);

        if ($superadmin['status'] === 'approved') {
            $_SESSION['email'] = $email;
        
            echo "<script>window.open('index.php?dashboard', '_self')</script>";
        } elseif ($superadmin['status'] === 'pending') {
            echo "<script>alert('Your registration is still pending approval. Please contact the administrator.');</script>";
        } elseif ($superadmin['status'] === 'rejected') {
            echo "<script>alert('Your registration has been rejected by the superadmin. Contact the administrator for details.');</script>";
        }
    } else {
        // Check admin table if no match in superadmin
        $sqlAdmin = "SELECT * FROM admin WHERE adminEmail='$email' AND adminPassword='$pass'";
        $resultAdmin = mysqli_query($conn, $sqlAdmin);

        if (mysqli_num_rows($resultAdmin) == 1) {
            $_SESSION['email'] = $email;
            $_SESSION['role'] = 'admin';
            echo "<script>alert('Login successful. Welcome Admin!');</script>";
            echo "<script>window.open('index.php?dashboard', '_self')</script>";
        } else {
            echo "<script>alert('Invalid Email/Password! Something wrong? Contact Root Administrator.');</script>";
        }
    }
}

?>


<body class="bg-pattern">
    <div class="bg-overlay"></div>
    <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-8">
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
                                <h4 class="font-size-18 text-muted mt-2 text-center">Welcome Back !</h4>
                                <p class="mb-5 text-center">Sign in to continue to admin panel.</p>
                                <form class="form-horizontal" method="post" id="login-form">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-4">
                                                <label class="form-label" for="username">email</label>
                                                <input type="text" class="form-control" name="email"
                                                    placeholder="Enter email">
                                            </div>
                                            <div class="mb-4">
                                                <label class="form-label" for="userpassword">Password</label>
                                                <input type="password" class="form-control" name="password"
                                                    placeholder="Enter password">
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customControlInline">
                                                        <label class="form-label" class="form-check-label"
                                                            for="customControlInline">Remember me</label>
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="text-md-end mt-3 mt-md-0">
                                                        <a href="auth-recoverpw.html" class="text-muted"><i
                                                                class="mdi mdi-lock"></i> Forgot your password?</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-grid mt-4">
                                                <button class="btn btn-primary waves-effect waves-light" type="submit"
                                                    name="adminLogin">Log In</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <p class="text-white-50">Don't have an account ? <a href="register.php"
                                class="fw-medium text-primary"> Register </a> </p>

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