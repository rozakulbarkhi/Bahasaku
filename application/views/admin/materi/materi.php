 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800">Materi
         <span class="float-right">
             <a href="<?= base_url('admin/tambah_materi'); ?>" class="btn btn-primary">
                 Tambah Materi
             </a>
         </span>
     </h1>

     <div class="row">
         <div class="col-lg-5">
             <?= $this->session->flashdata('message');  ?>
         </div>
     </div>

     <table class="table table-bordered">
         <tr>
             <th>No</th>
             <th>Kelas</th>
             <th>Judul</th>
             <th>File</th>
             <th>Aksi</th>
         </tr>

         <?php
            $no = 1;
            foreach ($materi as $m) {
                ?>
             <tr>
                 <td><?= $no++; ?></td>
                 <td><?= $m['kelas']; ?></td>
                 <td><?= $m['judul']; ?></td>
                 <td><a href=""> <?= $m['file']; ?></a></td>
                 <td>
                     <?= anchor('admin/edit_materi/' . $m['id'], "<button class='btn btn-info'>Edit</button>");  ?>
                     <?= anchor('admin/hapus_materi/' . $m['id'], "<button class='btn btn-danger'>Hapus</button>"); ?>
                 </td>
             </tr>
         <?php } ?>
     </table>

 </div>
 <!-- /.container-fluid -->

 </div>
 <!-- End of Main Content -->