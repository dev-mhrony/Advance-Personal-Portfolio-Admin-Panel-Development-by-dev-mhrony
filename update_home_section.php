<!DOCTYPE html>
<html lang="en">
<html lang="en">

<head>

    <?php
    include "header_link_file.php";
    require "./config/server_connect.php";
    ?>

</head>

<body>

    <!-- Main navbar -->


    <?php
    include "./include_section/top_navbar.php";
    ?>

    <!-- /main navbar -->

    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main sidebar -->
            <?php
            include "./include_section/main_sidebar.php";
            ?>
            <!-- /main sidebar -->


            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Page header -->
                <div class="breadcrumb-line">
                    <ul class="breadcrumb">
                        <li><a href="index.html"><i class="icon-home2 position-left"></i> Deshbord</a></li>
                        <li><a href="components_notifications_other.html">Home</a></li>
                    </ul>
                </div>
                <!-- /page header -->

                <!-- ===Content area ==-->
                <div class="content">


                    <!-- Horizontal form modal -->

                    <div id="modal_form_horizontal">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <h5 class="modal-title">Update Home Section</h5>
                                </div>


                                <?php

                                $home_id = $_GET['home_id'];
                                $getSingleDataQry = "SELECT * FROM home_edit_section WHERE id={$home_id}";
                                $gerResult = mysqli_query($db_config, $getSingleDataQry);


                                ?>

                                <form class="form-horizontal" action="config/home_controlar.php" method="POST">
                                    <div class="modal-body">
                                        <div class="form-group">

                                            <?php

                                            foreach ($gerResult as $key => $singleHome_data) {


                                            ?>

                                                <label class="control-label col-sm-3" for="YourName">Your Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" placeholder="Type your Your Name" class="form-control" id="YourName" name="YourName" value="<?php echo $singleHome_data['your_name'] ?>">
                                                </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="Description">Description</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Type your project discription " class="form-control" id="Description" name="Description" value="<?php echo $singleHome_data['description'] ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="Link">Link</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Type Link" class="form-control" id="Link" name="Link" value="<?php echo $singleHome_data['link'] ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="Image">Image</label>
                                            <div class="col-sm-9">
                                                <input type="file" placeholder="Type your end year" class="form-control" id="Image" name="Image">
                                            </div>
                                        </div>
                                    </div>

                                <?php } ?>

                                <div class="modal-footer">
                                    <a href="home_section.php"><button type="button" class="btn btn-link" data-dismiss="modal">Back to Home
                                        </button></a>
                                    <button type="submit" class="btn btn-primary" name="updateHome">Update Home Section</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /horizontal form modal -->




                    <!-- /horizontal form modal -->

                    <!-- Footer -->
                    <div class="footer text-muted">
                        &copy; 2022. <a href="#">Ghasful</a> by <a href="" target="_blank">MH RONY</a>
                    </div>
                    <!-- /footer -->

                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

</body>

</html>