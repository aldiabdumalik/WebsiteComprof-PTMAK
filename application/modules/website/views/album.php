<div id="jsGallery" style="display: none;" data-title="Galeri">
	<?php foreach ($galeri as $gal): ?>
	
	<span 
		data-album-name="<?= $gal->folder ?>" 
		data-src="<?= base_url('uploads/kegiatan/') . $gal->folder . '/' . $gal->file; ?>" 
		data-thumbnail="<?= base_url('uploads/kegiatan/') . $gal->folder . '/' . $gal->file; ?>" 
		data-alt="$gal->file"></span>
	
	<?php endforeach ?>
</div>