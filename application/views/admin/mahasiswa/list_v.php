<div class="col-lg-12">
    <div class="panel panel-primary">
        <div style="color: white;" class="panel-heading">
            <a style="color: white;" href="<?= base_url('mahasiswa/add'); ?>" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>Add</a> DAFTAR UKM SENI DAN BUDAYA
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
                        <th>NPM</th>
                        <th class="text-center">Nama Mahasiswa</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th class="text-center">Kelas</th>
                        <th class="text-center">Foto</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($mahasiswa as $key => $value) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value->npm ?></td>
                            <td><?= $value->nama_mahasiswa ?></td>
                            <td><?= $value->tempat_lahir ?></td>
                            <td><?= $value->tgl_lahir ?></td>
                            <td><?= $value->kelas ?></td>
                            <td><img src="<?= base_url('foto_mahasiswa/' . $value->foto_mahasiswa) ?>" width="100px"></td>
                            <td class="text-center">
                                <a style="color:black" href="<?= base_url('mahasiswa/edit/' . $value->id_mahasiswa) ?>" class="btn-sm btn-success"><i style="color:black" class="fa fa-pencil"></i></a>
                                <a style="color:black;" href="<?= base_url('mahasiswa/delete/' . $value->id_mahasiswa) ?>" onclick="return confirm ('Apakah anda yakin data ini akan dihapus.. ?')" class="btn-sm btn-danger"><i style="color:black" class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>