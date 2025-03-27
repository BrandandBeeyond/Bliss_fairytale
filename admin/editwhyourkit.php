<?php
if (!isset($_SESSION['email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {
    if (isset($_GET['editwhyourkit'])) {

        $kitId = $_GET['editwhyourkit'];
        $getKitSql = "SELECT * FROM whyourkit WHERE id='$kitId'";
        $getKit = mysqli_query($conn, $getKitSql);
        $getKitRow = mysqli_fetch_array($getKit);

        // Fetch data from the database
        $answer = $getKitRow['answer'];
        $aos_animation = $getKitRow['aos_animation'];
        $aos_offset = $getKitRow['aos_offset'];
       
        ?>

        <title>Manage why our kit</title>
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    <!-- Start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Manage why our kit</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Edit why our kit</li>
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
                                                    <label class="form-label" for="patientname">answer</label>
                                                    <textarea name="answer" id="servicedesc" class="form-control ckeditor"
                                                    rows="5"><?php echo htmlspecialchars($answer); ?></textarea>
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
                                           
                                        </div>

                                        <!-- Submit Button -->
                                        <button type="submit" name="updatewhyourkit" class="btn btn-primary">
                                            <i class="fa fa-edit"></i>&nbsp; Update
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php editWhyourkit(); ?>
                </div>
            </div>
        </div>

        <?php
    }
}
?>