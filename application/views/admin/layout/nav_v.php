<!-- /.navbar-top-links -->

<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="<?= base_url('mapel') ?>"><i class="fa fa-table"></i> Mata Kuliah</a>
            </li>
            <li>
                <a href="<?= base_url('dosen') ?>"><i class="fa fa-users"></i> Dosen</a>
            </li>
            <li>
                <a href="<?= base_url('mahasiswa') ?>"><i class="fa fa-graduation-cap"></i> Mahasiswa</a>
            </li>
            <li>
                <a href="<?= base_url('fakultas') ?>"><i class="fa fa-wrench fa fa-university"></i> Program Study</a>
            </li>

            <li>
                <a href="<?= base_url('olahraga') ?>"><i class="fa fa-futbol-o"></i> Daftar UKM Olahraga</a>
            </li>

            <li>
                <a href="<?= base_url('budaya') ?>"><i class="fa fa-heart"></i> Daftar UKM Seni dan Budaya</a>
            </li>

            <li>
                <a href="<?= base_url('pengumuman') ?>"><i class="fa fa-file fa-fw"></i> Pengumuman</a>
            </li>
            <li>
                <a href="<?= base_url('berita') ?>"><i class="fa fa-newspaper-o fa-fw"></i> Berita</a>
            </li>
            <li>
                <a href="<?= base_url('galeri') ?>"><i class="fa fa-image fa-fw"></i> Galeri</a>
            </li>
            <li>
                <a href="<?= base_url('download') ?>"><i class="fa fa-download fa-fw"></i> Download</a>
            </li>

            <li class="active">
                <a href="<?= base_url('admin/setting') ?>"><i class="fa fa-bookmark-o fa-fw"></i> Tentang</a>
            </li>

            <li class="active">
                <a href="<?= base_url('login/logout') ?>"><i class="fa fa-sign-out"></i> Logout</a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10">
                <h2 class="page-header"><?= $title2 ?></h2>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>