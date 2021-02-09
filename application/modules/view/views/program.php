<div class="row">
	<div class="col-12 col-xl-4">
		<div class="card-box">
			<form id="edit-form">
				<div class="form-group">
        			<label for="edit-id">ID</label>
        			<input type="text" name="edit-id" id="edit-id" class="form-control" required readonly>
        		</div>
        		<div class="form-group">
        			<label for="edit-judul">Title</label>
        			<input type="text" name="edit-judul" id="edit-judul" class="form-control" required>
        		</div>
        		<div class="form-group">
        			<label for="edit-program">Deskripsi</label>
        			<textarea name="edit-program" id="edit-program" class="form-control" required cols="30" rows="10"></textarea>
        		</div>
        		<div class="form-group">
        			<button type="submit" id="edit-btn" class="btn btn-custom btn-block">Tambah</button>
        			<button type="reset" id="edit-reset" class="btn btn-block">Cancel</button>
        		</div>
			</form>
		</div>
	</div>
	<div class="col-12 col-xl-8">
		<div class="card-box">
			<div style="overflow-x:auto;">
        	<table id="t-program" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
				<thead>
					<tr>
						<th>No</th>
						<th>Title</th>
						<th>Deskripsi</th>
						<th>Option</th>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
			</div>
        </div>
	</div>
	<div class="col-12 col-xl-4">
		<div class="card-box">
			<form id="edit-form-video">
				<div class="form-group">
        			<input type="hidden" name="edit-id-video" id="edit-id-video" class="form-control" required>
        		</div>
        		<div class="form-group">
            			<label for="edit-foto-video">Thumbnail</label>
            			<input type="file" name="edit-foto-video" id="edit-foto-video" class="default" />
            		</div>
        		<div class="form-group">
        			<label for="edit-url-video">url video</label>
        			<textarea name="edit-url-video" id="edit-url-video" class="form-control" required cols="30" rows="10"></textarea>
        		</div>
        		<div class="form-group">
        			<button type="submit" id="edit-btn-video" class="btn btn-custom btn-block">Ubah</button>
        			<button type="reset" id="edit-reset-video" class="btn btn-block">Cancel</button>
        		</div>
			</form>
		</div>
	</div>
	<div class="col-12 col-xl-8">
		<div class="card-box">
			<div style="overflow-x:auto;">
        	<table id="t-program-video" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
				<thead>
					<tr>
						<th>No</th>
						<th>Thumbnail</th>
						<th>Url Video</th>
						<th>Option</th>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
			</div>
        </div>
	</div>
</div>