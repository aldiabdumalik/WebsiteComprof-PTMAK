<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="<?= base_url() ?>/templates/img/favicon.png">
	<title>MAK | <?= $title ?></title>
	<?= $this->load->view($css); ?>
</head>
<body class="account-pages">
	<?= $this->load->view($content); ?>
	<div class="base-url" data-baseurl="<?= base_url() ?>"></div>
	<?= $this->load->view($javascript); ?>
</body>
</html>