<!-- Home -->

<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Detail Galery Foto</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>

<!-- About -->

<div class="text-center">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title"><?= $nama_galeri->nama_galeri ?></h2>
                </div>
            </div>
        </div>
        <div class="row about_row">

            <!-- About Item -->
            <?php foreach ($galery as $key => $value) { ?>
                <div class="col-lg-4 about_col about_col_left">
                    <div class="about_item">
                        <div class="about_item_image"><img src="<?= base_url('gambar/' . $value->gambar) ?>" width="250px" height="150px"></div>
                        <div class="about_item_title"><a href="#"><?= $value->keterangan ?></a></div>
                        <div class="about_item_text">

                        </div>
                    </div>
                </div>
            <?php } ?>
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