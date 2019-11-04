 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('user');  ?>">
         <div class="sidebar-brand-icon rotate-n-15">
         </div>
         <img src="<?= base_url('img/logo.png'); ?>" alt="">
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('user/profil'); ?>">
             <i class="fas fa-fw fa-user"></i>
             <span>Profilku</span></a>
     </li>

     <!-- Nav Item - Pages Collapse Menu -->
     <div class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
             <i class="fas fa-fw fa-book"></i>
             <span>Pengaturan</span>
         </a>
         <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <a class="collapse-item" href="<?= base_url('user/edit'); ?>">Edit Profil</a>
                 <a class="collapse-item" href="">Password</a>
             </div>
         </div>
     </div>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>

 </ul>
 <!-- End of Sidebar -->