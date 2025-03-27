<?php

if (!isset($_SESSION['email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {
    ?>
    <title>Add Admin</title>
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Add New Admin</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Add Admin</li>
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
                                                <label class="form-label" for="validationCustom01">Admin Name</label>
                                                <input type="text" class="form-control" id="validationCustom01"
                                                    placeholder="Admin Name" required name="adminName">

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom02">Admin Email</label>
                                                <input type="text" class="form-control" id="validationCustom02"
                                                    placeholder="Admin Email" required name="adminEmail">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom03">Admin Password</label>
                                                <input type="text" class="form-control" id="validationCustom03"
                                                    placeholder="Password" required name="adminPass">

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom04">Confirm Password</label>
                                                <input type="text" class="form-control" id="validationCustom04"
                                                    placeholder="Confirm Password" required name="adminCPass">

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom05">Admin Contact</label>
                                                <input type="text" class="form-control" id="validationCustom05"
                                                    placeholder="Contact" required name="adminPNo">

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom05">Admin Image</label>
                                                <input type="file" class="form-control" id="validationCustom05"
                                                    placeholder="Image" required name="adminimg1">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="invalidCheck"
                                                        required name="admin">
                                                    <label class="form-check-label" for="invalidCheck">Agree to terms and
                                                        conditions</label>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <button class="btn btn-primary" type="submit" name="">Submit form</button> -->


                                    <?php if (isset($_REQUEST['e'])) { ?>
                                        <button type="submit" name="update" class="btn btn-primary"><i
                                                class="fa fa-edit"></i>&nbsp;Update</button>
                                    <?php } else { ?>
                                        <button type="submit" name="addnewadmin" class="btn btn-primary"><i
                                                class="fa fa-check"></i>&nbsp;Submit</button>
                                    <?php } ?>
                                </form>
                            </div>
                        </div>
                        <!-- end card -->
                    </div> <!-- end col -->
                </div>

                <?php
                addNewAdmin();
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
                                        <th>NO</th>
                                        <th>User Name</th>
                                        <th> Email</th>
                                        <th>Password</th>
                                        <th>Image</th>
                                        <th>Contact</th>
                                        <th>Actioin</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <?php viewAdmin(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>