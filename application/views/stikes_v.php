<!--- Home --->

<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Profile STIKES BANI SALEH</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>

<!-- Isi Content -->
<div class="">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <img src="<?= base_url('foto_stikes/' . $profile_stikes->foto_kampus) ?>" width="100%" height="400px"><br>
                <h3>GEDUNG PRASARANA PENDIDIKAN STIKES BANI SALEH</h3>
                <br>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <div class="form_title">Nama Kampus
                        <input type="text" class="comment_input" value="<?= $profile_stikes->nama_kampus ?>" type="text" name="nama_kampus" readonly>
                    </div>

                    <div class="form-group">
                        <div class="form_title">Alamat Kampus
                            <input type="text" class="comment_input" value="<?= $profile_stikes->alamat ?>" type="text" name="alamat" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form_title">Pendiri Yayasan
                            <input type="text" class="comment_input" value="<?= $profile_stikes->nama_ketua ?>" type="text" name="nama_ketua" readonly>
                        </div>
                    </div>

                    <br>

                    <div class="form-group">
                        <div class="form_title">SEJARAH KAMPUS
                            <p><?= $profile_stikes->sejarah ?></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form_title">VISI
                            <p><?= $profile_stikes->visi ?></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form_title">MISI
                            <p><?= $profile_stikes->misi ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>