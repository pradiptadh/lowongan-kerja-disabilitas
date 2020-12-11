<style>
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
    <h1 class="h3 mb-4 text-gray-800">Lowongan Ditunda </h1>

    <div class="row">

        <?php
        $i = 0;
        foreach ($list_jobvacancy->result() as $row) {
            //  <!-- Product  -->
            echo '
          <div class="col-md-4 product-grid">
              <div class="image">
                  <a href="', base_url(), 'admin/detailbaru/' . $row->id, '">
                      <img src="', base_url(), 'berkas/' . $row->image, '" class="w-100">
                      <div class="overlay">
                          <div class="detail">View Details</div>
                      </div>
                  </a>
              </div>
              <h5 class="text-center">' . $row->company_name, '</h5>
              <h5 class="text-center">' . $row->job_vacancy, '</h5>
              <h6 class="text-left" style="color:red;"">Belum Disetujui</h6>
          </div>';
            //<!-- ./Product -->
        }

        ?>


    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->