<div class="col-lg-12">
    <div class="panel panel-yellow">
        <div style="color:black;" class="panel-heading">ADD DATA</div>
        <div class="panel-body">
            <?php
            if (isset($error_upload)) {
                echo '<div class="alert alert-danger alert dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
            }

            echo form_open_multipart('budaya/add');
            ?>
            <div class="form-group">
                <label>Nama UKM Seni dan Budaya</label>
                <input class="form-control" type="text" name="nm_seni" placeholder="Masukan Nama Seni dan Budaya" required>
            </div>
            <div class="form-group">
                <label>Agenda Latihan</label>
                <select name="agenda" class="form-control">
                    <option value="">---Pilih Agenda Latihan---</option>
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jumat">Jumat</option>
                    <option value="Sabtu">Sabtu</option>
                    <option value="Minggu">Minggu</option>
                </select>
            </div>
            <div class="form-group">
                <label>Foto UKM Seni dan Budaya</label>
                <input type="file" class="form-control" type="text" name="foto" required>
            </div>

            <br>

            <div class="from-group">
                <button type="submit" class="btn btn-success">Save / Simpan</button>
                <button button type="reset" class="btn btn-danger">Reset / Batal</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>