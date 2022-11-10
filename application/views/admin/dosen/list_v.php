<div class="col-lg-12">
    <div class="panel panel-red">
        <div style="color: black;" class="panel-heading">
            <a style="color: black;" href="<?= base_url('dosen/add'); ?>" class="btn btn-default btn-sm"><i class="fa fa-plus"></i>Add</a> DAFTAR DOSEN
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
                        <th>Nip</th>
                        <th class="text-center">Nama Dosen</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th class="text-center">Mapel</th>
                        <th>Pendidikan</th>
                        <th class="text-center">Foto</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($dosen as $key => $value) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value->nip ?></td>
                            <td><?= $value->nama_dosen ?></td>
                            <td><?= $value->tempat_lahir ?></td>
                            <td><?= $value->tgl_lahir ?></td>
                            <td><?= $value->nama_mapel ?></td>
                            <td><?= $value->pendidikan ?></td>
                            <td><img src="<?= base_url('asset/' . $value->foto_dosen) ?>" width="100px"></td>
                            <td>
                                <a href="<?= base_url('dosen/edit/' . $value->id_dosen) ?>" class="btn-xs btn-success"><i style="color: black;" class="fa fa-pencil"></i></a>
                                <a href="<?= base_url('dosen/delete/' . $value->id_dosen) ?>" onclick="return confirm('Apakah Anda Yakin Data Ini Akan Dihapus..?')" class="btn-xs btn-danger"><i style="color:white;" class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>