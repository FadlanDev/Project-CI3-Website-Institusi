<!--- Home --->

<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Profile Pimpinan</li>
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
            <div class="col-sm-4 text-center">
                <img src="<?= base_url('foto_pimpinan/' . $pimpinan->foto_pimpinan) ?>" width="200px" height="300px">
                <br>
                <h4 style="color: black;"><?= $pimpinan->nama_pimpinan ?></h4>
            </div>

            <div class="col-sm-8">
                <div class="form-group">
                    <div class="form_title">Nama Yayasan
                        <input type="text" class="comment_input" value="<?= $pimpinan->nama_yayasan ?>" type="text" name="nama_yayasan" readonly>
                    </div>
                    <div class="form-group">
                        <div class="form_title">Tempat Lahir
                            <input type="text" class="comment_input" value="<?= $pimpinan->tempat_lahir ?>" type="text" name="tempat_lahir" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form_title">Tanggal Lahir
                            <input type="text" class="comment_input" value="<?= $pimpinan->tgl_lahir ?>" type="text" name="tgl_lahir" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form_title">Alamat
                            <input type="text" class="comment_input" value="<?= $pimpinan->alamat ?>" type="text" name="alamat" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <div class="col-sm-12">
                <div class="form-group">
                    <label class="form_title">BIOGRAFI PIMPINAN</label>
                    <p style="color: black"><?= $pimpinan->biografi ?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter -->

    <div class="newsletter">
        <div class="newsletter_background" style="background-image:url(<?= base_url() ?>template/frontend/images/newsletter_background.jpg)"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

                        <!-- Newsletter Content -->
                        <div class="newsletter_content text-lg-left text-center">
                            <div class="newsletter_title">YAYASAN ISLAM BANI SALEH PENDIDIKAN PERGURUAN TINGGI</div>
                            <div class="newsletter_title">NATIONAL : INDONESIAN</div>
                            <div style="font-size: x-small;" class="newsletter_subtitle">STMIK BANI SALEH</div>
                            <div style="font-size: x-small;" class="newsletter_subtitle">Jl. Mayor Madmuin Hasibuan No.68, RT.004/RW.004, Margahayu, Kec. Bekasi Tim., Kota Bks, Jawa Barat 17113</div>
                        </div>

                        <!-- Newsletter Form -->
                        <div class="newsletter_form_container ml-lg-auto">
                            <div style="font-size: x-small;" class="newsletter_subtitle">STIKES BANI SALEH</div>
                            <div style="font-size: x-small;" class="newsletter_subtitle">Jl. RA Kartini No.66, RT.003/RW.005, Margahayu, Kec. Bekasi Tim., Kota Bks, Jawa Barat 17113</div>
                            <div style="font-size: x-small;" class="newsletter_subtitle">STAI BANI SALEH</div>
                            <div style="font-size: x-small;" class="newsletter_subtitle">Jl. Mayor Madmuin Hasibuan No.68, RT.004/RW.004, Margahayu, Kec. Bekasi Tim., Kota Bks, Jawa Barat 17113</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>