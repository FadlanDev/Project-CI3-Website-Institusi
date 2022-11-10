<!--- Home --->

<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Detail Berita</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>
<br>

<!-- Blog -->

<div class="">
    <div class="container">
        <div class="row">
            <!-- Blog Content -->
            <div class="col-lg-8">
                <div class="blog_content">
                    <div class="blog_title"><?= $berita->judul_berita ?></div>
                    <div class="blog_meta">
                        <ul>
                            <li>Post on <a href="#"><?= $berita->tgl_berita ?></a></li>
                            <li>By <a href="#"><?= $berita->nama_user ?></a></li>
                        </ul>
                    </div>
                    <div class="blog_image"><img src="<?= base_url('gambar_berita/' . $berita->gambar_berita) ?>" width="200px" height="200px"></div>
                    <?= $berita->isi_berita ?>
                </div>
                <div class="blog_extra d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
                    <div class="blog_social ml-lg-auto">
                        <span>Share: </span>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Blog Sidebar -->
            <div class="col-lg-4">
                <div class="sidebar">

                    <!-- Latest News -->
                    <div class="sidebar_section">
                        <div class="sidebar_section_title">Latest News / Berita</div>
                        <div class="sidebar_latest">

                            <!-- Latest Course -->
                            <?php foreach ($latest_berita as $key => $value) { ?>
                                <div class="latest d-flex flex-row align-items-start justify-content-start">
                                    <div class="latest_image">
                                        <div><img src="<?= base_url('gambar_berita/' . $value->gambar_berita) ?>" width="150px" height="75px"></div>
                                    </div>
                                    <div class="latest_content">
                                        <div class="latest_title"><a href="<?= base_url('home/detail_berita/' . $value->slug_berita) ?>"><?= $value->judul_berita ?></a></div>
                                        <div class="latest_date"><?= $value->tgl_berita ?></div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
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