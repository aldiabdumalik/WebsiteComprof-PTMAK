<div class="row">
	<div class="col-12 col-xl-4">
		<div class="card-box">
			<form id="edit-form">
				<div class="form-group">
        			<label for="edit-id">ID</label>
        			<input type="text" name="edit-id" id="edit-id" class="form-control" required readonly>
        		</div>
        		<div class="form-group">
        			<label for="edit-email">email</label>
        			<input type="text" name="edit-email" id="edit-email" class="form-control" required>
        		</div>
        		<div class="form-group">
        			<label for="edit-telp">telp</label>
        			<input type="text" name="edit-telp" id="edit-telp" class="form-control" required>
        		</div>
        		<div class="form-group">
        			<label for="edit-wa">Whatsapp</label>
        			<input type="text" name="edit-wa" id="edit-wa" class="form-control" required>
        		</div>
        		<div class="form-group">
        			<label for="edit-fb">fb</label>
        			<textarea name="edit-fb" id="edit-fb" class="form-control" required cols="30" rows="10"></textarea>
        		</div>
        		<div class="form-group">
        			<label for="edit-ig">ig</label>
        			<textarea name="edit-ig" id="edit-ig" class="form-control" required cols="30" rows="10"></textarea>
        		</div>
        		<div class="form-group">
        			<label for="edit-yt">yt</label>
        			<textarea name="edit-yt" id="edit-yt" class="form-control" required cols="30" rows="10"></textarea>
        		</div>
        		<div class="form-group">
        			<button type="submit" id="edit-btn" class="btn btn-custom btn-block">Ubah</button>
        			<button type="reset" id="edit-reset" class="btn btn-block">Cancel</button>
        		</div>
			</form>
		</div>
	</div>
	<div class="col-12 col-xl-8">
		<div class="card-box">
			<div style="overflow-x:auto;">
        	<table id="t-medsos" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
				<thead>
					<tr>
						<th>Email</th>
						<th>Telepon</th>
						<th>Whatsapp</th>
						<th>Facebook</th>
						<th>Instagram</th>
						<th>YouTube</th>
						<th>Option</th>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
			</div>
        </div>
	</div>
</div>