</div><br><br><br><br><br>

<!-- Konten -->
<div class="container">
    <div class="row">
        <div class="col-7">
            <?php
            $link = $dua['kode'];
            ?>

            <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $link; ?>" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="col-5">
            <h5>Materi Kelas 2 SD</h5><br>
            <?php
            foreach ($video as $v) : ?>
                <?php
                    $kelas = $v['kelas'];
                    $judul = $v['judul'];
                    $link  = $v['kode'];
                    echo "<a href='?kode=$link'>$judul</a>";
                    ?>

            <?php endforeach ?>

        </div>
    </div>
</div> <!-- akhir -->