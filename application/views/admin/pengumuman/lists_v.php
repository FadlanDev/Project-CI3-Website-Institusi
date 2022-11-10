<div class="col-lg-12">
    <div class="panel panel-success">
        <div style="color: black;" class="panel-heading">
            <a style="color: black;" href="<?= base_url('pengumuman/add'); ?>" class="btn btn-default btn-sm"><i class="fa fa-plus"></i>Add</a> PENGUMUMAN
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
                        <th class="text-center">Judul Pengumuman</th>
                        <th class="text-center">Isi Pengumuman</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($pengumuman as $key => $value) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value->judul_pengumuman ?></td>
                            <td><?= $value->isi_pengumuman ?></td>
                            <td><?= $value->tgl ?></td>
                            <td>
                                <a style="color:black" href="<?= base_url('pengumuman/edit/' . $value->id_pengumuman) ?>" class="btn-sm btn-success"><i style="color:black" class="fa fa-pencil"></i></a>
                                <a style="color:black;" href="<?= base_url('pengumuman/delete/' . $value->id_pengumuman) ?>" onclick="return confirm ('Apakah anda yakin data ini akan dihapus.. ?')" class="btn-sm btn-danger"><i style="color:black" class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>