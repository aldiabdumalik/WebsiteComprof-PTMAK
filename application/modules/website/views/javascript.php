<!-- Vendor JS Files -->
<script src="<?= base_url('templates/front/') ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('templates/front/') ?>assets/vendor/pagination/jquery.simplePagination.js"></script>
<script src="<?= base_url('templates/front/') ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('templates/front/') ?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?= base_url('templates/front/') ?>assets/vendor/php-email-form/validate.js"></script>
<script src="<?= base_url('templates/front/') ?>assets/vendor/jquery-sticky/jquery.sticky.js"></script>
<script src="<?= base_url('templates/front/') ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?= base_url('templates/front/') ?>assets/vendor/venobox/venobox.min.js"></script>
<script src="<?= base_url('templates/front/') ?>assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="<?= base_url('templates/front/') ?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="<?= base_url('templates/front/') ?>assets/vendor/aos/aos.js"></script>
<script src="<?= base_url('templates/front/') ?>assets/vendor/galeri/js/jsGallery.js"></script>
<!-- Template Main JS File -->
<script src="<?= base_url('templates/front/') ?>assets/js/main.js"></script>
<?php if (!empty($js)): ?>
	<script src="<?= base_url('javascript/') . $js ?>.js"></script>
<?php endif ?>
<script>
	var gal = $('#jsGallery').jsGallery({
        showAlbums: true,
        connectAlbums: true
    });
    gal.jsGallery('show');
    $('.jsg-close').remove();
    $('.jsg-zoom').remove();
</script>