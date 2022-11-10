<div class="col-lg-12">
    <div class="panel panel-yellow">
        <div style="color: black;" class="panel-heading">
            <a style="color: black;" href="<?= base_url('olahraga/add'); ?>" class="btn btn-default btn-sm"><i class="fa fa-plus"></i>Add</a> DAFTAR UKM OLAHRAGA
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
                        <th class="text-center">Nama Olahraga</th>
                        <th class="text-center">Jadwal Latihan</th>
                        <th class="text-center">Foto</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($olahraga as $key => $value) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value->nm_olahraga ?></td>
                            <td><?= $value->jadwal ?></td>
                            <td class="text-center"><img src="<?= base_url('foto_olahraga/' . $value->foto_olga) ?>" width="80px"></td>
                            <td class="text-center">
                                <a style="color: black;" href="<?= base_url('olahraga/edit/' . $value->kd_olahraga) ?>" class="btn-sm btn-success"><i style="color: black;" class="fa fa-pencil"></i>Edit</a>
                                <a style="color: black;" href="<?= base_url('olahraga/delete/' . $value->kd_olahraga) ?>" onclick="return confirm('Apakah anda yakin data ini akan dihapus..?')" class="btn-sm btn-danger"><i style="color:black;" class="fa fa-trash"></i>Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>