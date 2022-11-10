<div class="col-lg-12">
    <div class="panel panel-green">
        <div style="color: black;" class="panel-heading">
            <a style="color: black;" href="<?= base_url('download/add'); ?>" class="btn btn-default btn-sm"><i class="fa fa-plus"></i>Add</a> DATA DOWNLOAD
        </div>
        <div class="panel-body">
            <?php
            if ($this->session->flashdata('pesan')) {
                echo '<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                echo $this->session->flashdata('pesan');
                echo '</div>';
            }
            ?>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th class="text-center">Keterangan</th>
                        <th class="text-center">File</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($download as $key => $value) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value->ket_file ?></td>
                            <td><?= $value->berkas ?></td>
                            <td class="text-center">
                                <a style="color:black" href="<?= base_url('download/edit/' . $value->id_file) ?>" class="btn-sm btn-success"><i style="color:black" class="fa fa-pencil"></i></a>
                                <a style="color:black;" href="<?= base_url('download/delete/' . $value->id_file) ?>" onclick="return confirm ('Apakah anda yakin data ini akan dihapus.. ?')" class="btn-sm btn-danger"><i style="color:black" class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>