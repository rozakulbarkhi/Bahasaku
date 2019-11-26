<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tambah Materi
        <span class="float-right">
            <a href="<?= base_url('admin/materi'); ?>" class="btn btn-primary">Kembali</a>
        </span>
    </h1>
    <div class="row">
        <div class="col-lg-8">

            <?= form_open_multipart('admin/update'); ?>

            <div class="form-group row">
                <input type="hidden" name="id" value="<?= $materi->id; ?>">
                <label for="kelas" class="col-sm-3 col-form-label">Kelas</label>
                <div class="col-sm-9">
                    <select class="custom-select" name="kelas">
                        <option selected>Masukkan Kelas</option>
                        <?php
                        for ($i = 1; $i < 13; $i++) {
                            echo '<option value="' . $i . '">' . $i . '</option>';
                        } ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="judul" class="col-sm-3 col-form-label">Judul</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="judul" placeholder="Masukkan judul materi.." value="<?= $materi->judul;  ?>">
                    <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="judul" class="col-sm-3 col-form-label">Masukkan URL</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="url" placeholder="Masukkan URL.." value="<?= $materi->url; ?>">
                    <?= form_error('url', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="file" class="col-sm-3 col-form-label">Masukkan File</label>
                <div class="custom-file col-sm-8">
                    <input type="file" class="custom-file-input" name="file" value="<?= $materi->file; ?>">
                    <label class="custom-file-label" for="file">Pilih file</label>
                    <?= form_error('file', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row justify-content-end">
                <div class="col-sm-9">
                    <button class="btn btn-primary">Masukkan</button>
                </div>

            </div>

            <?= form_close();  ?>

        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>