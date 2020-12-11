<html lang="en"><head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        Job Vacancy    </title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url()?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url()?>assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper"><!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url()?>home">
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
            Home        </div>

        <!-- buat sub-menunya -->

                                    <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                                <a class="nav-link pb-0" href="<?php echo base_url()?>company/job_vacancy">
                    <i class="fas fa-fw fa-building"></i>
                    <span>Job Vacancy</span></a>
            </li>


        <!-- Divider -->
        <hr class="sidebar-divider mt-3">

            <div class="sidebar-heading">
            Company        </div>

        <!-- buat sub-menunya -->

                                    <li class="nav-item ">
                                <a class="nav-link pb-0" href="<?php echo base_url()?>company">
                    <i class="fas fa-fw fa-building"></i>
                    <span>Company Profile</span></a>
            </li>

                                    <li class="nav-item ">
                                <a class="nav-link pb-0" href="<?php echo base_url()?>company/edit">
                    <i class="fas fa-fw fa-edit"></i>
                    <span>Edit Company Profile</span></a>
            </li>

                                    <li class="nav-item ">
                                <a class="nav-link pb-0" href="<?php echo base_url()?>company/changepassword">
                    <i class="fas fa-fw fa-key"></i>
                    <span>Change Password</span></a>
            </li>


        <!-- Divider -->
        <hr class="sidebar-divider mt-3">

            <div class="sidebar-heading">
            Detail        </div>

        <!-- buat sub-menunya -->


        <!-- Divider -->
        <hr class="sidebar-divider mt-3">



    <!-- Nav Item - Logout -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()?>auth/logout">
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
<!-- End of Sidebar --><!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>

                    </div>

                </div>

            </form>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>


                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                </li><li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">test</span>
                        <img class="img-profile rounded-circle" src="<?php echo base_url()?>assets/img/profile/default.jpg">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="<?php echo base_url()?>auth/">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo base_url()?>auth/logout" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar --><style>
    body {
        color: #434444;
    }

    .container {
        padding-top: 50px;
    }

    /* Product Grid */
    .product-grid {
        padding-bottom: 20px;
        padding-top: 20px;
    }

    .product-grid:hover {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .image {
        width: 100%;

    }

    .overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        height: 100%;
        width: 100%;
        opacity: 0;
        transition: .5s ease;
        background-color: rgba(67, 68, 68, 0.7);
    }


    .detail {
        color: #fff;
        font-size: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
    }
</style>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Job Vacancy</h1>
    <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#NewJobModal">
        Create New Job Vacancy
    </button>
    <div class="row">

      <?php
      $i=0;
				foreach ($job_vacancy->result()as $row) {
        //  <!-- Product  -->
          echo'
          <div class="col-md-4 product-grid">
              <div class="image">
                  <a href="',base_url(),'company/detail/'.$row->id,'">
                      <img src="',base_url(),'berkas/'.$row->image,'" class="w-100">
                      <div class="overlay">
                          <div class="detail">View Details</div>
                      </div>
                  </a>
              </div>
              <h5 class="text-center">'.$row->company_name,'</h5>
              <h5 class="text-center">'.$row->requirement,'</h5>
          </div>';
          //<!-- ./Product -->
        }

      ?>




    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="NewJobModal" tabindex="-1" role="dialog" aria-labelledby="NewJobModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="NewJobModalLabel">Create New Job Vacancy</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="<?php echo base_url()?>company/add_job" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Company Name</label>
                        <input type="text" class="form-control" id="companyName" name="companyName" placeholder="Company Name">
                    </div>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="imageCompany" name="imageCompany" required="">
                            <label class="custom-file-label" for="validatedCustomFile">Choose Image File...</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Job Vacancy</label>
                        <input type="text" class="form-control" id="jobVacancy" name="jobVacancy" placeholder="Job Vacancy">
                    </div>
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="validationTextarea">Requirements</label>
                            <textarea class="form-control" id="requirement" name="requirement" placeholder="Fill in the blank.."></textarea>
                        </div>

                    </div>

                    <div class="form-group">
                        <div class="mb-3">
                            <label for="validationTextarea">Special Requirements</label>
                            <textarea class="form-control" id="special_requirement" name="special_requirement" placeholder="Fill in the blank.."></textarea>
                        </div>

                    </div>
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="validationTextarea">Note</label>
                            <textarea class="form-control" id="note" name="note" placeholder="Fill in the blank.."></textarea>
                        </div>

                    </div>
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="validationTextarea">Address</label>
                            <textarea class="form-control" id="address" name="address" placeholder="Fill in the blank.."></textarea>
                        </div>

                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="Submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
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
                <a class="btn btn-primary" href="<?php echo base_url()?>auth/logout">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url()?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url()?>assets/js/sb-admin-2.min.js"></script>

<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });



    $('.form-check-input').on('click', function() {
        const menuId = $(this).data('menu');
        const roleId = $(this).data('role');

        $.ajax({
            url: "<?php echo base_url()?>admin/changeaccess",
            type: 'post',
            data: {
                menuId: menuId,
                roleId: roleId
            },
            success: function() {
                document.location.href = "<?php echo base_url()?>admin/roleaccess/" + roleId;
            }

        });


    });
</script>




</div></body></html>
