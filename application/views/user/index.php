<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <link rel="stylesheet" href="style.css">

    <title>Bahasaku</title>
</head>

<body>
    <!-- navigasi -->
    <nav class="navbar navbar-expand-sm fixed-top pb-3 text-center bg">
        <!-- kontainer -->
        <div class="container">
            <!-- brand -->
            <a href="#">
                <img src="img/logo.png" alt="" class="pr-5">
            </a>

            <!-- link konten -->
            <!-- SD -->
            <ul class="nav navbar-nav pl-5">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">SD</a>
                    <div class="dropdown-menu pl-4">
                        <a href="<?= base_url('user/SD');  ?>" class="list-item">Kelas 1</a><br>
                        <a href="#" class="list-item">Kelas 2</a><br>
                        <a href="#" class="list-item">Kelas 3</a><br>
                        <a href="#" class="list-item">Kelas 4</a><br>
                        <a href="#" class="list-item">Kelas 5</a><br>
                        <a href="#" class="list-item">Kelas 6</a>
                    </div>
                </li>

                <li class="nav-item dropdown pl-5">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">SMP</a>
                    <div class="dropdown-menu pl-4">
                        <a href="#" class="list-item">Kelas 7</a><br>
                        <a href="#" class="list-item">Kelas 8</a><br>
                        <a href="#" class="list-item">Kelas 9</a><br>
                    </div>
                </li>

                <li class="nav-item dropdown pl-5">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">SD</a>
                    <div class="dropdown-menu pl-4">
                        <a href="#" class="list-item">Kelas 10</a><br>
                        <a href="#" class="list-item">Kelas 11</a><br>
                        <a href="#" class="list-item">Kelas 12</a><br>
                    </div>
                </li>
            </ul>

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
    </div>

    <div class="container">

        <h2 class="text-center"><strong>Kenapa harus memilih kami?</strong></h2>
        <hr class="hr-fitur">

        <div class="row">
            <div class="col-md-6">
                <img src="img/gratis.jpg" alt="">
            </div>

            <div class="col-md-6">
                <h4 class="pt-5 pr-5"><strong>Gratis</strong></h4>
                <p class="pr-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ducimus quam illum similique cumque ratione cupiditate dolorem voluptate pariatur hic, rerum, et tempora earum iure ullam, id ea numquam, soluta!</p>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-md-6">
                <h4 class="pt-5 pl-5"><strong>Gratis</strong></h4>
                <p class="pl-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ducimus quam illum similique cumque ratione cupiditate dolorem voluptate pariatur hic, rerum, et tempora earum iure ullam, id ea numquam, soluta!</p>
            </div>

            <div class="col-md-6">
                <img src="img/gratis.jpg" alt="">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <img src="img/gratis.jpg" alt="">
            </div>

            <div class="col-md-6">
                <h4 class="pt-5 pr-5"><strong>Gratis</strong></h4>
                <p class="pr-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ducimus quam illum similique cumque ratione cupiditate dolorem voluptate pariatur hic, rerum, et tempora earum iure ullam, id ea numquam, soluta!</p>
            </div>
        </div>
    </div> <!-- akhir kontainer -->
    <br><br>

    <!-- footer -->
    <footer class="page-footer bg">
        <div class="container">
            <!-- logo -->
            <div class="row">
                <div class="col-md-4 pt-5">
                    <a href="#"><img src="img/logo.png" alt=""></a><br><br>
                    <a href="#" class="list-footer">Beranda -</a>
                    <a href="#" class="list-footer">Forum -</a>
                    <a href="#" class="list-footer">Testimoni -</a>
                    <a href="#" class="list-footer">Kontak</a><br>
                    <p class="list-footer"> Bahasaku &copy; 2019</p>
                </div>

                <div class="col-md-4 pt-5">
                    <p class="list-footer"><i class="fas fa-map-marker-alt pr-3"></i>Gedung D5 Ilmu Komputer UNNES</p>
                    <p class="list-footer"><i class="fas fa-mobile-alt pr-3"></i> 082 334 673 247</p>
                    <p class="list-footer"><i class="fas fa-envelope pr-3"></i>team.bahasaku@gmail.com</p>
                </div>

                <div class="col-md-4 pt-5">
                    <h5 class="list-footer">Tentang Bahasaku</h5>
                    <p class="list-footer">Bahasaku adalah sebuah media pembelajaran berbasis web yang menyediakan berbagai materi sesuai dengan kurikulum yang terbaru. </p>
                    <p class="list-footer"><i class="fab fa-facebook-f pr-4"></i><i class="fab fa-instagram pr-4"></i>
                        <i class="fab fa-twitter pr-4"></i><i class="fab fa-youtube"></i></p>
                </div>

            </div>

        </div> <!-- akhir container -->
        <br>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>


</body>

</html>