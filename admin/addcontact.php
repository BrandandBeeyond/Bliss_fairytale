<?php
if (!isset($_SESSION['email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {
    ?>
    <title>Add Contact</title>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Add New Contact</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Add Contact</li>
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
                             
                                <form class="needs-validation" novalidate method="post" enctype="multipart/form-data">
                                    <div class="row gy-2">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom02">Contact No. 1</label>
                                                <input type="text" class="form-control" id="validationCustom02"
                                                    placeholder="Contact No 1" required name="contact_num1">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom03">Contact No 2</label>
                                                <input type="text" class="form-control" id="validationCustom03"
                                                    placeholder="Contact No 2" name="contact_num2">
                                            </div>
                                        </div>

                                        
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom05">Email 1</label>
                                                <input type="email" class="form-control" id="validationCustom05"
                                                    placeholder="Email 1" required name="contact_email1">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom05">Email 2</label>
                                                <input type="email" class="form-control" id="validationCustom05"
                                                    placeholder="Email 2" name="contact_email2">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom05">working hours</label>
                                                <input type="text" class="form-control" id="validationCustom05"
                                                    placeholder="working hours" name="working_hours">
                                            </div>
                                        </div>
                                      

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom05">Address</label>
                                                <textarea class="form-control ckeditor" name="contact_address"></textarea>
                                            </div>
                                        </div>


                                        <?php if (isset($_REQUEST['e'])) { ?>
                                            <button type="submit" name="update" class="btn btn-primary">
                                                <i class="fa fa-edit"></i>&nbsp;Update
                                            </button>
                                        <?php } else { ?>
                                            <button type="submit" name="addnewcontact" class="btn btn-primary">
                                                <i class="fa fa-check"></i>&nbsp;Submit
                                            </button>
                                        <?php } ?>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <?php addContactUs(); ?>
            </div> <!-- end container-fluid -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                          

                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>Address</th>
                                        <th>Email 1</th>
                                        <th>Email 2</th>
                                        <th>Contact 1</th>
                                        <th>Contact 2</th>
                                        <th>working hours</th>
                                     

                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php displayContactUs(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- end page-content -->
    </div> <!-- end main-content -->

    <?php
}
?>