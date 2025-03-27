<?php
if (!isset($_SESSION['email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {
    if (isset($_GET['editmedikit'])) {

        $medikitId = $_GET['editmedikit'];
        $getMedikitSql = "SELECT * FROM medikits WHERE id='$medikitId'";
        $getMeditkit = mysqli_query($conn, $getMedikitSql);
        $getMeditkitRow = mysqli_fetch_array($getMeditkit);

        // Fetch data from the database
        $kitname = $getMeditkitRow['kitname'];
        $kitdesc = $getMeditkitRow['kitdesc'];
        $price = $getMeditkitRow['price'];
        $kitimage = $getMeditkitRow['kitimage'];
        ?>

        <title>Manage Medikit</title>
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    <!-- Start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Manage Medikit</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Edit medikits</li>
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
                                                    <label class="form-label" for="patientname">kit Name</label>
                                                    <input type="text" class="form-control" id="patientname"
                                                        placeholder="kit Name" name="kitname"
                                                        value="<?php echo htmlspecialchars($kitname); ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="patientname">kit Image</label>
                                                    <input type="file" class="form-control" id="formGroupExampleInput"
                                                        name="kitimage1" value="<?php echo $kitimage; ?>"><img
                                                        src="<?php echo 'resources/kits_img/' . $kitimage; ?>" width="150"
                                                        height="150">
                                                </div>
                                            </div>
                                          
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="validationCustom01">price</label>
                                                    <input type="number" class="form-control" id="validationCustom01"
                                                        placeholder="aos offset" required name="price" value="<?php echo htmlspecialchars($price); ?>">

                                                </div>
                                            </div>
                                            <!-- Patient Feedback -->
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label" for="servicedesc">kit description</label>
                                                    <textarea name="kitdesc" id="servicedesc" class="form-control ckeditor"
                                                        rows="5"><?php echo htmlspecialchars($kitdesc); ?></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Submit Button -->
                                        <button type="submit" name="updatemedikit" class="btn btn-primary">
                                            <i class="fa fa-edit"></i>&nbsp; Update
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php editMedikit(); ?>
                </div>
            </div>
        </div>

        <?php
    }
}
?>