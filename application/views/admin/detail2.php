<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        Admin Detail </title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url() ?>home">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-city"></i>
                </div>
                <div class="sidebar-brand-text mx-3">BBRVPD</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!--query menu join table-->

            <!-- looping menu -->
            <div class="sidebar-heading">
                Admin </div>

            <!-- buat sub-menunya -->

            <li class="nav-item ">
                <a class="nav-link pb-0" href="<?php echo base_url() ?>admin">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item ">
                <a class="nav-link pb-0" href="<?php echo base_url() ?>admin/role">
                    <i class="fas fa-fw fa-user-tie"></i>
                    <span>Role</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider mt-3">

            <div class="sidebar-heading">
                Home </div>

            <!-- buat sub-menunya -->

            <li class="nav-item ">
                <a class="nav-link pb-0" href="<?php echo base_url() ?>home">
                    <i class="fas fa-fw fa-building"></i>
                    <span>Job Vacancy</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider mt-3">

            <div class="sidebar-heading">
                User </div>

            <!-- buat sub-menunya -->

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link pb-0" href="<?php echo base_url() ?>user">
                    <i class="fas fa-fw fa-user"></i>
                    <span>My Profile</span></a>
            </li>

            <li class="nav-item ">
                <a class="nav-link pb-0" href="<?php echo base_url() ?>user/edit">
                    <i class="fas fa-fw fa-user-edit"></i>
                    <span>Edit Profile</span></a>
            </li>

            <li class="nav-item ">
                <a class="nav-link pb-0" href="<?php echo base_url() ?>user/changepassword">
                    <i class="fas fa-fw fa-key"></i>
                    <span>Change Password</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider mt-3">

            <div class="sidebar-heading">
                Menu </div>

            <!-- buat sub-menunya -->

            <li class="nav-item ">
                <a class="nav-link pb-0" href="<?php echo base_url() ?>menu">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Menu Management</span></a>
            </li>

            <li class="nav-item ">
                <a class="nav-link pb-0" href="<?php echo base_url() ?>menu/submenu">
                    <i class="fas fa-fw fa-folder-open"></i>
                    <span>Submenu Management</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider mt-3">

            <div class="sidebar-heading">
                Detail </div>

            <!-- buat sub-menunya -->


            <!-- Divider -->
            <hr class="sidebar-divider mt-3">



            <!-- Nav Item - Logout -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url() ?>auth/logout">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>


                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                        </li>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle" src="<?php echo base_url() ?>assets/img/profile/default.jpg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?php echo base_url() ?>auth/">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo base_url() ?>auth/logout" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Detail Job Vacancy</h1>

                    <div class="row">
                        <div class="col-lg-6">
                        </div>
                    </div>

                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="<?php echo base_url() ?>berkas/<?php echo $image; ?>" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $company_name; ?></h5>
                                    <p class="card-text"><?php echo $requirement; ?></p>
                                    <p class="card-text"><?php echo $special_requirements; ?></p>
                                    <p class="card-text">Deskripsi: <?php echo $note; ?></p>
                                    <p class="card-text"><small class="text-muted">Alamat: <?php echo $address; ?></small></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright © BBRVPD Cibinong 2019</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?php echo base_url() ?>auth/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() ?>assets/js/sb-admin-2.min.js"></script>

    <script>
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });



        $('.form-check-input').on('click', function() {
            const menuId = $(this).data('menu');
            const roleId = $(this).data('role');

            $.ajax({
                url: "<?php echo base_url() ?>admin/changeaccess",
                type: 'post',
                data: {
                    menuId: menuId,
                    roleId: roleId
                },
                success: function() {
                    document.location.href = "<?php echo base_url() ?>admin/roleaccess/" + roleId;
                }

            });


        });
    </script>




</body>

</html>