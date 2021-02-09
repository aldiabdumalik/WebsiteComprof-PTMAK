<div class="row">
	<div class="col-12 col-xl-12">
		<div class="card-box">
			<form id="artikel-form">
				<div class="row">
					<div class="col-12 col-xl-6">
						<div class="form-group">
							<label for="artikel-judul">Judul</label>
							<input type="text" name="artikel-judul" id="artikel-judul" class="form-control" autocomplete="off" required>
						</div>
					</div>
					<div class="col-12 col-xl-6">
						<div class="form-group">
							<label for="artikel-url">Url</label>
							<input type="text" name="artikel-url" id="artikel-url" class="form-control" autocomplete="off" required>
						</div>
					</div>
					<div class="col-12 col-xl-6">
						<div class="form-group">
							<label for="artikel-deskripsi">Deskripsi</label>
							<textarea name="artikel-deskripsi" id="artikel-deskripsi" class="form-control" required></textarea>
						</div>
					</div>
					<div class="col-12 col-xl-6">
						<div class="form-group">
							<label for="artikel-keywords">Keywords</label>
							<input type="text" name="artikel-keywords" id="artikel-keywords" class="form-control" autocomplete="off" required>
						</div>
						<div class="form-group">
							<label for="artikel-foto">Foto</label>
							<input type="file" name="artikel-foto" id="artikel-foto" class="default" required />
						</div>
					</div>
					<div class="col-12">
						<div class="form-group">
							<label for="artikel-konten">Konten</label>
							<div id="artikel-konten" class="artikel-konten"></div>
						</div>
					</div>
					<div class="col-12">
						<button type="submit" class="btn btn-custom btn-block">Posting</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="modal fade" id="modal-loading" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <p align="center">Mohon tunggu beberapa saat...</p>
      </div>
    </div>
  </div>
</div>