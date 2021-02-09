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
	<?= $this->load->view($content); ?>
	<?= $this->load->view($javascript); ?>
</body>
</html>