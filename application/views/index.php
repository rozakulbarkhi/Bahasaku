<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="assets/img/icon.png" type="image/png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

  <title>Bahasaku</title>
</head>

<body>
  <!-- navigasi -->
  <nav class="navbar navbar-expand-sm fixed-top pb-3 text-center bg">
    <!-- kontainer -->
    <div class="container">
      <!-- brand -->
      <a href="<?= base_url('user'); ?>">
        <img src="<?= base_url('assets/img/logo.png'); ?>" alt="" class="pr-5">
      </a>

      <style>
        .cek:hover {
          color: white;
        }
      </style>

      <!-- link konten -->
      <!-- SD -->
      <ul class="nav navbar-nav pl-5">
        <li class="nav-item dropdown">
          <a href="" class="nav-link dropdown-toggle cek" data-toggle="dropdown">SD</a>
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
          <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">SMP</a>
          <div class="dropdown-menu pl-4">
            <button class="list-item btn btn-white" value="7"><a href="<?= base_url('user/tujuh'); ?>">Kelas 7</a></button><br>
            <button class="list-item btn btn-white" value="8"><a href="<?= base_url('user/delapan'); ?>">Kelas 8</a></button><br>
            <button class="list-item btn btn-white" value="9"><a href="<?= base_url('user/sembilan'); ?>">Kelas 9</a></button><br>
          </div>
        </li>

        <li class="nav-item dropdown pl-5">
          <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">SMA</a>
          <div class="dropdown-menu pl-4">
            <button class="list-item btn btn-white" value="10"><a href="<?= base_url('user/sepuluh'); ?>">Kelas 10</a></button><br>
            <button class="list-item btn btn-white" value="11"><a href="<?= base_url('user/sebelas'); ?>">Kelas 11</a></button><br>
            <button class="list-item btn btn-white" value="12"><a href="<?= base_url('user/duabelas'); ?>">Kelas 12</a></button><br>
          </div>
        </li>
      </ul>

      <!-- Login -->
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('auth/login'); ?>"><span class="fas fa-sign-in-alt pr-2"></span> Login</a>
        </li>
      </ul>
    </div> <!-- akhir kontainer -->
  </nav>

  <!-- carousel -->
  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?= base_url('assets/img/belajar.jpg'); ?>" alt="slide pertama" width="100%">
        <div class="carousel-caption">
          <h5 class="carousel"> <strong> Perkembangan E-Learning di Indonesia</strong></h5>
          <p class="carousel">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit dolore alias reprehenderit pariatur facilis quos, sit soluta quibusdam nemo a quasi, odio, dolorem magni maiores saepe distinctio officiis voluptas. Officia.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?= base_url('assets/img/belajar.jpg'); ?>" alt="slide kedua" width="100%">
      </div>
      <div class="carousel-item">
        <img src="<?= base_url('assets/img/belajar.jpg'); ?>" alt="slide ketiga" width="100%">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
  <br><br><br>

  <div class="container">
    <!-- testimoni -->
    <h2 class="text-center"><strong>Kata Mereka?</strong></h2>
    <hr class="hr-about">
    <br>
    <div class="row">
      <div class="col-md-4">
        <div class="img-thumbnail">
          <img src="https://upload.wikimedia.org/wikipedia/en/thumb/3/3b/SpongeBob_SquarePants_character.svg/1200px-SpongeBob_SquarePants_character.svg.png" alt="" class="img-fluid rounded-circle ml-5 mt-3" width="250">
          <br><br>
          <div class="caption">
            <p class="text-center">"Dengan materi yang berkualitas dari <i>Bahasaku</i>,
              saya bisa lebih mudah memahami mata pelajaran Bahasa Indonesia" - <strong>Spongebob</strong>, <i>Ilmu Kelautan</i></p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="img-thumbnail">
          <img src="https://upload.wikimedia.org/wikipedia/en/thumb/3/33/Patrick_Star.svg/1200px-Patrick_Star.svg.png" alt="" class="img-fluid rounded-circle ml-5 mt-3" width="250">
          <br><br>
          <div class="caption">
            <p class="text-center">"<i>Bahasaku</i> menerapkan metode pembelajaran yang berfokus pada konsep,
              jadi tidak hanya hafalan saja. Saya suka! - <strong>Patrick Star</strong>, <i>Teknik Menyelam</i>"</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="img-thumbnail">
          <img src="https://upload.wikimedia.org/wikipedia/en/thumb/8/8f/Squidward_Tentacles.svg/1200px-Squidward_Tentacles.svg.png" alt="" class="img-fluid rounded-circle ml-5 mt-3" width="250">
          <br><br>
          <div class="caption">
            <p class="text-center">"Belajar di <i>Bahasaku</i> mengajarkanku apa artinya kenyamanan dan kesempurnaannya bahasa Indonesia. - <strong>Squidward</strong>, <i>Teknik budidaya ubur-ubur</i>"</p>
          </div>
        </div>
      </div>

    </div><br><br><br>

    <h2 class="text-center"><strong>Kenapa harus memilih kami?</strong></h2>
    <hr class="hr-fitur">
    <div class="row">
      <div class="col-md-6">
        <h4 class="pt-5 pr-5"><strong>Berfokus pada Bahasa Indonesia</strong></h4>
        <p class="pr-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ducimus quam illum
          similique cumque ratione cupiditate dolorem voluptate pariatur hic, rerum, et tempora earum iure
          ullam, id ea numquam, soluta!</p>
      </div>
      <div class="col-md-6">
        <img src="<?= base_url('assets/img/target.png'); ?>" width="200" alt="">
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <img src="<?= base_url('assets/img/gratiss.png'); ?>" width=" 200" alt="">
      </div>
      <div class="col-md-6">
        <h4 class="pt-5"><strong>Bebas Biaya</strong></h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ducimus quam illum
          similique cumque ratione cupiditate dolorem voluptate pariatur hic, rerum, et tempora earum iure
          ullam, id ea numquam, soluta!</p>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-6">
        <h4 class="pt-5"><strong>Untuk Segala Jenjang</strong></h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ducimus quam illum
          similique cumque ratione cupiditate dolorem voluptate pariatur hic, rerum, et tempora earum iure
          ullam, id ea numquam, soluta!</p>
      </div>
      <div class="col-md-6">
        <img src="<?= base_url('assets/img/luas.png'); ?>" width="200" alt="">
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <img src="<?= base_url('assets/img/random.png'); ?>" width="250" alt="">
      </div>
      <div class="col-md-6">
        <h4 class="pt-5 pr-5"><strong>Meningkatkan Imajinasi dan Prestasi</strong></h4>
        <p class="pr-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ducimus quam illum
          similique cumque ratione cupiditate dolorem voluptate pariatur hic, rerum, et tempora earum iure
          ullam, id ea numquam, soluta!</p>
      </div>
    </div>
  </div> <!-- akhir kontainer -->
  <br><br>

  <!-- footer -->
  <footer class="page-footer bg">
    <div class="container">
      <!-- logo -->
      <div class="row foot">
        <div class="col-md-4 pt-5">
          <a href="#"><img src="<?= base_url() . 'assets/img/logo.png'; ?> " alt=""></a><br><br>
          <a href="#" class="list-footer">Beranda -</a>
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
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>

</html>