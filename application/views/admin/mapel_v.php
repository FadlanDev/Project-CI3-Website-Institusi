<div class="col-lg-20">
    <div class="panel panel-primary">
        <div div class="panel-heading">
            <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i>Add</button> DAFTAR MATA KULIAH
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
                        <th class="text-center">Mata Kuliah</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($mapel as $key => $value) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value->nama_mapel ?></td>
                            <td class="text-center">
                                <button class="btn btn-xs btn-success" data-toggle="modal" data-target="#edit<?= $value->id_mapel ?>"><i class="fa fa-pencil"></i> Edit</button>
                                <a style="color: black;" href="<?= base_url('mapel/delete/' . $value->id_mapel) ?>" onclick="return confirm('Apakah anda yakin data ini akan dihapus / Are you sure this data will be deleted ?')" class="btn btn-xs btn-danger"><i style="color: black;" class="fa fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

<!-- Modal Add-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Add / Tambah Mata Kuliah</h4>
            </div>
            <div class="modal-body">
                <?php echo form_open('mapel/add'); ?>
                <div class="form-group">
                    <label>Data Mata Kuliah</label>
                    <input class="form-control" type="text" name="nama_mapel" placeholder="Masukan Nama Mata Kuliah" required>
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

<!-- Modal Edit-->
<?php foreach ($mapel as $key => $value) { ?>
    <div class="modal fade" id="edit<?= $value->id_mapel ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        #edit<?= $value->id_mapel ?>
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Edit Mata Kuliah</h4>
                </div>
                <div class="modal-body">
                    <?php echo form_open('mapel/edit/' . $value->id_mapel); ?>
                    <div class="form-group">
                        <label>Nama Mata Kuliah</label>
                        <input class="form-control" type="text" name="nama_mapel" value="<?= $value->nama_mapel ?>" placeholder=" Masukan Nama Mata Kuliah" required>
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