<!--- Home --->

<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Profile STMIK BANI SALEH</li>
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
                <img src="<?= base_url('foto_kampus/' . $profile->foto_kampus) ?>" width="100%" height="450px"><br>
                <h3>GEDUNG PRASARANA PENDIDIKAN STMIK BANI SALEH</h3>
                <br>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <div class="form_title">Nama Kampus
                        <input type="text" class="comment_input" value="<?= $profile->nama_kampus ?>" type="text" name="nama_kampus" readonly>
                    </div>

                    <div class="form-group">
                        <div class="form_title">Alamat Kampus
                            <input type="text" class="comment_input" value="<?= $profile->alamat ?>" type="text" name="alamat" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form_title">Pendiri Yayasan
                            <input type="text" class="comment_input" value="<?= $profile->pembina ?>" type="text" name="pembina" readonly>
                        </div>
                    </div>

                    <br>

                    <div class="form-group">
                        <div class="form_title">SEJARAH KAMPUS
                            <p><?= $profile->sejarah ?></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form_title">VISI
                            <p><?= $profile->visi ?></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form_title">MISI
                            <p><?= $profile->misi ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>