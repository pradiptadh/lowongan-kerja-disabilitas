 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800">Informasi Lowongan Ditunda</h1>

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
                     <h5 class="card-text">Alamat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $address; ?></small></h5>
                 </div>
                 <form action="<?php echo base_url() ?>admin/approve" method="post">
                     <input type="hidden" name="id" value="<?php echo $id; ?>">
                     <button type="submit" class="btn btn-success col-md-4" Style="margin-left: 10px;">Approve</button>

                 </form>
                 <br>
                 <form action="<?php echo base_url() ?>admin/revoke" method="post">
                     <input type="hidden" name="id" value="<?php echo $id; ?>">
                     <button type="submit" class="btn btn-danger col-md-4" Style="margin-left: 10px;">Revoke</button>
                 </form>
                 <br>
             </div>
         </div>
     </div>
 </div>
 <!-- /.container-fluid -->

 </div>
 <!-- End of Main Content -->