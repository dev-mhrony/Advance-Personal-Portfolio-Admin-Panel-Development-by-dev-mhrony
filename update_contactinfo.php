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
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title">Update Your Contact Page</h5>
                        </div>

                        <?php
                        $cont_id = $_GET['cont_id'];
                        $getSelectQry = "SELECT * FROM contact WHERE id={$cont_id}";
                        $getResult = mysqli_query($db_config, $getSelectQry);

                        ?>

                        <form action="#" class="form-horizontal">
                            <div class="modal-body">

                                <?php

                                foreach ($getResult as $key => $singleData) {



                                ?>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="Title">Title</label>
                                        <div class="col-sm-9">
                                            <input type="text" placeholder="Type Title" class="form-control" id="Title" value="<?php echo $singleData['title'] ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="ShortBio">Short Bio</label>
                                        <div class="col-sm-9">
                                            <input type="text" placeholder="Type your site short discription" id="ShortBio" class="form-control" value="<?php echo $singleData['short_bio'] ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="Email">E-mail</label>
                                        <div class="col-sm-9">
                                            <input type="text" placeholder="Type your email" class="form-control" id="Email" value="<?php echo $singleData['email'] ?>">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="PhoneNumber">Phone Number</label>
                                        <div class="col-sm-9">
                                            <input type="text" placeholder="Type your phone number" class="form-control" id="PhoneNumber" value="<?php echo $singleData['phone_number'] ?>">
                                        </div>
                                    </div>

                                <?php } ?>
                            </div>

                            <div class="modal-footer">
                                <a href="contact.php"><button type="button" class="btn btn-link" data-dismiss="modal">Close</button></a>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
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