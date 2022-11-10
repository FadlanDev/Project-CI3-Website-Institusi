<div class="col-lg-12">
    <div class="panel panel-red">
        <div class="panel-heading">EDIT DATA</div>
        <div class="panel-body">

            <?php

            echo validation_errors('<div class=alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div>');

            if (isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
            }

            echo form_open_multipart('dosen/edit/' . $dosen->id_dosen);
            ?>

            <div class="form-group">
                <label>NIP</label>
                <input class="form-control" value="<?= $dosen->nip ?>" type="text" name="nip" placeholder="NIP" required>
            </div>

            <div class="form-group">
                <label>Nama Dosen</label>
                <input class="form-control" value="<?= $dosen->nama_dosen ?> " type="text" name="nama_dosen" placeholder="Nama guru" required>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input class="form-control" value="<?= $dosen->tempat_lahir ?>" type="text" name="tempat_lahir" placeholder="Tempat Lahir" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input class="form-control" value="<?= $dosen->tgl_lahir ?>" type="date" name="tgl_lahir" placeholder="Tanggal Lahir" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Nama MataKuliah</label>
                    <select name="id_mapel" class="form-control">
                        <option value="<?= $dosen->id_mapel ?>"><?= $dosen->nama_mapel ?></option>
                        <?php foreach ($mapel as $key => $value) { ?>
                            <option value="<?= $value->id_mapel ?>"><?= $value->nama_mapel ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Pendidikan</label>
                    <select name="pendidikan" class="form-control">
                        <option value="<?= $dosen->pendidikan ?>"><?= $dosen->pendidikan ?></option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                        <option value="Prof">Professor</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <img src="<?= base_url('asset/' . $dosen->foto_dosen) ?>" width="200px"></br>
            </div>
            <div class="form-group">
                <label>Ganti Foto</label>
                <input type="file" class="form-control" type="text" name="foto_dosen" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Simpan / Save</button>
                <button type="reset" class="btn btn-danger">Reset / Batal</button>
            </div>
        </div>
    </div>
</div>
</div>