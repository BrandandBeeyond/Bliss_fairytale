<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <!-- <title>Dashboard | Upzet - Admin & Dashboard Template</title> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="resources/logo-sm.png">
    <link href="assets/libs/quill/quill.core.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/quill/quill.snow.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />

    <!-- jvectormap -->
    <link href="assets/libs/jqvmap/jqvmap.min.css" rel="stylesheet" />
    <link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />     
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />     
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <title>strata care | ADMIN</title>

</head>
<?php
if (!isset($_SESSION['email'])) {
    echo "<script>window.open('login.php', '_self')</script>";
} else {
    $currentUser = $_SESSION['email'];

    // Check if the user is a superadmin
    $superAdminSql = "SELECT * FROM superadmin WHERE adminEmail ='$currentUser'";
    $superAdminResult = mysqli_query($connF, $superAdminSql);

    if (mysqli_num_rows($superAdminResult) == 1) {
        $superAdminDetails = mysqli_fetch_array($superAdminResult);
        $adminName = $superAdminDetails['adminName'];
        $adminPhoto = $superAdminDetails['adminPhoto'];
    } else {
        // If not a superadmin, check the admin table
        $adminSql = "SELECT * FROM admin WHERE adminEmail ='$currentUser'";
        $adminResult = mysqli_query($connF, $adminSql);
        $adminDetailsRow = mysqli_fetch_array($adminResult);
        
        $adminName = $adminDetailsRow['adminName'];
        $adminPhoto = $adminDetailsRow['adminPhoto'];
    }

    echo "$adminName";

?>

<body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

<!-- Begin page -->
<div id="layout-wrapper">

    
<header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box text-center">
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="resources/logo-sm.png" alt="logo-sm-dark" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-dark.png" alt="logo-dark" height="24">
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="resources/strata-logo-mini.png" alt="logo-sm-light" height="30">
                        </span>
                        <span class="logo-lg">
                            <img src="resources/strata-logo.png" alt="logo-light" height="60">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                    <i class="ri-menu-2-line align-middle"></i>
                </button>

                <!-- App Search-->
                <form class="app-search d-none d-lg-block">
                    <div class="position-relative">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="ri-search-line"></span>
                    </div>
                </form>
            </div>

            <div class="d-flex">

                <div class="dropdown d-inline-block d-lg-none ms-2">
                    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ri-search-line"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                        aria-labelledby="page-header-search-dropdown">

                        <form class="p-3">
                            <div class="mb-3 m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ...">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"><i
                                                class="ri-search-line"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                

                

                <div class="dropdown d-none d-lg-inline-block ms-1">
                    <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                        <i class="ri-fullscreen-line"></i>
                    </button>
                </div>

                

                <div class="dropdown d-inline-block user-dropdown">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="<?php echo 'resources/admin_img/'.$adminPhoto;?>" alt="Header Avatar">
                        <span class="d-none d-xl-inline-block ms-1"><?php echo $adminName;?></span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item" href="#"><i class="ri-user-line align-middle me-1"></i> Profile</a>
                        <a class="dropdown-item" href="#"><i class="ri-wallet-2-line align-middle me-1"></i> My Wallet</a>
                        <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end mt-1">11</span><i
                                class="ri-settings-2-line align-middle me-1"></i> Settings</a>
                        <a class="dropdown-item" href="#"><i class="ri-lock-unlock-line align-middle me-1"></i> Lock
                            screen</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="logout.php"><i
                                class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                    </div>
                </div>

                

            </div>
        </div>
    </header>
<?php }?>