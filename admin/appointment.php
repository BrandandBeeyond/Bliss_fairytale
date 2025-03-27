<?php

if (!isset($_SESSION['email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {
    ?>
    <title>starta admin - appointments</title>
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
             
                <?php
}
?>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title py-3">Pending approvals</h3>

                       

                            <table id="datatable-buttons"
                                class="table table-striped table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                    
                                        <th>full name</th>
                                        <th>gender</th>
                                        <th>email</th>
                                        <th>mobile</th>
                                        <th>age</th>
                                        <th>action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <?php viewBookedAppointments(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        