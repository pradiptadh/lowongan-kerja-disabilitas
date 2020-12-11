        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


            <div class="row">
                <div class="col-lg">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Pelamar</th>
                                <th scope="col">Tempat</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Pendidikan Terakhir</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">No HP</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Jenis Disabilitas</th>
                                <th scope="col">kompetensi</th>

                            </tr>
                        </thead>
                        <tr>
                            <?php $i = 1; ?>
                            <?php foreach ($datapelamar as $j) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $j['nama']; ?></td>
                            <td><?= $j['tempat']; ?></td>
                            <td><?= date('d F Y', strtotime($j['tanggal_lahir'])); ?></td>
                            <td><?= $j['jenis_kelamin']; ?></td>
                            <td><?= $j['Pendidikan_Terakhir']; ?></td>
                            <td><?= $j['alamat']; ?></td>
                            <td><?= $j['no_hp']; ?></td>
                            <td><img src='<?= base_url() ?>berkas_pelamar/<?= $j['foto']; ?>' width="100" height="100"></td>
                            <td><?= $j['jenis_disabilitas']; ?></td>
                            <td><?= $j['kompetensi']; ?></td>



                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>

                    </tr>
                    </table>
                </div>

            </div>

        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->