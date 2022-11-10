<!-- Home -->

<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Download</li>
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
                    <h2>Download Area</h2><br>
                </div>
                <div class="col-lg-12">
                    <table class="table table-bordered" id="myTable">
                        <thead style="color: black">
                            <tr>
                                <th style="text-align: center; width: 50px">NO</th>
                                <th style="text-align: center;">Keterangan File</th>
                                <th style="text-align: center; width: 50px;">Download</th>
                            </tr>
                        </thead>
                        <tbody style="color: black">
                            <?php $no = 1;
                            foreach ($download as $key => $value) { ?>
                                <tr>
                                    <td class="text-center"><?= $no++ ?></td>
                                    <td><?= $value->ket_file ?></td>
                                    <td class="text-center"><a href="<?= base_url('berkas/' . $value->berkas); ?>" class="btn btn-primary btn-sm"><i class="fa fa-download"></i> Download</a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
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