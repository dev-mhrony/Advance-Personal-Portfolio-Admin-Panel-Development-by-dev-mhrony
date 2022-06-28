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
                        <li><a href="index.php"><i class="icon-home2 position-left"></i> Deshbord</a></li>
                        <li>Home Section</li>
                    </ul>
                </div>
                <!-- /page header -->


                <!-- Content area -->
                <div class="content">


                    <!-- ================================== Pop UP Windo================ -->
                    <div id="modal_form_horizontal" class="modal fade">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h5 class="modal-title">Update Home Section</h5>
                                </div>

                                <form action="#" class="form-horizontal" action="" method="POST">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="YourName">Your Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Type your name" class="form-control"
                                                    id="YourName">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="Description">Description</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Type your project short discription "
                                                    class="form-control" id="Description">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="Link">Link</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Select or Type your catagory"
                                                    class="form-control" id="Link">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="Image">Image</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Clint Name" data-mask="+99-99-9999-9999"
                                                    class="form-control" id="Image">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-link" data-dismiss="modal">Back to
                                            List</button>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- ================================ Pop UP Windo Close================ -->


                    <!-- Dashboard content -->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Quick stats boxes -->
                            <div class="row">



                                <div class="panel panel-flat">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">Welcome to Home Edit Section</h5>
                                        <div class="heading-elements">
                                            <ul class="icons-list">
                                                <li><a data-action="reload"></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        Here you can change the <code>Name</code>,
                                        <code>Short Description</code>, <code>Image</code> and
                                        <code>Link</code> of your webpage.
                                    </div>

                                    <table class="table datatable-basic table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>Your Name</th>
                                                <th>Description</th>
                                                <th>Link</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                
                                            $selectQry = "SELECT * FROM home_edit_section";
                                            
                                            $home_section_list = mysqli_query($db_config , $selectQry);
                                            foreach ($home_section_list as $key => $home){
                                    
                        
                                            ?>


                                            <!-- ============== Active Status Show in Result 1 to active =============== -->
                                            <?php
                                             $status = $home ['status'];
                                             
                                             if($status == 1){
                                                $status = "Active";
                                             }else{
                                                $status = "In-Active";
                                            }
                                            ?>

                                            <tr>
                                                <td><?php echo ++$key?>
                                                </td>
                                                <td><?php echo $home ['your_name']?></td>
                                                <td><?php echo $home ['description']?></td>
                                                <td><?php echo $home ['link']?></td>
                                                <td><?php echo $home ['image']?></td>
                                                <td><span class="label label-success"><?php echo $status ?></span>
                                                </td>
                                                <td class="text-center">
                                                    <ul class="icons-list">
                                                        <li><a href="#"><i class=" icon-pencil7" data-toggle="modal"
                                                                    data-target="#modal_form_horizontal"
                                                                    data-target="#modal_form_horizontal"></i></a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>

                                            <?php 
                                             };
                                            ?>

                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>


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