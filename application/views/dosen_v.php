<!-- Home -->

<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Dosen</li>
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
                    <h2> List Dosen Kampus</h2><br>
                </div>

                <!-- Team Item -->
                <?php foreach ($dosen as $key => $value) { ?>
                    <div class="col-lg-3 col-md-6 team_col">
                        <div class="team_item">
                            <div class="team_image"><img src="<?= base_url('asset/' . $value->foto_dosen) ?>" alt=""></div>
                            <div class="team_body">
                                <div class="team_subtitle"><?= $value->nip ?></div>
                                <div class="team_title"><a href="<?= ('dosen/datadosen') ?>"><?= $value->nama_dosen ?></a></div>
                                <div class="team_subtitle"><?= $value->tempat_lahir ?> , <?= $value->tgl_lahir ?></div>
                                <div class="team_subtitle"><?= $value->nama_mapel ?></div>
                                <div class="team_subtitle"><?= $value->pendidikan ?></div>
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