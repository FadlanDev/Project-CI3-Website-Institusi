<div class="col-lg-12">
    <div class="panel panel-yellow">
        <div style="color: black;" class="panel-heading">
            <a style="color: black;" href="<?= base_url('budaya/add'); ?>" class="btn btn-default btn-sm"><i class="fa fa-plus"></i>Add</a> DAFTAR UKM SENI DAN BUDAYA
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
                        <th class="text-center">Nama</th>
                        <th class="text-center">Agenda Latihan</th>
                        <th class="text-center">Foto</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($budaya as $key => $value) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value->nm_seni ?></td>
                            <td><?= $value->agenda ?></td>
                            <td class="text-center"><img src="<?= base_url('foto_budaya/' . $value->foto) ?>" width="100px"></td>
                            <td class="text-center">
                                <a style="color:black" href="<?= base_url('budaya/edit/' . $value->kode_seni) ?>" class="btn-sm btn-success"><i style="color:black" class="fa fa-pencil"> Edit</i></a>
                                <a style="color:black;" href="<?= base_url('budaya/delete/' . $value->kode_seni) ?>" onclick="return confirm ('Apakah anda yakin data ini akan dihapus.. ?')" class="btn-sm btn-danger"><i style="color:black" class="fa fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>