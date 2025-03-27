<?php
if (!isset($_SESSION['email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {
    if (isset($_GET['editService'])) {

        $serviceId = $_GET['editService'];
        $getServiceSql = "SELECT * FROM services WHERE id='$serviceId'";
        $getService = mysqli_query($conn, $getServiceSql);
        $getServiceRow = mysqli_fetch_array($getService);

        // Fetch data from the database
        $servicename = $getServiceRow['servicename'];
        $servicedesc = $getServiceRow['servicedesc'];
        $aos_animation = $getServiceRow['aos_animation'];
        $aos_offset = $getServiceRow['aos_offset'];
        $serviceimage = $getServiceRow['serviceimage'];
        ?>

        <title>Manage Services</title>
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    <!-- Start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Manage Services</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Edit Service</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End page title -->

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <form class="needs-validation" novalidate method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <!-- Patient Name -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="patientname">Service Name</label>
                                                    <input type="text" class="form-control" id="patientname"
                                                        placeholder="service Name" name="servicename"
                                                        value="<?php echo htmlspecialchars($servicename); ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="patientname">Service Images</label>
                                                    <input type="file" class="form-control" id="formGroupExampleInput"
                                                        name="serviceimage1" value="<?php echo $serviceimage; ?>"><img
                                                        src="<?php echo 'resources/service_img/' . $serviceimage; ?>" width="150"
                                                        height="150">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="validationCustom01">AOS animation</label>
                                                    <input type="texts" class="form-control" id="validationCustom01"
                                                        placeholder="aos animation" required name="aos_animation" value="<?php echo htmlspecialchars($aos_animation); ?>">

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="validationCustom01">AOS offset</label>
                                                    <input type="number" class="form-control" id="validationCustom01"
                                                        placeholder="aos offset" required name="aos_offset" value="<?php echo htmlspecialchars($aos_offset); ?>">

                                                </div>
                                            </div>
                                            <!-- Patient Feedback -->
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label" for="servicedesc">Service description</label>
                                                    <textarea name="servicedesc" id="servicedesc" class="form-control ckeditor"
                                                        rows="5"><?php echo htmlspecialchars($servicedesc); ?></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Submit Button -->
                                        <button type="submit" name="updateService" class="btn btn-primary">
                                            <i class="fa fa-edit"></i>&nbsp; Update
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php editServices(); ?>
                </div>
            </div>
        </div>

        <?php
    }
}
?>