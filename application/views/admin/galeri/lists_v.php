<div class="col-lg-12">
    <div class="panel panel-green">
        <div style="color: black;" class="panel-heading">
            <a style="color: black;" href="<?= base_url('galeri/add'); ?>" class="btn btn-default btn-sm"><i class="fa fa-plus"></i>Add</a> GALERI
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
                        <th class="text-center">Nama Galeri</th>
                        <th class="text-center">Sampul</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($galeri as $key => $value) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value->nama_galeri ?></td>
                            <td class="text-center"><img src="<?= base_url('sampul/' . $value->sampul) ?>" width="150px"></br>
                                <i class="fa fa-image"> <?= $value->jml_foto ?> Foto</i></br>
                                <a style="color: white;" href="<?= base_url('galeri/add_foto/' . $value->id_galeri) ?>" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Tambah</a>
                            </td>
                            <td class="text-center">
                                <a style="color:black" href="<?= base_url('galeri/edit/' . $value->id_galeri) ?>" class="btn-sm btn-success"><i style="color:black" class="fa fa-pencil"></i></a>
                                <a style="color:black;" href="<?= base_url('galeri/delete/' . $value->id_galeri) ?>" onclick="return confirm ('Apakah anda yakin data ini akan dihapus.. ?')" class="btn-sm btn-danger"><i style="color:black" class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>