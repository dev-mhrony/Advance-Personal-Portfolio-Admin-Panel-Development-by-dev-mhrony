<!DOCTYPE html>
<html lang="en">
<html lang="en">

<head>

    <?php
    include "header_link_file.php";
    include "./config/server_connect.php";
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

                    <?php
                    $about_id = $_GET['about_id'];
                    $getSingleDataQry = "SELECT * FROM about_info WHERE id={$about_id}";
                    $getResult = mysqli_query($db_config, $getSingleDataQry);

                    ?>

                    <!-- Horizontal form modal -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title">Update About Info</h5>
                        </div>



                        <form action="#" class="form-horizontal">
                            <div class="modal-body">
                                <?php

                                foreach ($getResult as $key => $aboutSingleData) {

                                ?>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="FirstName">First Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" placeholder="Type your fast name" id="FirstName" class="form-control" value="<?php echo $aboutSingleData['fast_name'] ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="LirstName">Lirst Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" placeholder="Type your project lirst name" id="LirstName" class="form-control" value="<?php echo $aboutSingleData['last_name'] ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="DateOfBirth">Date Of Birth Year</label>
                                        <div class="col-sm-9">
                                            <input type="number" placeholder="Type your date of birth year" id="DateOfBirth" class="form-control" value="<?php echo $aboutSingleData['age'] ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="Nationality">Nationality</label>
                                        <div class="col-sm-9">
                                            <input type="text" placeholder="Type your nationality" class="form-control" id="Nationality" value="<?php echo $aboutSingleData['nationality'] ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="Freelance">Freelance</label>
                                        <div class="col-sm-9">
                                            <input type="text" placeholder="Are your Freelance?" class="form-control" id="Freelance" value="<?php echo $aboutSingleData['freelance'] ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="Address">Address</label>
                                        <div class="col-sm-9">
                                            <input type="text" placeholder="Location" class="form-control" id="Address" value="<?php echo $aboutSingleData['address'] ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="PhoneNumber">Phone Number</label>
                                        <div class="col-sm-9">
                                            <input type="number" placeholder="" class="form-control" id="PhoneNumber" value="<?php echo $aboutSingleData['phone_number'] ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="Email">E-mail</label>
                                        <div class="col-sm-9">
                                            <input type="email" placeholder="Type your Contact E-mail" id="Email" class="form-control" value="<?php echo $aboutSingleData['email'] ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="Langages">Langages</label>
                                        <div class="col-sm-9">
                                            <input type="text" placeholder="Type your Speek Langages" id="Langages" class="form-control" value="<?php echo $aboutSingleData['language'] ?>">
                                        </div>
                                    </div>

                                <?php } ?>
                            </div>

                            <div class="modal-footer">
                                <a href="about_info.php"><button type="button" class="btn btn-link" data-dismiss="modal">Close</button></a>
                                <button type="submit" class="btn btn-primary">Update Info</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- ================================ Pop UP Windo Close================ -->
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