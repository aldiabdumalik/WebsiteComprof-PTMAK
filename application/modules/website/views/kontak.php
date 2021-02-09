<section id="breadcrumbs" class="breadcrumbs">
	<div class="container">
		<div class="d-flex justify-content-between align-items-center">
			<h2>Kontak</h2>
			<ol>
				<li><a href="<?= base_url() ?>">Beranda</a></li>
				<li>Kontak</li>
			</ol>
		</div>
	</div>
</section>
<div class="map-section">
	<iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5608.144942939297!2d107.32339080718623!3d-6.321727120890783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6977b28cede5f9%3A0x2933e694442090ca!2sTelecom%20PDC%20Karawang!5e0!3m2!1sid!2sid!4v1597820270848!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
</div>
<section id="contact" class="contact">
	<div class="container">
		<div class="row justify-content-center" data-aos="fade-up">
			<div class="col-lg-10">
				<div class="info-wrap">
					<div class="row">
						<div class="col-lg-4 info mt-4 mt-lg-0">
							<h4>Email:</h4>
							<p>info@example.com<br>contact@example.com</p>
						</div>
						<div class="col-lg-4 info">
							<h4>Alamat :</h4>
							<p>
								Gd. Karawang Asri Center B21-23 <br>
								Jl. Surontokunto Rawagabus, Kec. Karawang Timur,<br>
								Kab. Karawang, Jawa Barat - 41314<br>
							</p>
						</div>
						<div class="col-lg-4 info mt-4 mt-lg-0">
							<h4>Telp :</h4>
							<p>(0267) 8604099<br>(0267) 8604089</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row mt-5 justify-content-center" data-aos="fade-up">
			<div class="col-lg-10">
				<form method="post" role="form" id="form-contact" class="php-email-form">
					<div class="form-row">
						<div class="col-md-6 form-group">
							<input type="text" name="name" id="name" class="form-control" placeholder="Nama Lengkap" required />
						</div>
						<div class="col-md-6 form-group">
							<input type="email" name="email" id="email" class="form-control" placeholder="Email" required />
						</div>
					</div>
					<div class="form-group">
						<input type="text" name="subject" id="subject" class="form-control" placeholder="Subjek" required />
					</div>
					<div class="form-group">
						<textarea class="form-control" name="message" id="message" rows="5" placeholder="Ketikan pesan atau pertanyaan kamu disini" required></textarea>
					</div>
					<button type="submit">Kirim Pesan</button>
				</form>
			</div>
		</div>
	</div>
	<div class="base-url" data-baseurl="<?= base_url() ?>"></div>
</section>