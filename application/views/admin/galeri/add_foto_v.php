<div class="col-lg-20">
    <div class="panel panel-green">
        <div class="panel-heading">ADD FOTO GALERI</div>
        <div class="panel-body">

            <?php

            if (isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
            }

            echo validation_errors('<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div');

            if ($this->session->flashdata('pesan')) {
                echo '<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                echo $this->session->flashdata('pesan');
                echo '</div>';
            }

            echo form_open_multipart('galeri/add_foto/' . $galeri->id_galeri);

            ?>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Keterangan Foto</label>
                    <input type="text" class="form-control" type="text" name="keterangan" placeholder="Masukan Keterangan Foto" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Foto</label>
                    <input type="file" class="form-control" type="text" name="gambar" required>
                </div>
            </div>

            </br>

            <div class="form-group">
                <button type="submit" class="btn btn-success">Simpan / Save</button>
                <a style="color: white;" href="<?= base_url('galeri') ?>" class="btn btn-danger">Kembali / Back</a>
            </div>
            <?php echo form_close(); ?>

            <hr>

            <?php foreach ($foto as $key => $value) { ?>
                <div class="col-sm-3 text-center">
                    <label><?= $value->keterangan ?></label>
                    <img src="<?= base_url('gambar/' . $value->gambar) ?>" width="228px" height="228px">
                    <br>
                    <a style="color: white;" href="<?= base_url('galeri/delete_foto/' . $value->id_galeri . '/' . $value->id_foto) ?>" onclick="return confirm ('Apakah anda yakin data ini akan dihapus.. ?')" class="btn btn-danger btn-block"><i class="fa fa-trash"></i>Delete</a>
                    <br>
                </div>
            <?php } ?>
        </div>
    </div>
</div>