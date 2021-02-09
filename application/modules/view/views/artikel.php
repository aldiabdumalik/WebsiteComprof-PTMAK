<div class="row">
	<div class="col-12 col-xl-12">
		<div class="card-box">
			<div style="overflow-x:auto;">
        	<table id="t-artikel" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
				<thead>
					<tr>
						<th>No</th>
						<th>Judul</th>
						<th>Penulis</th>
						<th>Option</th>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
			</div>
        </div>
	</div>
</div>
<div id="edit-modal" class="modal bd-example-modal-lg fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
            	<form id="artikel-form">
					<div class="row">
						<div class="col-12 ">
							<div class="form-group">
								<label for="artikel-id">id</label>
								<input type="text" name="artikel-id" id="artikel-id" class="form-control" autocomplete="off" required readonly>
							</div>
						</div>
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
								<input type="file" name="artikel-foto" id="artikel-foto" class="default" />
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
</div>