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
    <h1 class="h3 mb-4 text-gray-800">Lowongan Kerja Admin</h1>
    <?= $this->session->flashdata('message'); ?>
    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#NewJobModal">
        Buat Lowongan Kerja Baru
    </a>

    <div class="row">

        <?php
        $i = 0;
        foreach ($jobvacancy->result() as $row) {
            //  <!-- Product  -->
            echo '
          <div class="col-md-4 product-grid">
              <div class="image">
                  <a href="', base_url(), 'admin/detailbaru2/' . $row->id, '">
                      <img src="', base_url(), 'berkas/' . $row->image, '" class="w-100">
                      <div class="overlay">
                          <div class="detail">View Details</div>
                      </div>
                  </a>
              </div>
              <h5 class="text-center">' . $row->company_name, '</h5>
              <h5 class="text-center">' . $row->job_vacancy, '</h5>
          </div>';
            //<!-- ./Product -->
        }

        ?>


    </div>
    <!-- /.container-fluid -->

</div>

<!-- Modal -->
<div class="modal fade" id="NewJobModal" tabindex="-1" role="dialog" aria-labelledby="NewJobModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="NewJobModalLabel">Buat Lowongan Kerja Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="<?php echo base_url() ?>admin/add_job" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Nama Perusahaan</label>
                        <input required type="text" class="form-control" id="companyName" name="companyName" placeholder="Contoh : PT Maju Terus">
                        <input required type="hidden" class="form-control" id="companyId" value="<?= $user['id']; ?>" name="companyId" placeholder="Company Name">
                    </div>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="imageCompany" name="imageCompany" required="">
                            <label class="custom-file-label" for="validatedCustomFile">Pilih Gambar Perusahaan...</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Jenis Pekerjaan</label>
                        <input required type="text" class="form-control" id="jobVacancy" name="jobVacancy" placeholder="Contoh: Administrator">
                    </div>
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="validationTextarea">Kriteria Umum</label>
                            <textarea required class="form-control" id="requirement" name="requirement" placeholder="Contoh: mampu Bekerja Dalam Team"></textarea>
                        </div>

                    </div>

                    <div class="form-group">
                        <div class="mb-3">
                            <label for="validationTextarea">Kriteria Khusus</label>
                            <textarea required class="form-control" id="special_requirement" name="special_requirement" placeholder="Contoh: Semua Jenis Disabilitas"></textarea>
                        </div>

                    </div>
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="validationTextarea">Catatan Lain</label>
                            <textarea required class="form-control" id="note" name="note" placeholder="Contoh: Mempunyai pengalaman menjadi nilai plus"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="validationTextarea">Alamat Perusahaan</label>
                            <textarea required class="form-control" id="address" name="address" placeholder="Contoh: Jakarta"></textarea>
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