<div class="row">
	<div class="col-12 col-xl-3">
		<form id="kegiatan-form">
			<div class="form-group">
				<label for="kegiatan-folder">Folder</label>
				<input type="text" name="kegiatan-folder" id="kegiatan-folder" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="kegiatan-foto">Foto</label>
				<input type="file" name="kegiatan-foto" id="kegiatan-foto" class="default" required />
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-custom btn-block">Upload</button>
			</div>
		</form>
	</div>
	<div class="col-12 col-xl-9">
		<div class="card-box">
			<div style="overflow-x:auto;">
        	<table id="t-kegiatan" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
				<thead>
					<tr>
						<th>No</th>
						<th>Folder</th>
						<th>Foto</th>
						<th>Option</th>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
			</div>
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