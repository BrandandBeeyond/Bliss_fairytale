<?php

session_start();
include("include/dbcon.php");
include("include/function.php");
include("include/md5salt.php");

if (!isset($_SESSION['email'])) {
	echo "<script>window.open('login.php','_self')</script>";
}
//	else if(isset($_SESSION['email'])){
//		echo "<script>window.open('index.php?dashboard','_self')</script>";
//	}
else {
	?>
	<!doctype html>
	<html lang="en">

	<head>

		<meta charset="utf-8" />
		<!-- <title>Dashboard | Upzet - Admin & Dashboard Template</title> -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
		<meta content="Themesdesign" name="author" />
		<!-- App favicon -->
		<link rel="shortcut icon" href="resources/strata-logo-sm.png">

		<!-- jvectormap -->
		<link href="assets/libs/jqvmap/jqvmap.min.css" rel="stylesheet" />

		<!-- Bootstrap Css -->
		<link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
		<!-- Icons Css -->
		<link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
		<!-- App Css-->
		<link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

	</head>

	<body data-sidebar="dark">
		<?php include('header.php'); ?>
		<?php include('sidebar.php'); ?>
		<!-- ============================================================== -->
		<!-- Start right Content here -->
		<!-- ============================================================== -->

		<!-- End Page-content -->
		<?php
		if (isset($_GET['dashboard'])) {
			include("dashboard.php");
		}
		?>
		<?php
		if (isset($_GET['addaboutus'])) {
			include("addaboutus.php");
		}
		?>
		<?php
		if (isset($_GET['addhomeopathy'])) {
			include("addhomeopathy.php");
		}
		?>
		<?php
		if (isset($_GET['addkeyfeatures'])) {
			include("addkeyfeatures.php");
		}
		?>
		<?php
		if (isset($_GET['addhowitworks'])) {
			include("addhowitworks.php");
		}
		?>
		<?php
		if (isset($_GET['addcontact'])) {
			include("addcontact.php");
		}
		?>
		<?php
		if (isset($_GET['addprojectcategory'])) {
			include("addprojectcategory.php");
		}
		?>
		<?php
		if (isset($_GET['addproject'])) {
			include("addproject.php");
		}
		?>

		<?php
		if (isset($_GET['addclient'])) {
			include("addclient.php");
		}
		?>
		<?php
		if (isset($_GET['addhome'])) {
			include("addhome.php");
		}
		?>

		<?php
		if (isset($_GET['deleteProjectCat'])) {
			deleteProjectCat();
		}
		?>
		<?php
		if (isset($_GET['deleteProject'])) {
			deleteProject();
		}
		?>

		<?php
		if (isset($_GET['deleteClient'])) {
			deleteClient();
		}
		?>

		<?php
		if (isset($_GET['deleteAboutUs'])) {
			deleteAboutUs();
		}
		?>


		<?php
		if (isset($_GET['deleteVacancy'])) {
			deleteVacancy();
		}
		?>
		<?php
		if (isset($_GET['editproject'])) {
			include("editproject.php");
		}
		?>
		<?php
		if (isset($_GET['editTestimonial'])) {
			include("edittestimonial.php");
		}
		?>
		<?php
		if (isset($_GET['editfaqs'])) {
			include("editfaqs.php");
		}
		?>
		<?php
		if (isset($_GET['editService'])) {
			include("editservice.php");
		}
		?>
		<?php
		if (isset($_GET['edithomeopathy'])) {
			include("edithomeopathy.php");
		}
		?>
		<?php
		if (isset($_GET['editprojectcategory'])) {
			include("editprojectcategory.php");
		}
		?>
		<?php
		if (isset($_GET['editclient'])) {
			include("editclient.php");
		}
		?>

		<?php
		if (isset($_GET['editwhyus'])) {
			include("editwhyus.php");
		}
		?>
		<?php
		if (isset($_GET['editaboutus'])) {
			include("editabout.php");
		}
		?>
		<?php
		if (isset($_GET['editkeyfeatures'])) {
			include("editkeyfeatures.php");
		}
		?>
		<?php
		if (isset($_GET['edithowitworks'])) {
			include("edithowitworks.php");
		}
		?>
		<?php
		if (isset($_GET['editwhyourkit'])) {
			include("editwhyourkit.php");
		}
		?>
		<?php
		if (isset($_GET['editmedikit'])) {
			include("editmedikit.php");
		}
		?>
		<?php
		if (isset($_GET['editcontact'])) {
			include("editcontact.php");
		}
		?>
		<?php
		if (isset($_GET['editspeciality'])) {
			include("editspeciality.php");
		}
		?>
		<?php
		if (isset($_GET['editvacancy'])) {
			include("editvacancy.php");
		}
		?>

		<?php
		if (isset($_GET['addadmin'])) {
			include('addadmin.php');
		}
		?>
		<?php
		if (isset($_GET['addtestimonial'])) {
			include('addtestimonial.php');
		}
		?>
		<?php
		if (isset($_GET['addservices'])) {
			include('addservices.php');
		}
		?>
		<?php
		if (isset($_GET['addspeciality'])) {
			include('addspeciality.php');
		}
		?>
		<?php
		if (isset($_GET['addfaqs'])) {
			include('addfaqs.php');
		}
		?>
		<?php
		if (isset($_GET['addmedikit'])) {
			include('addmedikit.php');
		}
		?>
		<?php
		if (isset($_GET['addaboutkit'])) {
			include('addaboutkit.php');
		}
		?>
		<?php
		if (isset($_GET['addwhyourkit'])) {
			include('addwhyourkit.php');
		}
		?>
		<?php
		if (isset($_GET['managesuperadmins'])) {
			include('managesuperadmins.php');
		}
		?>
		<?php
		if (isset($_GET['appointment'])) {
			include('appointment.php');
		}
		?>
		<?php
		if (isset($_GET['adddirector'])) {
			include('adddirector.php');
		}
		?>
		<?php
		if (isset($_GET['viewadmins'])) {
			include('viewAdmin.php');
		}
		?>
		<?php
		if (isset($_GET['deleteAdmin'])) {
			deleteAdmin();
		}
		?>
		<?php
		if (isset($_GET['deleteAppointment'])) {
			deleteAppointment();
		}
		?>
		<?php
		if (isset($_GET['deleteTestimonial'])) {
			deleteTestimonial();
		}
		?>
		<?php
		if (isset($_GET['deleteSpeciality'])) {
			deleteSpeciality();
		}
		?>
		<?php
		if (isset($_GET['deleteService'])) {
			deleteServices();
		}
		?>
		<?php
		if (isset($_GET['deletefaqs'])) {
			deleteFAQ();
		}
		?>
		<?php
		if (isset($_GET['deletewhyus'])) {
			deleteWhyUs();
		}
		?>
		<?php
		if (isset($_GET['deletewhyourkit'])) {
			deleteWhyOurkit();
		}
		?>
		<?php
		if (isset($_GET['deletemedikit'])) {
			deleteMedikit();
		}
		?>
		<?php
		if (isset($_GET['logout'])) {
			include("logout.php");
		}
		?>
		<?php
		if (isset($_GET['approveAdmin'])) {
			$adminId = $_GET['approveAdmin'];
			$approveSql = "UPDATE superadmin SET status='approved' WHERE adminId=$adminId";
			mysqli_query($connF, $approveSql);
			echo "<script>alert('Superadmin approved successfully!');</script>";
			echo "<script>window.open('index.php?managesuperadmins', '_self');</script>";
		}
		?>
		<?php
		if (isset($_GET['rejectAdmin'])) {
			$adminId = $_GET['rejectAdmin'];
			$rejectSql = "UPDATE superadmin SET status='rejected' WHERE adminId=$adminId";
			mysqli_query($connF, $rejectSql);
			echo "<script>alert('Superadmin rejected successfully!');</script>";
			echo "<script>window.open('index.php?managesuperadmins', '_self');</script>";
		}
		?>

		</div>

	<?php } ?><?php include('footer.php'); ?>