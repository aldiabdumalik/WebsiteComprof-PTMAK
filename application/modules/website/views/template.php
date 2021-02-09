<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mitra Andalan Karawang</title>
	<meta content="<?= $deskripsi; ?>" name="descriptison">
	<meta content="<?= $keywords; ?>" name="keywords">
	<?= $this->load->view($css); ?>
</head>
<body>
	<?= $this->load->view($navbar); ?>
	<?= $this->load->view($content); ?>
	<footer id="footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6 footer-contact">
						<h4>PT. Mitra Andalan Karawang</h4>
						<p>
							Perusahaan yang bergerak di bidang Labour Supply dan Contrucstions. PT. MAK (Mitra Andalan Karawang) juga merupakan perushaan penyelenggara program magang kerja ke Jepang.
						</p>
					</div>
					<div class="col-lg-4 col-md-6 footer-contact">
						<h4>Alamat</h4>
						<p>
							Gd. Karawang Asri Center B21-23 <br>
							Jl. Surontokunto Rawagabus, Kec. Karawang Timur,<br>
							Kab. Karawang, Jawa Barat - 41314<br>
							<strong>Phone:</strong> (0267) 8604099 / 89
						</p>
					</div>
					<div class="col-lg-4 col-md-6 footer-contact">
						<h4>Punya Pertanyaan?</h4>
						<p>
							Hubungi Kami melalui WhatsApp dan staf Kami akan menjawab semua pertanyaan Kamu
						</p>
						<a class="wa" href="https://wa.me/<?= $medsos->wa_medsos; ?>"><i class="icofont-whatsapp"></i> WhatsApp</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container d-md-flex py-4">
			<div class="mr-md-auto text-center text-md-left">
				<div class="copyright">
					&copy; Copyright <strong><span>PT. Mitra Andalan Karawang</span></strong>. All Rights Reserved
				</div>
			</div>
			<div class="social-links text-center text-md-right pt-3 pt-md-0">
				<a href="<?= $medsos->fb_medsos ?>" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
				<a href="<?= $medsos->ig_medsos ?>" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
				<a href="<?= $medsos->yt_medsos ?>" class="youtube" target="_blank"><i class="bx bxl-youtube"></i></a>
			</div>
		</div>
	</footer>
	<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
	<?= $this->load->view($javascript); ?>
</body>
</html>