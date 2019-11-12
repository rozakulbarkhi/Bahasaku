 <!-- Begin Page Content -->
 <div class="container-fluid">

     <div class="row">
         <div class="col-lg-5">
             <?= $this->session->flashdata('message');  ?>
         </div>
     </div>

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800">Data Pengguna</h1>

     <table class="table table-bordered">
         <tr>
             <th>No</th>
             <th>Nama</th>
             <th>Email</th>
             <th>Tanggal Bergabung</th>
             <th>Aksi</th>
         </tr>

         <?php
            $no = 1;
            foreach ($pengguna as $p) {
                ?>
             <tr>
                 <td><?= $no++;  ?></td>
                 <td><?= $p->name; ?></td>
                 <td><?= $p->email; ?></td>
                 <td><?= date('d/m/Y', $p->date_created); ?></td>
                 <td>
                     <?= anchor('admin/hapus_pengguna/' . $p->id, "<button class='btn btn-danger'>Hapus</button>");  ?>
                 </td>
             </tr>

         <?php } ?>


     </table>





 </div>
 <!-- /.container-fluid -->

 </div>
 <!-- End of Main Content -->