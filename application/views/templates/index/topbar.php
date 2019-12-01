<!-- navigasi -->
<nav class="navbar navbar-expand-sm fixed-top pb-3 text-center bg">
    <!-- kontainer -->
    <div class="container">
        <!-- brand -->
        <a href="<?= base_url('user'); ?>">
            <img src="<?= base_url('assets/img/logo.png'); ?>" alt="" class="pr-5">
        </a>

        <!-- link konten -->
        <!-- SD -->
        <form action="" method="POST">
            <ul class="nav navbar-nav pl-5">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown">SD</a>
                    <div class="dropdown-menu pl-4">
                        <button class="list-item btn btn-white" value="1"><a href="<?= base_url('user/satu'); ?>">Kelas 1</a></button><br>
                        <button class="list-item btn btn-white" value="2"><a href="<?= base_url('user/dua'); ?>">Kelas 2</a></button><br>
                        <button class="list-item btn btn-white" value="3"><a href="<?= base_url('user/tiga'); ?>">Kelas 3</a></button><br>
                        <button class="list-item btn btn-white" value="4"><a href="<?= base_url('user/empat'); ?>">Kelas 4</a></button><br>
                        <button class="list-item btn btn-white" value="5"><a href="<?= base_url('user/lima'); ?>">Kelas 5</a></button><br>
                        <button class="list-item btn btn-white" value="6"><a href="<?= base_url('user/enam'); ?>">Kelas 6</a></button><br>
                    </div>
                </li>
                <li class="nav-item dropdown pl-5">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown">SMP</a>
                    <div class="dropdown-menu pl-4">
                        <button class="list-item btn btn-white" value="7"><a href="<?= base_url('user/tujuh'); ?>">Kelas 7</a></button><br>
                        <button class="list-item btn btn-white" value="8"><a href="<?= base_url('user/delapan'); ?>">Kelas 8</a></button><br>
                        <button class="list-item btn btn-white" value="9"><a href="<?= base_url('user/sembilan'); ?>">Kelas 9</a></button><br>
                    </div>
                </li>

                <li class="nav-item dropdown pl-5">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown">SMA</a>
                    <div class="dropdown-menu pl-4">
                        <button class="list-item btn btn-white" value="10"><a href="<?= base_url('user/sepuluh'); ?>">Kelas 10</a></button><br>
                        <button class="list-item btn btn-white" value="11"><a href="<?= base_url('user/sebelas'); ?>">Kelas 11</a></button><br>
                        <button class="list-item btn btn-white" value="12"><a href="<?= base_url('user/duabelas'); ?>">Kelas 12</a></button><br>
                    </div>
                </li>
            </ul>
        </form>

        <!-- Login -->
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline">Hai, <?= $user['name']; ?></span>
                    <img class="img-profile rounded-circle" width="25" src="<?= base_url('assets/img/') . $user['image']; ?>">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="<?= base_url('user/profil'); ?>">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profilku
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>
            </li>
        </ul>
    </div> <!-- akhir kontainer -->
</nav>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Yakin?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih "Logout" untuk keluar.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div><br><br><br><br>