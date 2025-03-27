<?php

// Redirect to login if not authenticated
if (!isset($_SESSION['email'])) {
    echo "<script>window.open('login.php','_self')</script>";
    exit();
}

?>

<title>Manage Homeopathy Page</title>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- Start Page Title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Manage Homeopathy Page</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Why Us</li>
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
                            <form class="needs-validation" novalidate method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom01">About Homeopathy</label>
                                            <textarea name="about_homeopathy" id="aboutVision-text"
                                                class="ckeditor"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <?php if (isset($_REQUEST['e'])) { ?>
                                    <button type="submit" name="editTestimonial" class="btn btn-primary">
                                        <i class="fa fa-edit"></i>&nbsp;Update
                                    </button>
                                <?php } else { ?>
                                    <button type="submit" name="addHomeopathy" class="btn btn-primary">
                                        <i class="fa fa-check"></i>&nbsp;Submit
                                    </button>
                                <?php } ?>
                            </form>

                            <!-- Key Features and How It Works Section -->
                            <div class="row mt-5">
                                <div class="col-lg-5">
                                    <div class="d-flex flex-row align-items-center gap-3">
                                        <h4 class="text-dark mb-0">Key Features</h4>
                                        <a class="btn btn-sm btn-dark" href="index.php?addkeyfeatures">+ Add</a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="d-flex flex-row align-items-center gap-3">
                                        <h4 class="text-dark mb-0">How It Works</h4>
                                        <a class="btn btn-sm btn-dark" href="index.php?addhowitworks">+ Add</a>
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
                            <h4 class="card-title">about homeopathy</h4>
                        </div>
                        <div class="card-body">
                            <table id="datatable-buttons"
                                class="table table-striped table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>About Homeopathy</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php viewHomeopathy(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Key features </h4>
                        </div>
                        <div class="card-body">
                            <table id="datatable-buttons"
                                class="table table-striped table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>heading</th>
                                        <th>description</th>
                                        <th>aos animation</th>
                                        <th>aos offset</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php viewKeyFeatures(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">how it works</h4>
                        </div>
                        <div class="card-body">
                            <table id="datatable-buttons"
                                class="table table-striped table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>heading</th>
                                        <th>description</th>
                                        <th>aos animation</th>
                                        <th>aos offset</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php viewHowitWorks(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>