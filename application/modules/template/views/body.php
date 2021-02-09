<div id="wrapper">

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">

        <div class="slimscroll-menu" id="remove-scroll">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="<?= base_url() ?>" class="logo">
                    <span>
                        <img src="<?= base_url('templates/img/logo.png') ?>" alt="" height="50">
                    </span>
                    <i>
                        <img src="<?= base_url('templates/img/logo.png') ?>" alt="" height="28">
                    </i>
                </a>
            </div>

            <!-- User box -->
            <div class="user-box">
                <div class="user-img">
                    <img src="<?= base_url('uploads/img/Laki-laki.svg') ?>" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                </div>
                <h5><a href="#"><?= $this->session->myName ?></a> </h5>
            </div>

            <!--- Sidemenu -->
            <div id="sidebar-menu">

                <ul class="metismenu" id="side-menu">
                    <li>
                        <a href="<?= base_url('dashboard.html') ?>">
                            <i class="fi-air-play"></i> <span> Dashboard </span>
                        </a>
                    </li>

                    <li>
                        <a href="<?= base_url('list-contact.html') ?>">
                            <i class="fi-mail"></i> <span> Contact </span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-align-left"></i><span> Artikel </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="<?= base_url('input-artikel.html') ?>">Input Artikel</a></li>
                            <li><a href="<?= base_url('artikel.html') ?>">Daftar Artikel</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-folder"></i><span> Master </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="<?= base_url('company.html') ?>">Perusahaan</a></li>
                            <li><a href="<?= base_url('struktur-organisasi.html') ?>">Struktur Organisasi</a></li>
                            <li><a href="<?= base_url('moto.html') ?>">Moto</a></li>
                            <li><a href="<?= base_url('visi.html') ?>">Visi</a></li>
                            <li><a href="<?= base_url('misi.html') ?>">Misi</a></li>
                            <li><a href="<?= base_url('program.html') ?>">Program</a></li>
                            <li><a href="<?= base_url('produk-jasa.html') ?>">Produk & Jasa</a></li>
                            <li><a href="<?= base_url('galeri.html') ?>">Galeri Kegiatan</a></li>
                            <li><a href="<?= base_url('medsos.html') ?>">Media Sosial</a></li>
                            <li><a href="<?= base_url('banner.html') ?>">Banner</a></li>
                            <li><a href="<?= base_url('text-pendaftaran.html') ?>">Text Pendaftaran</a></li>
                        </ul>
                    </li>
                    <?php if ($this->session->myLevel == 'superadmin'): ?>
                    <li>
                        <a href="<?= base_url('users.html') ?>">
                            <i class="fi-head"></i> <span> Users </span>
                        </a>
                    </li>
                    <?php endif ?>
                </ul>

            </div>
            <!-- Sidebar -->

            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->

    <div class="content-page">

        <!-- Top Bar Start -->
        <div class="topbar">

            <nav class="navbar-custom">

                <ul class="list-unstyled topbar-right-menu float-right mb-0">

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <img src="<?= base_url('uploads/img/Laki-laki.svg') ?>" alt="user" class="rounded-circle"> <span class="ml-1"><?= $this->session->myName ?><i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h6 class="text-overflow m-0"></h6>
                            </div>

                            <!-- item-->
                            <!-- <a href="<?= base_url('profile.html') ?>" class="dropdown-item notify-item">
                                <i class="fi-head"></i> <span>Profile</span>
                            </a> -->

                            <!-- item-->
                            <button type="button" id="btn-logout" class="dropdown-item notify-item">
                                <a href="<?= base_url('logout.html'); ?>" class="black-text"><i class="fi-power"></i> <span>Logout</span></a>
                            </button>
                            <!-- <a href="#" id="href-logout" class="dropdown-item notify-item">
                                <i class="fi-power"></i> <span>Logout</span>
                            </a> -->

                        </div>
                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left">
                            <i class="dripicons-menu"></i>
                        </button>
                    </li>
                    <li>
                        <div class="page-title-box">
                            <h4 class="page-title"><?= $title ?></h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">Selamat datang <?= $this->session->myName ?></li>
                            </ol>
                        </div>
                    </li>

                </ul>

            </nav>

        </div>
        <!-- Top Bar End -->

        <!-- Start Page content -->
        <div class="content">
            <div class="container-fluid">
                <?= $this->load->view($content); ?>
            </div> <!-- container -->

        </div> <!-- content -->

        <footer class="footer">
            2020 © mitraandalankarawang.co.id
        </footer>

    </div>
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->
</div>