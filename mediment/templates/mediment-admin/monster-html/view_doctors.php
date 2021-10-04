<?php
    include('common/html_head.php');
    include('common/db_connection.php');
    $sql="SELECT * FROM doctors WHERE isdelete='0' ORDER BY doctorid";
    
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
                        <h3 class="text-themecolor m-b-0 m-t-0">View Doctors</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">View Doctors</li>
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
                                <h4 class="card-title">List of Doctors</h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Doctor ID</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Specialization</th>
                                                <th>Education</th>
                                                <th>Hospital ID</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while($row=mysqli_fetch_assoc($result)){
                                            ?>
                                            <tr>
                                                <td><?php echo $row['doctorid']; ?></td>
                                                <td><?php echo ucwords(strtolower($row['firstname'])); ?></td>
                                                <td><?php echo ucwords(strtolower($row['lastname'])); ?></td>
                                                <td><?php echo getSpec($row['specializationid']); ?></td>
                                                <td><?php echo $row['education']; ?></td>
                                                <td><?php echo getHospital($row['hospitalid']); ?></td>
                                                <td><a href="update_doctors.php?id=<?php echo $row['doctorid']; ?>" class="btn btn-default"><i class="fa fa-edit"></i></a></td>
                                                <td><a href="delete_doctors.php?id=<?php echo $row['doctorid'];?>" class="btn btn-danger"><i class="fa fa-trash-o"></i></a></td>
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
            function getHospital($id){
                global $connect;
                $sql = "SELECT * FROM hospitals WHERE hospitalid=".$id;
                $result=mysqli_query($connect,$sql);
                $row=mysqli_fetch_assoc($result);
                return $row['name'];
            }
            function getSpec($id){
                global $connect;
                $sql = "SELECT * FROM specialization WHERE specid=".$id;
                $result=mysqli_query($connect,$sql);
                $row=mysqli_fetch_assoc($result);
                return $row['name'];
            }
            
            include('common/footer.php');
            ?>
</body>

</html>
