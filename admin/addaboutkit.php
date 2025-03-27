<?php

// Redirect to login if not authenticated
if (!isset($_SESSION['email'])) {
    echo "<script>window.open('login.php','_self')</script>";
    exit();
}

?>

<title>Manage kit Page</title>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- Start Page Title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Manage kit Page</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">kit page</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Page Title -->

            <!-- Form Section -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">


                            <!-- Key Features and How It Works Section -->
                            <div class="row mt-5">
                                <div class="col-lg-5">
                                    <div class="d-flex flex-row align-items-center gap-3">
                                        <h4 class="text-dark mb-0">add why our kit musthave</h4>
                                        <a class="btn btn-sm btn-dark" href="index.php?addwhyourkit">+ Add</a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="d-flex flex-row align-items-center gap-3">
                                        <h4 class="text-dark mb-0">add medikits</h4>
                                        <a class="btn btn-sm btn-dark" href="index.php?addmedikit">+ Add</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Form Section -->

            <?php addHomeopathy(); ?>

            <!-- Data Table -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"> why our kit musthave</h4>
                        </div>
                        <div class="card-body">
                            <table id="datatable-buttons"
                                class="table table-striped table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>answer</th>
                                        <th>aos animation</th>
                                        <th>aos offset</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php viewWhyOurkit(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">our medikits</h4>
                        </div>
                        <div class="card-body">
                            <table id="datatable-buttons"
                                class="table table-striped table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>medikit id</th>
                                        <th>kit name</th>
                                        <th>kit Description</th>
                                        <th>price</th>
                                        <th>kit Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <?php viewMedikits(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
</div>