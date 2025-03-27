<?php
if (!isset($_SESSION['email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {
    if (isset($_GET['editTestimonial'])) {
        
        $testimonialId = $_GET['editTestimonial'];
        $getTestimonialSql = "SELECT * FROM testimonials WHERE id='$testimonialId'";
        $getTestimonial = mysqli_query($conn, $getTestimonialSql);
        $getTestimonialRow = mysqli_fetch_array($getTestimonial);
        
        // Fetch data from the database
        $patientname = $getTestimonialRow['patientname'];
        $patientfeedback = $getTestimonialRow['patientfeedback'];
?>

<title>Manage Testimonials</title>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- Start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Manage Testimonials</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Edit Testimonial</li>
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
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="patientname">Patient Name</label>
                                            <input type="text" class="form-control" id="patientname"
                                                placeholder="Patient Name" name="patientname"
                                                value="<?php echo htmlspecialchars($patientname); ?>" required>
                                        </div>
                                    </div>

                                    <!-- Patient Feedback -->
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="patientfeedback">Patient Feedback</label>
                                            <textarea name="patientfeedback" id="patientfeedback"
                                                class="form-control ckeditor" rows="5"><?php echo htmlspecialchars($patientfeedback); ?></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <button type="submit" name="updateTestimonial" class="btn btn-primary">
                                    <i class="fa fa-edit"></i>&nbsp; Update
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <?php editTestimonials(); ?>
        </div>
    </div>
</div>

<?php
    }
}
?>
