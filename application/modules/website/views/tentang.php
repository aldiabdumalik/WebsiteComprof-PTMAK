<section id="breadcrumbs" class="breadcrumbs">
	<div class="container">
		<div class="d-flex justify-content-between align-items-center">
			<h2>Tentang</h2>
			<ol>
				<li><a href="<?= base_url() ?>">Beranda</a></li>
				<li>Tentang</li>
			</ol>
		</div>
	</div>
</section>
<section id="about-us" class="about-us">
  <div class="container">
    <div class="row no-gutters">
      <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right" style="background:url(<?= base_url() . $company->foto_company ?>);"></div>
      <div class="col-xl-7 pl-0 pl-lg-5 pr-lg-1 d-flex align-items-stretch">
        <div class="content d-flex flex-column justify-content-center">
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

					<i class="bx bx-receipt"></i>
					<h4>Visi Perusahaan</h4>
					<ol>
						<?php foreach ($visi as $vi): ?>
						<li><?= $vi->visi ?></li>
						<?php endforeach ?>
					</ol>
				</div>
			</div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="services" class="index-services-2">
	<div class="container" data-aos="fade-up">
		<header class="section-header wow fadeInUp" style="margin-bottom:20px;">
			<h3 class="text-center"><strong>Misi Perusahaan</strong></h3>
		</header>
		<div class="row">
			<div class="col-lg-6 col-md-12" data-aos="fade-up">
				<ol>
					<?php foreach ($misi_1 as $ms1): ?>
					<li><?= $ms1->misi ?></li>
					<?php endforeach ?>
				</ol>
			</div>
			<div class="col-lg-6 col-md-12" data-aos="fade-up">
				<ol start="5">
					<?php foreach ($misi_2 as $ms2): ?>
					<li><?= $ms2->misi ?></li>
					<?php endforeach ?>
				</ol>
			</div>
		</div>
	</div>
</section>
<section id="team" class="team section-bg">
	<div class="container">
		<div class="section-title" data-aos="fade-up">
			<h2>Struktur <strong>Organisasi</strong></h2>
		</div>
		<div class="row">
			<?php foreach ($struktur as $st): ?>
			<div class="col-lg-3 col-md-6 d-flex align-items-stretch">
				<div class="member" data-aos="fade-up">
					<div class="member-img">
						<img src="<?= base_url() . $st->foto ?>" class="img-fluid" alt="">
					</div>
					<div class="member-info">
						<h4><?= $st->nama ?></h4>
						<span><?= $st->jabatan ?></span>
					</div>
				</div>
			</div>
			<?php endforeach ?>
		</div>
	</div>
</section>