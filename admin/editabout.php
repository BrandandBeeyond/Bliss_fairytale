<?php
	
	if(!isset($_SESSION['email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}
	else{
		if(isset($_GET['editaboutus'])){
			
 			$aboutusId = $_GET['editaboutus'];
			$getAboutSql = "SELECT * FROM aboutus WHERE id='$aboutusId'";
			$getAbout = mysqli_query($conn,$getAboutSql);
			$getAboutRow = mysqli_fetch_array($getAbout);
			$aboutDesc = $getAboutRow['about_desc'];
            $aboutVision = $getAboutRow['vision'];
            $aboutMission = $getAboutRow['mission'];
            $clinicimage = $getAboutRow['clinic_image'];
            

            // $servicesheaderImage = $getprojectRow['servicesheaderImage'];
?>

    <title>Manage About Us</title>
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Manage About Us</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Add About Us</li>
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
                                <h4 class="card-title">Manage About Us</h4>
                                <!-- <p class="card-title-desc">Provide valuable, actionable feedback to your users with HTML5 form validation–available in all our supported browsers.</p> -->
                                <form class="needs-validation" novalidate method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom01">About description</label>
                                                <textarea name="about_desc" id="aboutVision-text"
                                                class="ckeditor"><?php echo htmlspecialchars($aboutDesc); ?></textarea>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom01">About image</label>
                                                <input type="file" class="form-control" id="formGroupExampleInput"
                                                        name="clinicimage1" value="<?php echo $clinicimage; ?>"><img
                                                        src="<?php echo 'resources/about_img/' . $clinicimage; ?>" width="150"
                                                        height="150">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom02">mission</label>
                                                <textarea name="mission" id="aboutVision-text"
                                                class="ckeditor"><?php echo htmlspecialchars($aboutMission); ?></textarea>

                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom02">vision</label>
                                                <textarea name="vision" id="aboutVision-text"
                                                class="ckeditor"><?php echo htmlspecialchars($aboutVision); ?></textarea>

                                            </div>
                                        </div>
                                    </div>
                                   
                                    <!-- <button class="btn btn-primary" type="submit" name="">Submit form</button> -->


                                    <button type="submit" name="updateAbout" class="btn btn-primary">
                                            <i class="fa fa-edit"></i>&nbsp; Update
                                        </button>
                                </form>
                            </div>
                        </div>
                        <!-- end card -->
                    </div> <!-- end col -->
                </div>

                <?php
                editAbout();
}
?>

            
            <!-- <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script> -->
             <?php }?>