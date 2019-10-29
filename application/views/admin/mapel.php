<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Mata Pelajaran
        <span class="float-right">
            <a href="#" class="btn btn-primary">
                Tambah Materi
            </a>
        </span>
    </h1>
    <div class="row">
        <div class="col-lg-8">

            <div class="form-group row">
                <label for="name" class="col-sm-3 col-form-label">Kelas</label>
                <div class="col-sm-9">
                    <select class="custom-select">
                        <option selected>Masukkan Kelas</option>
                        <?php
                        for ($i = 1; $i < 13; $i++) {
                            echo '<option value="' . $i . '">' . $i . '</option>';
                        } ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-3 col-form-label">Nama Materi</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan nama materi..">
                </div>
            </div>
            <div class="form-group row">
                <label for="tambahmateri" class="col-sm-3 col-form-label">Masukkan Materi</label>
                <div class="col-sm-9">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Pilih file</label>
                    </div>
                </div>
            </div>
            <div class="form-group row justify-content-end">
                <div class="col-sm-9">
                    <button class="btn btn-primary">Masukkan</button>
                </div>

            </div>

            </form>

        </div>

    </div>

</div>
<!-- /.container-fluid -->

</div>