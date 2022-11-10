<div class="col-lg-20">
    <div class="panel panel-primary">
        <div class="panel-heading">EDIT DATA</div>
        <div class="panel-body">

            <?php

            if (isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
            }

            echo form_open_multipart('mahasiswa/edit/' . $mahasiswa->id_mahasiswa);
            ?>

            <div class="form-group">
                <label>NPM</label>
                <input class="form-control" type="text" name="npm" value="<?= $mahasiswa->npm ?>" placeholder="Masukan Angka / NPM" required>
            </div>

            <div class="form-group">
                <label>Nama Mahasiswa</label>
                <input class="form-control" type="text" name="nama_mahasiswa" value="<?= $mahasiswa->nama_mahasiswa ?>" placeholder="Masukan Nama Mahasiswa" required>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input class="form-control" type="text" name="tempat_lahir" value="<?= $mahasiswa->tempat_lahir ?>" placeholder="Tempat Lahir" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input class="form-control" type="date" name="tgl_lahir" value="<?= $mahasiswa->tgl_lahir ?>" placeholder="Tanggal Lahir" required>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Kelas</label>
                    <select name="kelas" class="form-control">
                        <option value="<?= $mahasiswa->kelas ?>"><?= $mahasiswa->kelas ?></option>
                        <option value="Sistem Informasi">Sistem Informarsi</option>
                        <option value="Teknik Komputer">Teknik Komputer</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Komputerisasi Akuntansi">Komputerisasi Akuntansi</option>
                        <option value="Management Informatika">Management Informatika</option>
                        <option value="Informasi Teknologi">Informasi Teknologi</option>
                        <option value="Rekayasa Perangkat_Lunak">Rekayasa Perangkat Lunak</option>
                        <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                        <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                        <option value="Sistem Komputer">Sistem Komputer</option>
                        <option value="Ilmu Komputer">Ilmu Komputer</option>
                        <option value="Teknik Elektro">Teknik Elektro</option>
                        <option value="Teknik Elektromatika">Teknik Elektromatika</option>
                        <option value="Ilmu Data Scientist">Ilmu Data Scientist</option>
                        <option value="Ilmu Data Analityc">Ilmu Data Analityc</option>
                        <option value="Ilmu Statistik">Ilmu Statistik</option>
                    </select>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label>Ganti Foto</label>
                    <input type="file" class="form-control" type="text" name="foto_mahasiswa">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <img src="<?= base_url('./foto_mahasiswa/' . $mahasiswa->foto_mahasiswa) ?>" width="150px"></br>
                    </br>
                    <label>~ Foto Mahasiswa ~</label>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Simpan / Save</button>
                    <button type="reset" class="btn btn-danger">Reset / Batal</button>
                </div>
            </div>
        </div>
    </div>
</div>