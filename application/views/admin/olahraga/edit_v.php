<div class="col-lg-12">
    <div class="panel panel-yellow">
        <div style="color: black;" div class="panel-heading">EDIT DATA</div>
        <div class="panel-body">
            <?php

            echo validation_errors('<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '<div>');

            if (isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '<div>';
            }

            echo form_open_multipart('olahraga/edit/' . $olahraga->kd_olahraga);
            ?>

            <div class="from_group">
                <label>Nama Olahraga</label>
                <input class="form-control" value="<?= $olahraga->nm_olahraga ?>" type="text" name="nm_olahraga" placeholder="Masukan Nama Olahraga" required>
            </div>

            <br>

            <div class="form-group">
                <label>Jadwal Latihan</label>
                <select name="jadwal" class="form-control">
                    <option value="<?= $olahraga->jadwal ?>"><?= $olahraga->jadwal ?></option>
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jumat">Jumat</option>
                    <option value="Sabtu">Sabtu</option>
                    <option value="Minggu">Minggu</option>
                </select>
            </div>

            <div class="from_group">
                <img src="<?= base_url('foto_olahraga/' . $olahraga->foto_olga) ?>" width="150px">
            </div>

            <div class="from_group">
                <label>Ganti Foto</label>
                <input type="file" class="form-control" type="text" name="foto_olga">
            </div>

            <br>

            <div class="form_group">
                <button type="sumbit" class="btn btn-success">Save / Simpan</button>
                <button type="reset" class="btn btn-danger">Reset / Batal</button>
            </div>
        </div>
    </div>
</div>