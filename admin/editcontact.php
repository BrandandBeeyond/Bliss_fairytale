<?php

if (!isset($_SESSION['email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {
    if (isset($_GET['editcontact'])) {

        $contactId = $_GET['editcontact'];
        $getcontactSql = "SELECT * FROM contactus WHERE id='$contactId'";
        $getcontact = mysqli_query($conn, $getcontactSql);
        $getcontactRow = mysqli_fetch_array($getcontact);

        $contactAddress = $getcontactRow['contact_address'];
        $contactEmail_1 = $getcontactRow['contact_email1'];
        $contactEmail_2 = $getcontactRow['contact_email2'];
        $contactNum_1 = $getcontactRow['contact_num1'];
        $contactNum_2 = $getcontactRow['contact_num2'];
        $working_hours = $getcontactRow['working_hours'];


        ?>
        <title>Edit Contact</title>
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Edit Contact</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Edit Contact</li>
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
                                    <h4 class="card-title">Edit Contact</h4>
                                    <form class="needs-validation" novalidate method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="validationCustom02">Contact No. 1</label>
                                                    <input type="text" class="form-control" id="validationCustom02"
                                                        placeholder="Contact No 1" required name="contact_num1"
                                                        value="<?php echo $contactNum_1; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="validationCustom03">Contact No 2</label>
                                                    <input type="text" class="form-control" id="validationCustom03"
                                                        placeholder="Contact No 2" name="contact_num2"
                                                        value="<?php echo $contactNum_2; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label" for="validationCustom05">Email 1</label>
                                                    <input type="email" class="form-control" id="validationCustom05"
                                                        placeholder="Email 1" required name="contact_email1"
                                                        value="<?php echo $contactEmail_1; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label" for="validationCustom05">Email 2</label>
                                                    <input type="email" class="form-control" id="validationCustom05"
                                                        placeholder="Email 2" name="contact_email2"
                                                        value="<?php echo $contactEmail_2; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label" for="validationCustom05">Working hours</label>
                                                    <input type="text" class="form-control" id="validationCustom05"
                                                        placeholder="working hours" name="working_hours"
                                                        value="<?php echo $working_hours; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label" for="validationCustom05">Address</label>
                                                    <textarea class="form-control ckeditor"
                                                        name="contact_address"><?php echo $contactAddress; ?></textarea>
                                                </div>
                                            </div>
                                        </div>

                                      

                                       
                                        

                                        <?php if (isset($_REQUEST['e'])) { ?>
                                            <!-- <button type="submit" name="update" class="btn btn-primary">
                                        <i class="fa fa-edit"></i>&nbsp;Update
                                    </button> -->
                                        <?php } else { ?>
                                            <button type="submit" name="updatecontact" class="btn btn-primary">
                                                <i class="fa fa-edit"></i>&nbsp;Update
                                            </button>
                                        <?php } ?>
                                    </form>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                    <?php updateContact(); ?>
                </div> <!-- end container-fluid -->


            </div> <!-- end page-content -->
        </div> <!-- end main-content -->

        <?php
    }
}
?>