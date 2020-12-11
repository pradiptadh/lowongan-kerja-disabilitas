        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Detail Lowongan Kerja</h1>

            <div class="row">
                <div class="col-lg-6">
                </div>
            </div>

            <div class="card mb-3" style="max-width: 100%;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?php echo base_url() ?>berkas/<?php echo $image; ?>" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Nama Perusahaan : <?php echo $company_name; ?></h5>
                            <h5 class="card-text">Lowongan Kerja&nbsp; &nbsp; &nbsp;: <?php echo $job_vacancy; ?></h5>
                            <h5 class="card-text">Kriteria Umum &nbsp; &nbsp; &nbsp; &nbsp;: <?php echo $requirement; ?></h5>
                            <h5 class="card-text">Kriteria Khusus &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $special_requirements; ?></h5>
                            <h5 class="card-text">Deskripsi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $note; ?></h5>
                            <h5 class="card-text">Alamat  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $address; ?></small></h5>
                        </div>
                        <a href="" class="btn btn-primary mb-3 col-md-4 " data-toggle="modal" data-target="#NewJobModal" Style="margin-left: 10px;">
                            Lamar Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->




        <!-- Modal -->
        <div class="modal fade" id="NewJobModal" tabindex="-1" role="dialog" aria-labelledby="NewJobModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="NewJobModalLabel">Masukkan Data Diri Anda</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form action="<?php echo base_url() ?>user/add_data_pelamar" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Nama</label>
                                <input type="hidden" class="form-control" id="idPerusahaan" name="idPerusahaan" value="<?= $id_perusahaan ?>" placeholder="Nama">
                                <input required type="text" class="form-control" id="namaPelamar" name="namaPelamar" placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Tempat Lahir</label>
                                <input required type="text" class="form-control" id="tempat" name="tempat" placeholder="Contoh : jakarta">
                            </div>

                            <div class="form-group">
                                <label for="formGroupExampleInput">Tanggal Lahir</label>
                                <input required type="date" class="form-control" id="ttl" name="ttl" placeholder="Contoh : 28/07/1998">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Jenis Kelamin</label>
                                <select class="form-control" name="jenisKelamin" id="jenisKelamin">
                                    <option>-- Pilih Jenis Kelamin --</option>
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Pendidikan Terakhir</label>
                                <select class="form-control" name="pendidikanTerakhir" id="jenisKpendidikanTerakhirelamin">
                                    <option>-- Pilih Pendidikan Terakhir --</option>
                                    <option value="S3">S3</option>
                                    <option value="S2">S2</option>
                                    <option value="S1">S1</option>
                                    <option value="SMK">SMK</option>
                                    <option value="SMA">SMA</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SD">SD</option>

                                </select>
                            </div>

                            <div class="form-group">
                                <div class="mb-3">
                                    <label for="validationTextarea">Alamat Rumah</label>
                                    <textarea required class="form-control" id="alamat" name="alamat" placeholder="Alamat Rumah"></textarea>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Nomer Hp</label>
                                <input required type="text" class="form-control" id="noHp" name="noHp" placeholder="Contoh : 081234567891">
                            </div>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="fotoPelamar" name="fotoPelamar" required="">
                                    <label class="custom-file-label" for="validatedCustomFile">Pilih Foto 3x4...</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="formGroupExampleInput">Jenis Disabilitas</label>
                                <select class="form-control" name="jenisDisabilitas" id="jenisDisabilitas">
                                    <option>-- Pilih Jenis Disabilitas --</option>
                                    <option value="Disabilitas Fisik">Disabilitas Fisik</option>
                                    <option value="Disabilitas Rumah">Disabilitas Sensorik</option>
                                    <option value="Disabilitas Mental">Disabilitas Intelektual</option>


                                </select>
                            </div>

                            <div class="form-group">
                                <label for="formGroupExampleInput">Komputensi Yang Dimiliki</label>
                                <select class="form-control" name="kompetensi" id="kompetensi">
                                    <option>-- Pilih Kompetensi --</option>
                                    <option value="Komputer">Komputer</option>
                                    <option value="Elektronika">Elektronika</option>
                                    <option value="Otomotif">Otomotif</option>
                                    <option value="Pekerjaan Logam">Pekerjaan Logam</option>
                                    <option value="Desain Grafis">Desain Grafis</option>
                                    <option value="Pejahitan">Pejahitan</option>


                                </select>
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