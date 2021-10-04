<?php
    include('common/html_head.php');
    include('common/db_connection.php');
    $sql="SELECT * FROM appointments WHERE isdelete='0' AND verified='0'";
    
    $result=mysqli_query($connect,$sql);
    $num_of_rows = mysqli_num_rows($result);
?>

<body class="fix-header card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php
        include('common/header.php');
        ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php
        include('common/side_nav.php');
        ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Appointments to Approve</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Appointments to Approve</li>
                        </ol>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <?php
                if($num_of_rows > 0){
                ?>
                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">List of all Appointments to Approve</h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Appointment ID</th>
                                                <th>Username</th>
                                                <th>Doctor ID</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Check</th>
                                            </tr>
                                        </thead>
                                        <?php
                                            while($row=mysqli_fetch_assoc($result)){
                                        ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $row['appointmentid']; ?></td>
                                                <td><?php echo getDoctor($row['doctorid']); ?></td>
                                                <td><?php echo $row['userid']; ?></td>
                                                <td><?php echo $row['date']; ?></td>
                                                <td><?php echo $row['time']; ?></td>
                                                <td><a href="approve_appointments.php?id=<?php echo $row['appointmentid']; ?>"><i class="fa fa-check-square m-r-10" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <?php 
                              }
                              else if($num_of_rows == 0){
                               ?>
                               <div class='alert alert-danger'>
                                No data found.
                               </div>
                               <?php
                                }
                               ?>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php
            function getDoctor($id){
                global $connect;
                $sql = "SELECT * FROM doctors WHERE doctorid=".$id;
                $result=mysqli_query($connect,$sql);
                $row=mysqli_fetch_assoc($result);
                return $row['firstname']." ".$row['lastname'];
            }
            include('common/footer.php');
            ?>
</body>

</html>
