<div class="col-lg-20">
    <div class="panel panel-green">
        <div class="panel-heading">EDIT DATA</div>
        <div class="panel-body">

            <?php

            if (isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
            }

            echo form_open_multipart('download/edit/' . $download->id_file);
            ?>

            <div class="form-group">
                <label>Keterangan</label>
                <input class="form-control" type="text" value="<?= $download->ket_file ?>" name="ket_file" placeholder="Keterangan file" required>
            </div>

            <div class="form-group">
                <label>File</label>
                <input type="file" class="form-control" type="text" value="<?= $download->berkas ?>" name="berkas">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Simpan / Save</button>
                <button type="reset" class="btn btn-danger">Reset / Batal</button>
            </div>
        </div>
    </div>
</div>