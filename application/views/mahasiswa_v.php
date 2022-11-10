<!-- Home -->

<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Mahasiswa</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>

<!-- Contact -->

<div class="contact">

    <!-- Contact Info -->

    <div class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2> List Mahasiswa Kampus </h2><br>
                </div>

                <!-- Team Item -->
                <?php foreach ($mahasiswa as $key => $value) { ?>
                    <div class="col-lg-3 col-md-6 team_col">
                        <div class="team_item">
                            <div class="team_image"><img src="<?= base_url('foto_mahasiswa/' . $value->foto_mahasiswa) ?>" alt=""></div>
                            <div class="team_body">
                                <div class="team_subtitle"><?= $value->npm ?></div>
                                <div class="team_title"><a href="<?= ('mahasiswa/datamahasiswa') ?>"><?= $value->nama_mahasiswa ?></a></div>
                                <div class="team_subtitle"><?= $value->tempat_lahir ?> , <?= $value->tgl_lahir ?></div>
                                <div class="team_subtitle"><?= $value->kelas ?></div>
                                <div class="social_list">
                                    <ul>
                                        <li><a href="https://m.facebook.com/login/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="https://web.whatsapp.com/"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                                        <li><a href="https://web.telegram.org/"><i class="fa fa-telegram" aria-hidden="true"></i></a></li>
                                        <li><a href="https://github.com/login"><i class="fa fa-github" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>