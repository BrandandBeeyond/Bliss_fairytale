<?php

if (!isset($_SESSION['email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {
    ?>
    <title>Add services</title>
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Add New Services</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Add services</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                               
                                <!-- <p class="card-title-desc">Provide valuable, actionable feedback to your users with HTML5 form validation–available in all our supported browsers.</p> -->
                                <form class="needs-validation" novalidate method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom01">Service name</label>
                                                <input type="text" class="form-control" id="validationCustom01"
                                                    placeholder="Service Name" required name="servicename">

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom01">Service image</label>
                                                <input type="file" class="form-control" id="validationCustom01"
                                                    placeholder="Patient Name" required name="serviceimage1">

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom01">AOS animation</label>
                                                <input type="texts" class="form-control" id="validationCustom01"
                                                    placeholder="aos animation" required name="aos_animation">

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom01">AOS offset</label>
                                                <input type="number" class="form-control" id="validationCustom01"
                                                    placeholder="aos offset" required name="aos_offset">

                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom02">Service description</label>
                                                <textarea name="servicedesc" id="aboutVision-text"
                                                class="ckeditor"></textarea>

                                            </div>
                                        </div>
                                    </div>
                                   
                                    <!-- <button class="btn btn-primary" type="submit" name="">Submit form</button> -->


                                    <?php if (isset($_REQUEST['e'])) { ?>
                                        <button type="submit" name="editTestimonial" class="btn btn-primary"><i
                                                class="fa fa-edit"></i>&nbsp;Update</button>
                                    <?php } else { ?>
                                        <button type="submit" name="addservice" class="btn btn-primary"><i
                                                class="fa fa-check"></i>&nbsp;Submit</button>
                                    <?php } ?>
                                </form>
                            </div>
                        </div>
                        <!-- end card -->
                    </div> <!-- end col -->
                </div>

                <?php
                addServices();
}
?>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                       
 
                            <table id="datatable-buttons"
                                class="table table-striped table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Service id</th>
                                        <th>Service Name</th>
                                        <th>Service Description</th>
                                        <th>AOS animation</th>
                                        <th>AOS offset</th>
                                        <th>Service Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <?php viewServices(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>