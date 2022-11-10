<!-- Home -->

<div class="home">
    <div class="home_slider_container">

        <!-- Home Slider -->
        <div class="owl-carousel owl-theme home_slider">


            <!-- Home Slider Item -->
            <?php foreach ($slider_foto as $key => $value) { ?>
                <div class="owl-item">
                    <div class="home_slider_background" style="background-image:url(<?= base_url('gambar_kampus/' . $value->gambar_kampus) ?>)"></div>
                    <div class="home_slider_content">
                        <div class="container">
                            <div class="row">
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <!-- Home Slider Nav -->
    <div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
    <div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
</div>

<!-- Features -->

<div class="">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">WELCOME TO WEBSITE YAYASAN BANI SALEH</h2>
                    <div class="section_subtitle">
                        <h3>-> STMIK BANI SALEH</h3>
                        <h3>-> STIKES BANI SALEH</h3>
                        <h3>-> STAI BANI SALEH</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Popular Courses -->
<div class="courses">
    <div class="section_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url() ?>template/frontend/images/courses_background.jpg" data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Daftar Berita Terbaru</h2>
                    <div class="section_subtitle">
                        <p>Berikut adalah postingan berita yang meliputi terhadap Yayasan Pendidikan Islam Stmik Bani Saleh. Dan juga berita yang mengenai terhadap lingkungan masyarakat.</p>
                        <p>Seperti berita tentang Pendidikan, Kesehatan, Keagamaan, Sosial, Teknologi, dan lain - lain. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row courses_row">

            <!-- Course -->
            <?php foreach ($slider_berita as $key => $value) { ?>
                <div class="col-lg-4 course_col">
                    <div class="course">
                        <div class="course_image"><img src="<?= base_url('gambar_berita/' . $value->gambar_berita) ?>" height="250px"></div>
                        <div class="course_body">
                            <h3 class="course_title"><a href="<?= base_url('home/detail_berita/' . $value->slug_berita) ?>"><?= $value->judul_berita ?></a></h3>
                            <div class="course_text">
                                <p><?= substr(strip_tags($value->isi_berita), 0, 99,) ?>...</p>
                            </div>
                        </div>
                        <div class="course_footer">
                            <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                <div class="course_info">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <span><?= $value->tgl_berita ?></span>
                                </div>
                                <div class="course_info">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <span>User : <?= $value->nama_user ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="row">
            <div class="col">
                <div class="courses_button trans_200"><a href="<?= base_url('home/berita') ?>">View all News</a></div>
            </div>
        </div>
    </div>
</div>

</div>
</div>

<!-- Team -->
<div class="team">
    <div class="team_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url() ?>template/frontend/images/team_background.jpg" data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Daftar Dosen Kampus</h2>
                </div>
            </div>
        </div>
        <div class="row team_row">

            <!-- Team Item -->
            <?php foreach ($dosen as $key => $value) { ?>
                <div class="col-lg-3 col-md-6 team_col">
                    <div class="team_item">
                        <div class="team_image"><img src="<?= base_url('asset/' . $value->foto_dosen) ?>"></div>
                        <div class="team_body">
                            <div class="team_subtitle">NIP : <?= $value->nip ?></div>
                            <div class="team_title"><a href="#"><?= $value->nama_dosen ?></a></div>
                            <div class="team_subtitle">Dosen Pengampu : <br><?= $value->nama_mapel ?></div>
                            <div class="team_subtitle">Pendidikan : <?= $value->pendidikan ?></div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="row">
            <div class="col">
                <div class="courses_button trans_200"><a href="<?= base_url('home/dosen') ?>">View all Dosen</a></div>
            </div>
        </div>
    </div>
</div>

<!-- Newsletter -->
<div class="newsletter">
    <div class="newsletter_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url() ?>template/frontend/images/newsletter.jpg" data-speed="0.8"></div>
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