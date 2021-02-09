<section id="hero">
  <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

    <div class="carousel-inner" role="listbox">
      <?php foreach ($slider as $slide): ?>
        <div class="carousel-item <?= $slide->is_active; ?>" 
          style="background-image: url(<?= base_url() . $slide->slider  ?>);">
          <div class="carousel-container"></div>
        </div>
      <?php endforeach ?>
    </div>

    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
  </div>
</section>

<section id="cta" class="cta">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 text-center text-lg-left">
        <h3><?= $tp->judul ?></h3>
        <h5><?= $tp->text ?></h5>
      </div>
      <div class="col-lg-3 cta-btn-container text-center">
        <a class="cta-btn align-middle" href="https://forms.gle/fEigastN2oGUFw256" target="_blank">Daftar sekarang!</a>
      </div>
    </div>
  </div>
</section>

<section id="about-us" class="about-us">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-xl-12" data-aos="fade-right">
        <img src="<?= base_url() . $company->foto_company ?>" alt="" class="img-fluid">
      </div>
      <div class="col-xl-12">
        <div class="content justify-content-center">
          <h3 data-aos="fade-up"><?= $company->title_company ?></h3>
          <h4 data-aos="fade-up">
            <?= $company->text_company ?>
          </h4>

          <div class="row">
            <div class="col-md-12 icon-box" data-aos="fade-up">
              <i class="bx bx-receipt"></i>
              <h4>Moto Perusahaan</h4>
              <ol>
                <?php foreach ($moto as $mo): ?>
                  <li><?= $mo->moto ?></li>
                <?php endforeach ?>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="services" class="services index-services">
  <div class="container">
    <div class="section-title" data-aos="fade-up">
      <h2>Program <strong>Penempatan Magang Kerja</strong> ke Jepang</h2>
      <h5>Merupakan program unggulan yang dimiliki Mitra Andalan Karawang yang bekerjasama dengan Kessaku Indonesia. Lama pendidikan lebih kurang 4 bulan untuk mencapai level N5 Bahasa Jepang. Khusus Tokutei Geniou/Ex, tidak ada pendidikan dikarnakan mereka sudah pernah magang di Jepang.</h5>
    </div>
  </div>
</section>

<section class="cta1 index-services-2" data-aos="fade-up" date-aos-delay="200">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 video-box">
        <img src="<?= base_url() . $program_video->thumb ?>" class="img-fluid" alt="">
        <a href="<?= $program_video->video ?>" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
      </div>
      <div class="col-lg-6">
        <div class="icon-box" style="padding-top: 65px;margin-left:-90px;">
          <?php foreach ($program as $prog): ?>
            <h4 class="title"><?= $prog->title_program ?></h4>
            <p class="description">
              <?= $prog->deskripsi_program ?>
            </p>
          <?php endforeach ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="services" class="services">
  <div class="container">
    <div class="section-title" data-aos="fade-up">
      <h2>Produk & <strong>Jasa Lainnya</strong></h2>
      <h5>
        Tenaga dengan keahlian khusus baik untuk manajemen, staf dan operator pada pabrik atau industri, perkantoran umum, perhotelan, perbankan, rumah sakit, pusat perbelanjaan dan lain-lain.
      </h5>
    </div>
    <div class="row">
      <?php foreach ($jasa as $js): ?>
      <div class="col-lg-4 col-md-6">
        <div class="icon-box" data-aos="fade-up">
          <div class="icon"><i class="<?= $js->icon_jasa ?>"></i></div>
          <h4 class="title"><a href="#"><?= $js->title_jasa ?></a></h4>
          <p class="description">
            <?= $js->deskripsi_jasa ?>
          </p>
        </div>
      </div>
      <?php endforeach ?>
    </div>
  </div>
</section>