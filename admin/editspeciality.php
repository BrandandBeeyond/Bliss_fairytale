<?php
if (!isset($_SESSION['email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {
    if (isset($_GET['editspeciality'])) {
        
        $specialityId = $_GET['editspeciality'];
        $getSpecialitySql = "SELECT * FROM specialities WHERE id='$specialityId'";
        $getSpeciality = mysqli_query($conn, $getSpecialitySql);
        $getSpecialityRow = mysqli_fetch_array($getSpeciality);
        
        // Fetch data from the database
        $specialityname = $getSpecialityRow['specialityname'];
        $aos_animation = $getSpecialityRow['aos_animation'];
        $aos_offset = $getSpecialityRow['aos_offset'];
?>

<title>Manage Specialities</title>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- Start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Manage Specialities</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Edit Specialities</li>
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
                                    <div class="col-md-8">
                                        <div class="mb-3">
                                            <label class="form-label" for="specialityname">Speciality Name</label>
                                            <input type="text" class="form-control" id="specialityname"
                                                placeholder="Speciality Name" name="specialityname"
                                                value="<?php echo htmlspecialchars($specialityname); ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="validationCustom02">aos animation</label>
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        placeholder="aos animation" required name="aos_animation"  value="<?php echo htmlspecialchars($aos_animation); ?>">

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="validationCustom02">aos offset</label>
                                                    <input type="number" class="form-control" id="validationCustom01"
                                                        placeholder="aos offset" required name="aos_offset"  value="<?php echo htmlspecialchars(string: $aos_offset); ?>">

                                                </div>
                                            </div>
                                   
                                </div>

                                <!-- Submit Button -->
                                <button type="submit" name="updatespeciality" class="btn btn-primary">
                                    <i class="fa fa-edit"></i>&nbsp; Update
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <?php editSpecialities(); ?>
        </div>
    </div>
</div>

<?php
    }
}
?>
