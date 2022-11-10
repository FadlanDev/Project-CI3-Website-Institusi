<!-- Home -->

<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>About</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Contact -->

<div class="contact">

    <!-- Contact Map -->

    <div class="col">

        <!-- Google Map -->

        <div class="map">
            <div>
                <div class="map_container">
                    <div id="map" style="height: 500px;"></div>
                </div>
            </div>
        </div>

        <!-- Contact Info -->

        <div class="contact_info_container">
            <div class="container">
                <div class="row">

                    <!-- Contact Form -->
                    <div class="col-lg-6">
                        <div class="contact_form">
                            <div class="contact_info_title">Daftar Kejuruan Pendidikan Yayasan Bani Saleh :</div>
                            <ul class="location_list">
                                <li><a href="#">S1 - Teknik Informatika</a></li>
                                <li><a href="#">S1 - Sistem Informasi</a></li>
                                <li><a href="#">D3 - Management Informatika</a></li>
                                <li><a href="#">D3 - Komputerisasi Akuntansi</a></li>
                                <li><a href="#">D3 - Teknik Komputer</a></li>
                                <li><a href="#">D3 - Kebidanan</a></li>
                                <li><a href="#">D3 - Keperawatan</a></li>
                                <li><a href="#">S1 - Keperawatan</a></li>
                                <li><a href="#">S1 - Farmasi</a></li>
                                <li><a href="#">S1 - Pendidikan Guru Madrasah Ibtidaiyah</a></li>
                                <li><a href="#">S1 - Pendidikan Guru Raudhatul Athfal</a></li>
                                <li><a href="#">S1 - Pendidikan Perbankan Syari`ah</a></li>
                            </ul>
                            <br>
                            <ul>
                                <div style="color: black" class="contact_info_location_title">RS ISLAM Dr. Subki Abdulkadir</div>
                                <li style="color: black">ALAMAT : Jl. RA Kartini No.66, RT.003/RW.005, Margahayu, Kec. Bekasi Timur., Kota Bekasi, Jawa Barat 17113</li>
                                <li style="color: black">NO. KONTAK : <?= $about->no_telepon ?></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Contact Info -->
                    <div class="col-lg-6">
                        <div class="contact_info">
                            <div class="contact_info_title">Info Contact Us Person :</div>
                            <div class="contact_info_location">
                                <div class="contact_info_location_title">STMIK BANI SALEH</div>
                                <ul class="location_list">
                                    <li style="color: black">ALAMAT : Jl. Mayor Madmuin Hasibuan No.68, RT.004/RW.004, Margahayu, Kec. Bekasi Timur., Kota Bekasi, Jawa Barat 17113</li>
                                    <li style="color: black">NO. KONTAK : 021-8803386</li>
                                    <li style="color: black">EMAIL/WEBSITE : <?= $about->email ?></li>
                                </ul>
                            </div>
                            <div class="contact_info_location">
                                <div class="contact_info_location_title">STIKES BANI SALEH</div>
                                <ul class="location_list">
                                    <li style="color: black">ALAMAT : Jl. RA Kartini No.66, RT.003/RW.005, Margahayu, Kec. Bekasi Timur., Kota Bekasi, Jawa Barat 17113</li>
                                    <li style="color: black">NO. KONTAK : 02188345064 / 021-8835 7111</li>
                                    <li style="color: black">EMAIL/WEBSITE : stikesbanisaleh.ac.id</li>
                                </ul>
                            </div>
                            <div class="contact_info_location">
                                <div class="contact_info_location_title">STAI BANI SALEH</div>
                                <ul class="location_list">
                                    <li style="color: black">ALAMAT : Jl. Mayor Madmuin Hasibuan No.68, RT.004/RW.004, Margahayu, Kec. Bekasi Timur., Kota Bekasi, Jawa Barat 17113</li>
                                    <li style="color: black">NO. KONTAK : 02188359599 / 021-88343360</li>
                                    <li style="color: black">EMAIL/WEBSITE : stai.banisaleh.ac.id</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var map = L.map('map').setView([-6.251654209083399, 107.00270962544533], 13);

    var tiles = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11',
    }).addTo(map);

    var marker = L.marker([-6.251654209083399, 107.00270962544533]).addTo(map)
        .bindPopup('STMIK BANI SALEH').openPopup();
</script>