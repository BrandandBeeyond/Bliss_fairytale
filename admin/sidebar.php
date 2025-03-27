<?php
if (!isset($_SESSION['email'])) {
    echo "<script>window.open('login.php','_self')</script>";

} else {
    ?>
    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">

        <div data-simplebar class="h-100">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu list-unstyled" id="side-menu">
                    <li class="menu-title">Home</li>

                    <li>
                        <a href="index.php?dashboard" class="waves-effect">
                            <i class="mdi mdi-home-variant-outline"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <?php
                    $email = $_SESSION['email'];
                    $query = "SELECT status FROM superadmin WHERE adminEmail= '$email' AND status='approved'";
                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {

                        ?>
                        <li>
                            <a href="index.php?managesuperadmins" class="waves-effect">
                                <i class="mdi mdi-account-clock-outline"></i>
                                <span>Manage superadmins</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.php?addadmin" class="waves-effect">
                                <i class="mdi mdi-account-outline"></i>
                                <span>Add Admin</span>
                            </a>
                        </li>
                    <?php } ?>


                    <!-- <li>
                        <a href="index.php?appointment" class="waves-effect">
                            <i class="mdi mdi-doctor"></i>
                            <span>Appointments</span>
                        </a>
                    </li> -->
                    <li class="menu-title">Content Management</li>
                    <li>
                        <a href="index.php?addtestimonial" class="waves-effect">
                            <i class="mdi mdi-comment-quote"></i>
                            <span>Testimonials</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?addservices" class="waves-effect">
                            <i class="mdi mdi-air-filter"></i>
                            <span>Services</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?addspeciality" class="waves-effect">
                            <i class="mdi mdi-medical-bag"></i>
                            <span>Specialities</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?addfaqs" class="waves-effect">
                            <i class="mdi mdi-frequently-asked-questions"></i>
                            <span>FAQ's</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="mdi mdi-note-plus-outline"></i>
                            <span>Pages</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="index.php?addhome">Manage Home Page</a></li>
                            <li><a href="index.php?addaboutus">Manage About Us Page</a></li>
                            <li><a href="index.php?addhomeopathy">Manage Homeopathy</a></li>
                            <li><a href="index.php?addaboutkit">Manage kit page</a></li>
                            <li><a href="index.php?addcontact">Manage Contact Us Page</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Sidebar -->
        </div>
    </div>
    <!-- Left Sidebar End -->
<?php } ?>