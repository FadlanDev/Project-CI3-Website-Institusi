<div class="col-lg-20">
    <div class="panel panel-green">
        <div class="panel-heading">EDIT GALERI</div>
        <div class="panel-body">

            <?php

            if (isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
            }

            echo validation_errors('<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div');

            echo form_open_multipart('galeri/edit/' . $galeri->id_galeri);

            ?>

            <div class="form-group">
                <label>Nama Galeri</label>
                <input type="text" class="form-control" value="<?= $galeri->nama_galeri ?>" type="text" name="nama_galeri" placeholder="Masukan Nama Galeri" required>
            </div>

            <div class="form-group">
                <label>Sampul</label> </br>
                <img src="<?= base_url('sampul/' . $galeri->sampul) ?>" width="300px">
            </div>

            <div class="form-group">
                <label>Ganti Sampul</label>
                <input type="file" class="form-control" value="<?= $galeri->sampul ?>" type="text" name="sampul">
            </div>

            </br>

            <div class="form-group">
                <button type="submit" class="btn btn-success">Simpan / Save</button>
                <button type="reset" class="btn btn-danger">Reset / Batal</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>