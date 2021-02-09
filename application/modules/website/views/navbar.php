<section id="topbar" class="d-none d-lg-block">
  <div class="container d-flex">
    <div class="contact-info mr-auto">
      <i class="icofont-envelope"></i>
      <a href="mailto:<?= $medsos->email_medsos; ?>"><?= $medsos->email_medsos; ?></a>
      <i class="icofont-phone"></i> <?= $medsos->telp_medsos; ?>
    </div>
    <div class="social-links" style="font-size: 18px;">
      <a href="https://wa.me/<?= $medsos->wa_medsos; ?>" class="whatsapp" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
        <i class="icofont-whatsapp"></i>
      </a>
      <a href="<?= $medsos->fb_medsos; ?>" class="facebook" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
        <i class="icofont-facebook"></i>
      </a>
      <a href="<?= $medsos->ig_medsos; ?>" class="instagram" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
        <i class="icofont-instagram"></i>
      </a>
      <a href="<?= $medsos->yt_medsos; ?>" class="linkedin" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
        <i class="icofont-youtube"></i>
      </a>
    </div>
  </div>
</section>

<header id="header">
  <div class="container d-flex">
    <div class="logo mr-auto">
      <a href="#"><img src="<?= base_url('templates/front/') ?>assets/img/logo-new.png" alt="" class="img-fluid"></a>
    </div>
    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li class="<?php if($content == 'home'){echo"active";} ?>"><a href="<?= base_url() ?>">Beranda</a></li>
        <li class="<?php if($content == 'tentang'){echo"active";} ?>"><a href="<?= base_url() ?>tentang.html">Tentang Kami</a></li>
        <li class="<?php if($content == 'jasa'){echo"active";} ?>"><a href="<?= base_url() ?>jasa.html">Jasa Layanan</a></li>
        <li class="<?php if($content == 'galeri-kegiatan'){echo"active";} ?>"><a href="<?= base_url() ?>galeri-kegiatan.html">Galeri Kegiatan</a></li>
        <li class="<?php if($content == 'artikel'){echo"active";} ?>"><a href="<?= base_url() ?>artikel">Artikel</a></li>
        <li class="<?php if($content == 'kontak'){echo"active";} ?>"><a href="<?= base_url() ?>kontak.html">Kontak</a></li>
      </ul>
    </nav>
  </div>
</header>