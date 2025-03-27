<?php

	if(!isset($_SESSION['email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}
	else{
?>
 <aside id="leftsidebar" class="sidebar">
            
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <!-- <li class="header">MAIN NAVIGATION</li> -->
                    <li class="active">
                        <a href="index.php?dashboard">
                            <i class="material-icons">dashboard</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">piano</i>
                            <span>Instruments</span>
                        </a>
                        <ul class="ml-menu" id="productlist">
                                <li>
                                <a href="index.php?addinstrument"><span> Add Instruments</span></a>
                            </li>
                            <li>
                                <a href="index.php?addinstrumentstyle"><span> Add Instruments Style</span></a>
                            </li>
                            <li>
                                <a href="index.php?addlevel"><span> Add Instruments Level</span></a>
                            </li>
                             
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">library_music</i>
                            <span>Courses</span>
                        </a>
                        <ul class="ml-menu" id="">
                                <li>
                                <a href="index.php?addcourses"><span> Add Courses</span></a>
                            </li>
                            <li>
                                <a href="index.php?addlessons"><span> Add Lessons</span></a>
                            </li>
                            
                             
                        </ul>
                    </li>
                   
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">school</i>
                            <span> Student Manager </span>
                        </a>
                        <ul class="ml-menu" id="productlist">
                            <li>
                                <a href="index.php?viewstudent"><span> Student List</span></a>
                                
                            </li>
                             <li>
                             <a href="index.php?subscribestudent"><span> Subscribed Student</span></a>
                                
                            </li>
                             
                        </ul>
                    </li>
                    
                   
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">add_reaction</i>
                            <span>Ads</span>
                        </a>
                        <ul class="ml-menu" id="productlist">
                                <li>
                                <a href="index.php?addads"><span> Add Ad</span></a>
                            </li>
                            <li>
                                <a href="index.php?viewads"><span> View Ads</span></a>
                            </li>
                             
                        </ul>
                    </li>
                    <!-- <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">slideshow</i>
                            <span>SlideShow</span>
                        </a>
                        <ul class="ml-menu" id="productlist">
                        <li>
						<a href="index.php?addslideshow"><span> Add SlideShow</span></a>
					</li>
					<li>
						<a href="index.php?viewslideshow"><span> View SlideShow</span></a>
					</li>
                             
                        </ul>
                    </li> -->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">payments</i>
                            <span>Payments</span>
                        </a>
                        <ul class="ml-menu" id="productlist">
                                <li>
                                <a href="index.php?addads"><span> All Payments</span></a>
                            </li>
                            <li>
                                <a href="index.php?viewads"><span> Pending Payments</span></a>
                            </li>
                             
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">admin_panel_settings</i>
                            <span> Admin Manager </span>
                        </a>
                        <ul class="ml-menu" id="productlist">
                            <li>
                                <a href="index.php?addadmin"><span> Add Adminstrator</span></a>
                                
                            </li>
                             <li>
                             <a href="index.php?viewadmins"><span> View Adminstrator</span></a>
                                
                            </li>
                             
                        </ul>
                    </li>
                    <li class="">
                        <a href="index.php?logout">
                            <i class="material-icons">logout</i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
           
        </aside>
<?php } ?>