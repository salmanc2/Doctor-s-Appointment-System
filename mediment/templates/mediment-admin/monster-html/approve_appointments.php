<?php
    include('common/html_head.php');
    include('common/db_connection.php');
    $id = $_GET['id'];
    $sql="SELECT * FROM appointments where appointmentid=".$id;
    
    $result=mysqli_query($connect,$sql);
    $row=mysqli_fetch_assoc($result);
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
                        <h3 class="text-themecolor m-b-0 m-t-0">Approve an Appointment</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Approve Appointments</li>
                            <li class="breadcrumb-item active">Approve an Appointment</li>
                        </ol>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="card">
                            <div class="card-block">
                                <form class="form-horizontal form-material" action="approve_app_process.php?id=<?php echo $id;?>" method="post">
                                    <div class="form-group">
                                        <label class="col-md-12">Appointment ID</label>
                                        <div class="col-md-12">
                                            <input type="text" name="id" class="form-control form-control-line" disabled value="<?php echo $row['appointmentid']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">User ID</label>
                                        <div class="col-md-12">
                                            <input type="text" name="userid" class="form-control form-control-line" disabled value="<?php echo $row['userid']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Doctor Name</label>
                                        <div class="col-md-12">
                                            <input type="text" name="doctorid" class="form-control form-control-line" disabled value="<?php echo getDoctor($row['doctorid']); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Appointment Date</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" name="date" disabled value="<?php echo $row['date']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Appointment Time</label>
                                        <div class="col-md-12">
                                            <input type="time" class="form-control form-control-line" disabled value="<?php echo $row['time']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Hospital Phone No</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" disabled value="<?php echo getHospital($row['doctorid']); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input type="submit" class="btn btn-success" value="Approve Appointment">
                                            <a href="disapprove_app.php?id=<?php echo $id; ?>"><input type="button" class="btn btn-danger" value="Disapprove Appointment"></a>
                                        </div>
                                    </div>
                                </form>
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
            <?php
            function getDoctor($id){
                global $connect;
                $sql = "SELECT * FROM doctors WHERE doctorid=".$id;
                $result=mysqli_query($connect,$sql);
                $row=mysqli_fetch_assoc($result);
                return $row['firstname']." ".$row['lastname'];
            }
            function getHospital($id){
                global $connect;
                $sql = "SELECT * FROM hospitals WHERE hospitalid=(SELECT hospitalid FROM doctors WHERE doctorid='$id')";
                $result=mysqli_query($connect,$sql);
                $row=mysqli_fetch_assoc($result);
                return $row['contact'];
            }
            include('common/footer.php');
            ?>
</body>

</html>
