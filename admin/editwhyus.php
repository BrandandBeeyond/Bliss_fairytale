<?php
if (!isset($_SESSION['email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {
    if (isset($_GET['editwhyus'])) {

        $whyusId = $_GET['editwhyus'];
        $getWhyUsSql = "SELECT * FROM whychooseus WHERE id='$whyusId'";
        $getWhyUs = mysqli_query($conn, $getWhyUsSql);
        $getWhyUsRow = mysqli_fetch_array($getWhyUs);

        // Fetch data from the database
        $heading = $getWhyUsRow['heading'];
        $description = $getWhyUsRow['description'];
        $aos_animation = $getWhyUsRow['aos_animation'];
        $aos_offset = $getWhyUsRow['aos_offset'];
        $icon = $getWhyUsRow['icon'];
        ?>

        <title>Manage Services</title>
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    <!-- Start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Manage why choose us</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Edit why us</li>
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
                                                    <label class="form-label" for="patientname">Heading</label>
                                                    <input type="text" class="form-control" id="patientname"
                                                        placeholder="service Name" name="heading"
                                                        value="<?php echo htmlspecialchars($heading); ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="patientname">icon</label>
                                                    <input type="file" class="form-control" id="formGroupExampleInput"
                                                        name="icon1" value="<?php echo $icon; ?>"><img
                                                        src="<?php echo 'resources/why_image/' . $icon; ?>" width="70"
                                                        height="70">
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
                                                    <label class="form-label" for="description"> description</label>
                                                    <textarea name="description" id="description" class="form-control ckeditor"
                                                        rows="5"><?php echo htmlspecialchars($description); ?></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Submit Button -->
                                        <button type="submit" name="updateWhyus" class="btn btn-primary">
                                            <i class="fa fa-edit"></i>&nbsp; Update
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php editWhyChooseUs(); ?>
                </div>
            </div>
        </div>

        <?php
    }
}
?>