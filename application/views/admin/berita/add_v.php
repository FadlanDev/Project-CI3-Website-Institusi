<div class="col-lg-20">
    <div class="panel panel-success">
        <div class="panel-heading">ADD DATA</div>
        <div class="panel-body">

            <?php

            if (isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
            }

            echo validation_errors('<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div');

            echo form_open_multipart('berita/add');

            ?>

            <div div class="form-group">
                <label>Judul Berita</label>
                <input class="form-control" type="text" name="judul_berita" placeholder="Masukan Judul Berita" required>
            </div>

            <div class="form-group">
                <label>Tanggal Posting</label>
                <input class="form-control" type="date" name="tgl_berita" placeholder="Tanggal Posting" required>
            </div>

            <div class="form-group">
                <label>Foto Berita</label>
                <input type="file" class="form-control" type="text" name="gambar_berita" required>
            </div>

            <div class="form-group">
                <label>Isi Berita</label>
                <textarea name="isi_berita" placeholder="Isi Berita" required></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">Simpan / Save</button>
                <button type="reset" class="btn btn-danger">Reset / Batal</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>