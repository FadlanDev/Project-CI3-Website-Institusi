<div class="col-lg-12">
    <div class="panel panel-green">
        <div style="color: black;" class="panel-heading">
            <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i>Add</button> DAFTAR STUDY
        </div>
        <div class="panel-body">
            <?php
            if ($this->session->flashdata('pesan')) {
                echo '<div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                echo $this->session->flashdata('pesan');
                echo '</div>';
            }
            ?>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th class="text-center">Nama Program Study</th>
                        <th class="text-center">Jenjang Study</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($fakultas as $key => $value) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value->nm_jurusan ?></td>
                            <td class="text-center"><?= $value->jenjang_studi ?></td>
                            <td class="text-center">
                                <button class="btn btn-xs btn-success" data-toggle="modal" data-target="#edit<?= $value->kd_jurusan ?>"><i class=" fa fa-pencil"></i> Edit</button>
                                <a style="color:black;" href="<?= base_url('fakultas/delete/' . $value->kd_jurusan) ?>" onclick="return confirm('Apakah anda yakin data ini akan dihapus / Are you sure this data will be deleted ?')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i>Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Add -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModelLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Add / Tambah Data Study</h4>
            </div>
            <div class="modal-body">
                <?php echo form_open('fakultas/add'); ?>
                <div class="form-group">
                    <label>Data Study</label>
                    <input class="form-control" type="text" name="nm_jurusan" placeholder="Masukan Nama Program Study" required>
                    </br>
                    <input class="form-control" type="text" name="jenjang_studi" placeholder="Masukan Jenis Jenjang Study" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close / tutup</button>
                <button type="submit" class="btn btn-primary">Simpan / save</button>
            </div>
            <?php echo form_close(); ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<!-- Modal Edit-->
<?php foreach ($fakultas as $key => $value) { ?>
    <div class="modal fade" id="edit<?= $value->kd_jurusan ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Edit Data Study</h4>
                </div>
                <div class="modal-body">
                    <?php echo form_open('fakultas/edit/' . $value->kd_jurusan); ?>
                    <div class="form-group">
                        <label>Nama Program Study</label>
                        <input class="form-control" type="text" name="nm_jurusan" value="<?= $value->nm_jurusan ?>" placeholder=" Masukan Nama Program Study" required>

                        <label>Jenjang Study</label>
                        <input class="form-control" type="text" name="jenjang_studi" value="<?= $value->jenjang_studi ?>" placeholder=" Masukan Jenis Jenjang Study" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close / tutup</button>
                    <button type="submit" class="btn btn-primary">Save / simpan</button>
                </div>
                <?php echo form_close(); ?>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
<?php } ?>