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

                <!-- Content area -->
                <div class="content">

                    <!-- Dashboard content -->
                    <div class="row">
                        <!-- Cover area -->
                        <div class="profile-cover">
                            <div class="profile-cover-img" style="background-image: url(assets/images/cover.jpg)"></div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#" class="profile-thumb">
                                        <img src="assets/images/placeholder.jpg" class="img-circle" alt="">
                                    </a>
                                </div>

                                <div class="media-body">
                                    <h1>Hanna Dorman <small class="display-block">UX/UI designer</small></h1>
                                </div>

                                <div class="media-right media-middle">
                                    <ul class="list-inline list-inline-condensed no-margin-bottom text-nowrap">
                                        <li><a href="#" class="btn btn-default"><i
                                                    class="icon-camera position-left"></i> Change Profile</a>
                                        </li>
                                        <li><a href="#" class="btn btn-default"><i class="icon-images2 position-left">
                                                </i> Channge
                                                Cover image</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- ==cover area== -->




                        <!-- Profile info -->
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h6 class="panel-title">Profile information</h6>
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li><a data-action="collapse"></a></li>
                                        <li><a data-action="reload"></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-body">
                                <form action="#">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Fast Name</label>
                                                <input type="text" placeholder="Last Name" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Last Name</label>
                                                <input type="text" placeholder="Last Name" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Pashon</label>
                                                <input type="text" placeholder="type your pesohon" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>City</label>
                                                <input type="text" placeholder="City" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Phone Number</label>
                                                <input type="text" placeholder="Phone Number" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label>E-mail</label>
                                                <input type="text" placeholder="E-mail" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /profile info -->


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