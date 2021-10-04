<?php
    include('common/html_head.php');
    include('common/db_connection.php');
    $sql="SELECT * FROM specialization WHERE isdelete='0' ORDER BY name";
    $sql2 = "SELECT * FROM hospitals WHERE isdelete='0' ORDER BY name";
    $id =$_GET['id'];
    $sql3="SELECT * FROM doctors WHERE isdelete='0' AND doctorid=".$id;
    $result=mysqli_query($connect,$sql);
    $result2=mysqli_query($connect,$sql2);
    $result3=mysqli_query($connect,$sql3);
    $row3=mysqli_fetch_assoc($result3);
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
                        <h3 class="text-themecolor m-b-0 m-t-0">Edit Doctor Information</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">View Doctors</li>
                            <li class="breadcrumb-item active">Edit Doctor</li>
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
                                <form class="form-horizontal form-material" action="update_doctors_process.php?id=<?php echo $id; ?>" method="post">
                                    <div class="form-group">
                                        <label for="fname" class="col-md-12">First Name</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line" id="fname" name="firstname" value="<?php echo $row3['firstname'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="lname" class="col-md-12">Last Name</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line" id="lname" name="lastname" value="<?php echo $row3['lastname'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Select Specialization</label>
                                        <div class="col-sm-12">
                                            <select class="form-control form-control-line" name="specialization">
                                                <?php while($row=mysqli_fetch_assoc($result)):;?>
                                                <option value="<?php echo $row['specid'];?>"><?php echo $row['name'];?></option>
                                                <?php endwhile;?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Education</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" name="education" value="<?php echo $row3['education'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Hospital</label>
                                        <div class="col-sm-12">
                                            <select class="form-control form-control-line" name="hospital">
                                                <?php while($row=mysqli_fetch_assoc($result2)):;?>
                                                <option value="<?php echo $row['hospitalid'];?>"><?php echo $row['name'];?></option>
                                                <?php endwhile;?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input type="submit" class="btn btn-success" value="Update">
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
            <!-- ============================================================== -->
            <?php
            include('common/footer.php');
            ?>
</body>

</html>
