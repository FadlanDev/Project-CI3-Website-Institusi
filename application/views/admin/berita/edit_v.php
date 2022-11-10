<div class="col-lg-20">
    <div class="panel panel-success">
        <div class="panel-heading">EDIT DATA</div>
        <br class="panel-body">

        <?php

        if (isset($error_upload)) {
            echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
        }

        echo validation_errors('<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div');

        echo form_open_multipart('berita/edit/' . $berita->id_berita);

        ?>

        <div div class="form-group">
            <label>Judul Berita</label>
            <input class="form-control" value="<?= $berita->judul_berita ?>" type="text" name="judul_berita" placeholder="Masukan Judul Berita" required>
        </div>

        <div class="form-group">
            <label>Tanggal Posting</label>
            <input class="form-control" type="date" name="tgl_berita" placeholder="Tanggal Posting" required value="<?= $berita->tgl_berita ?>">
        </div>

        <div class="form-group">
            <label>Isi Berita</label>
            <textarea type="text" name="isi_berita" placeholder="Isi Berita" required><?= $berita->isi_berita ?></textarea>
        </div>

        <div class="form-group">
            <label>Foto Berita</label> </br>
            <img src="<?= base_url('gambar_berita/' . $berita->gambar_berita) ?>" width="250px">
        </div>

        <div class="form-group">
            <label>Ganti Foto Berita</label>
            <input type="file" class="form-control" value="<?= $berita->gambar_berita ?>" type="text" name="gambar_berita">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Simpan / Save</button>
            <button type="reset" class="btn btn-danger">Reset / Batal</button>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>
</div>