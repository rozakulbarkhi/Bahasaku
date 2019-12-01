<!-- Konten -->
<br><br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-7">
            <?php
            $link = $enam['kode'];
            ?>

            <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $link; ?>" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="col-5">
            <h5>Materi Kelas 6 SD</h5><br>
            <?php
            foreach ($video as $v) : ?>
                <?php
                    $judul = $v['judul'];
                    $link  = $v['kode'];
                    ?>

                <a href="?kode= . <?= $link ?>"><?= $judul; ?></a>

            <?php endforeach ?>

        </div>
    </div>
</div> <!-- akhir -->