<section id="breadcrumbs" class="breadcrumbs">
	<div class="container">
		<div class="d-flex justify-content-between align-items-center">
			<h2>Jasa & Layanan</h2>
			<ol>
				<li><a href="<?= base_url() ?>">Beranda</a></li>
				<li>Jasa & Layanan</li>
			</ol>
		</div>
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