<!DOCTYPE html>
<html lang="en">
<html lang="en">

<head>

    <?php
    include "header_link_file.php";
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

                <!-- ==Content area== -->
                <div class="content">

                    <?php
                    if (isset($_GET['msg'])) {

                    ?>

                        <div class="alert bg-success alert-styled-left">
                            <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                            <span class="text-semibold">Good Job</span>
                            <?php echo $_GET['msg'] ?>
                        </div>

                    <?php } ?>

                    <!-- Horizontal form modal -->
                    <div id="modal_form_horizontal">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <h5 class="modal-title">Update Portfolio</h5>
                                </div>

                                <form action="./config/portfolio_controlar.php" class="form-horizontal" method="POST">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="projectName">Project Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Type your last Project Name" class="form-control" id="projectName" name="projectName">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="projectBio">Project Bio</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Type your project short discription " class="form-control" id="projectBio" name="projectBio">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="catagory">Catagory</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Type Catagory" class="form-control" id="catagory" name="catagory">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="cintName">Clint Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Type your Clint Name" class="form-control" id="cintName" name="cintName">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="projectLanguage">Project
                                                Language</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Type your Project Language" class="form-control" id="projectLanguage" name="projectLanguage">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="projectPreview">Project Preview
                                                Link</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Type your Project Preview Link" class="form-control" id="projectPreview" name="projectPreview">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3">Image</label>
                                            <div class="col-sm-9">
                                                <input type="file" class="form-control" name="img">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <a href="portfoli.php"><button type="button" class="btn btn-link" data-dismiss="modal">Back to Portfolio list
                                            </button></a>
                                        <button type="submit" class="btn btn-primary" name="addPortfolio">Add
                                            Portfolio</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /horizontal form modal -->


                    <!-- Dashboard content -->
                    <div class="row">




                    </div>
                    <!-- /dashboard content -->


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