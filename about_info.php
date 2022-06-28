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

    <!-- Main navbar== -->

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
                        <li>About Information</li>
                    </ul>
                </div>
                <!-- /page header -->

                <!-- Content area -->
                <div class="content">


                    <!-- ================================ Pop UP Windo================ -->
                    <div id="modal_form_horizontal" class="modal fade">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h5 class="modal-title">Update About</h5>
                                </div>

                                <form action="#" class="form-horizontal">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label class="control-label col-sm-3">First Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Type your fast name"
                                                    class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3">Lirst Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Type your project lirst name "
                                                    class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3">Date Of Birth Year</label>
                                            <div class="col-sm-9">
                                                <input type="number" placeholder="Type your date of birth year"
                                                    class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3">Nationality</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Type your nationality"
                                                    class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3">Freelance</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Are your Freelance?"
                                                    class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3">Address</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Location" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3">Phone Number</label>
                                            <div class="col-sm-9">
                                                <input type="number" placeholder="" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3">E-mail</label>
                                            <div class="col-sm-9">
                                                <input type="email" placeholder="Type your Contact E-mail"
                                                    class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3">Langages</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Type your Speek Langages"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Update Info</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- ================================ Pop UP Windo Close================ -->


                    <!-- Left fixed column -->
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Welcome to <code>About</code> Info Section </h5>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="reload"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">
                            Here you will be able to update and remove all the information <code> required</code>
                            for all kinds of
                            livelihoods.
                        </div>

                        <table class="table datatable-fixed-both" width="110%">
                            <thead>


                                <tr>
                                    <th width="3%">SN</th>
                                    <th width="10%">First Name</th>
                                    <th width="10%">Last Name</th>
                                    <th width="5%">Age</th>
                                    <th width="10%">Nationality</th>
                                    <th width="10%">Freelance</th>
                                    <th width="15%">Address</th>
                                    <th width="10%">Phone</th>
                                    <th width="15%">E-mail</th>
                                    <th width="20%">Langages</th>
                                    <th width="10%">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                
                                $selectQry = "SELECT * FROM about_info";
                                $about_info_list = mysqli_query($db_config, $selectQry);
                                foreach($about_info_list as $key => $about_info){
                                
                                ?>
                                <tr>
                                    <th><?php echo ++$key ?></th>
                                    <td><?php echo $about_info['fast_name'] ?></td>
                                    <td><?php echo $about_info['last_name'] ?></td>
                                    <td><?php echo $about_info['age'] ?></td>
                                    <td><?php echo $about_info['nationality'] ?></td>
                                    <td><?php echo $about_info['freelance'] ?></td>
                                    <td><?php echo $about_info['address'] ?></td>
                                    <td><?php echo $about_info['phone_number'] ?></td>
                                    <td><?php echo $about_info['email'] ?></td>
                                    <td><?php echo $about_info['language'] ?></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li><a href="#"><i class=" icon-pencil7" data-toggle="modal"
                                                        data-target="#modal_form_horizontal"
                                                        data-target="#modal_form_horizontal"></i></a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                    <!-- /left fixed column -->

                </div>
                <!-- /left fixed column -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

</body>

</html>