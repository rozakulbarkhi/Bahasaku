 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800">Video
         <span class="float-right">
             <a href="<?= base_url('admin/tambah_video'); ?>" class="btn btn-primary">
                 Tambah Video
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
             <th>Link</th>
             <th>Aksi</th>
         </tr>

         <?php
            $no = 1;
            foreach ($video as $v) {
                ?>
             <tr>
                 <td><?= $no++;  ?></td>
                 <td><?= $v['kelas']; ?></td>
                 <td><?= $v['judul']; ?></td>
                 <td><?= $v['kode']; ?></td>
                 <td>
                     <?= anchor('admin/edit_video/' . $v['id'], "<button class='btn btn-info'>Edit</button>");  ?>
                     <?= anchor('admin/hapus_video/' . $v['id'], "<button class='btn btn-danger'>Hapus</button>"); ?>
                 </td>
             </tr>
         <?php } ?>
     </table>

 </div>
 <!-- /.container-fluid -->

 </div>
 <!-- End of Main Content -->