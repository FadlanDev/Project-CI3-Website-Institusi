<div class="col-lg-12">
    <div class="panel panel-success">
        <div style="color: black;" class="panel-heading">
            <a style="color: black;" href="<?= base_url('berita/add'); ?>" class="btn btn-default btn-sm"><i class="fa fa-plus"></i>Add</a> BERITA
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
                        <th class="text-center">Judul Berita</th>
                        <th class="text-center">Slug Berita</th>
                        <th class="text-center">Tanggal Posting</th>
                        <th class="text-center">Foto Berita</th>
                        <th class="text-center">Nama User</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($berita as $key => $value) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value->judul_berita ?></td>
                            <td><?= $value->slug_berita  ?></td>
                            <td><?= $value->tgl_berita ?></td>
                            <td><img src="<?= base_url('gambar_berita/' . $value->gambar_berita) ?>" width="250px"></td>
                            <td><?= $value->nama_user ?></td>
                            <td>
                                <a style="color:black" href="<?= base_url('berita/edit/' . $value->id_berita) ?>" class="btn-sm btn-success"><i style="color:black" class="fa fa-pencil"></i></a>
                                <a style="color:black;" href="<?= base_url('berita/delete/' . $value->id_berita) ?>" onclick="return confirm ('Apakah anda yakin data ini akan dihapus.. ?')" class="btn-sm btn-danger"><i style="color:black" class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>