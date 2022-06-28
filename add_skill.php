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
                       if(isset($_GET['msg'])){
                                        
                    ?>

                    <div class="alert bg-success alert-styled-left">
                        <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span
                                class="sr-only">Close</span></button>
                        <span class="text-semibold">Good Job</span>
                        <?php echo $_GET['msg']?>
                    </div>

                    <?php } ?>


                    <!-- Horizontal form modal -->
                    <div id="modal_form_horizontal">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <h5 class="modal-title">Add Skill</h5>
                                </div>

                                <form action="./config/skill_controlar.php" class="form-horizontal" method="POST">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="Skill"> Skill Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Type your last Skill Name"
                                                    class="form-control" id="Skill" name="SkillName">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="Percentage"> Percentage</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Type your Percentage "
                                                    class="form-control" id="Percentage" name="Percentage">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="Experience">Experience</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Type Experience Year"
                                                    class="form-control" id="Experience" name="Experience">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <a href="skill.php"><button type="button" class="btn btn-link"
                                                data-dismiss="modal">Back to Skill list
                                            </button></a>
                                        <button type="submit" class="btn btn-primary" name="skillSubmit">Add
                                            Skill</button>
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