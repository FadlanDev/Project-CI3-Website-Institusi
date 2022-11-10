<div class="col-lg-20">
    <div class="panel panel-success">
        <div class="panel-heading">ADD DATA</div>
        <div class="panel-body">

            <?php

            echo form_open_multipart('pengumuman/add');

            ?>

            <div class="form-group">
                <label>Judul Pengumuman</label>
                <input class="form-control" type="text" name="judul_pengumuman" placeholder="Masukan Judul Pengumuman" required>
            </div>

            <div class="form-group">
                <label>Isi Pengumuan</label>
                <textarea class="form-control" type="text" name="isi_pengumuman" placeholder="Isi Pengumuman"></textarea>
            </div>

            <div class="form-group">
                <label>Tanggal Posting</label>
                <input class="form-control" type="date" name="tgl" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Simpan / Save</button>
                <button type="reset" class="btn btn-danger">Reset / Batal</button>
            </div>
        </div>
    </div>
</div>