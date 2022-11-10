<?php
echo form_open_multipart('admin/setting');

if ($this->session->flashdata('pesan')) {
    echo '<div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
    echo $this->session->flashdata('pesan');
    echo '</div>';
}
?>

<div class="col-sm-6 text-center">
    <label for="">KAMPUS STMIK BANI SALEH BEKASI</label><br>
    <img src="<?= base_url('foto_kampus/' . $setting->foto_kampus) ?>" width="300px" height="200px">

    <div class="form-group text-center">
        <label>Ganti Foto</label>
        <input type="file" class="form-control" type="text" name="foto_kampus">
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group">
        <label>Nama Kampus</label>
        <input type="text" class="form-control" value="<?= $setting->nama_kampus ?>" type="text" name="nama_kampus">
    </div>

    <div class="form-group">
        <label>Alamat Kampus</label>
        <input type="text" class="form-control" value="<?= $setting->alamat ?>" type="text" name="alamat">
    </div>

    <div class="form-group">
        <label>No Telepon</label>
        <input type="text" class="form-control" value="<?= $setting->no_telepon ?>" type="text" name="no_telepon">
    </div>

    <div class="form-group">
        <label>Ketua Pembina Yayasan</label>
        <input type="text" class="form-control" value="<?= $setting->pembina ?>" type="text" name="pembina">
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" value="<?= $setting->email ?>" type="text" name="email">
    </div>
</div>

<div class="col-sm-12">
    <div class="form-group">
        <label>Sejarah Kampus</label>
        <textarea class="form-control" name="sejarah" id="" rows="5"><?= $setting->sejarah ?></textarea>
    </div>

    <div class="form-group">
        <label>Visi</label>
        <textarea class="form-control" name="visi" id="" rows="5"><?= $setting->visi ?></textarea>
    </div>

    <div class="form-group">
        <label>Misi</label>
        <textarea class="form-control" name="misi" id="" rows="5"><?= $setting->misi ?></textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success btn-sm">Update</button>
        <button type="reset" class="btn btn-danger btn-sm">Reset</button>
    </div>
</div>
<?php echo form_close(); ?>