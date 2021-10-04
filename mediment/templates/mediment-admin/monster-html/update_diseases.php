<?php
    include('common/html_head.php');
    include('common/db_connection.php');
    $sql="SELECT * FROM specialization WHERE isdelete='0' ORDER BY name";
    $result=mysqli_query($connect,$sql);
    $id =$_GET['id'];
    $sql2="SELECT * FROM diseases WHERE isdelete='0' AND diseaseid=".$id;
    $result2=mysqli_query($connect,$sql2);
    $row2=mysqli_fetch_assoc($result2);
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
                        <h3 class="text-themecolor m-b-0 m-t-0">Add Diseases</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Add Diseases</li>
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
                                <form class="form-horizontal form-material" action="update_diseases_process.php?id=<?php echo $id ?>" method="post">
                                    <div class="form-group">
                                        <label for="name" class="col-md-12">Name</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line" id="name" name="diseasename" value="<?php echo $row2['name'];?>">
                                        </div>`
                                    </div>
                                    <div class="form-group">
                                        <label for="det" class="col-md-12">Detail</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line" id="det" name="detail" value="<?php echo $row2['detail'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Select Specialization</label>
                                        <div class="col-sm-12">
                                            <select class="form-control form-control-line" name="specialization" id="listBoxId">
                                                <?php while($row=mysqli_fetch_assoc($result)):;?>
                                                <option value="<?php echo $row['specid'];?>"><?php echo $row['name'];?></option>
                                                <?php endwhile;?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input type="submit" class="btn btn-success" value="Add Disease">
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
