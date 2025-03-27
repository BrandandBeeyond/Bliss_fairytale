<?php
session_start();
if (!isset($_SESSION['email'])) {
    echo "<script>window.open('login.php','_self')</script>";
    exit();
}

if (isset($_GET['edithomeopathy'])) {
    $id = intval($_GET['edithomeopathy']);
    $getHomeopathySql = "SELECT * FROM homeopathy WHERE id='$id'";
    $getHomeopathy = mysqli_query($conn, $getHomeopathySql);

    if ($getHomeopathy && mysqli_num_rows($getHomeopathy) > 0) {
        $getHomeopathyRow = mysqli_fetch_assoc($getHomeopathy);

        // Fetch data from the database
        $aboutHomeopathy = $getHomeopathyRow['about_homeopathy'];
        ?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Manage Homeopathy</title>
        </head>

        <body>
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">

                        <!-- Start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Manage Homeopathy</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Edit Homeopathy</li>
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
                                                <!-- About Homeopathy -->
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="description">About Homeopathy</label>
                                                        <textarea name="about_homeopathy" id="description" class="form-control ckeditor" rows="5"><?php echo htmlspecialchars($aboutHomeopathy); ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Submit Button -->
                                            <button type="submit" name="updatehomeopathy" class="btn btn-primary">
                                                <i class="fa fa-edit"></i>&nbsp; Update
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php editHomeopathy(); ?>
                    </div>
                </div>
            </div>
        </body>

        </html>

        <?php
    } else {
        echo "<script>alert('Invalid Homeopathy ID.')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
}
?>
