<div class="row">
	<div class="col-12 col-xl-4">
		<div class="card-box">
			<form id="edit-form">
				<div class="form-group">
        			<label for="edit-id">ID</label>
        			<input type="text" name="edit-id" id="edit-id" class="form-control" required readonly>
        		</div>
        		<div class="form-group">
        			<label for="edit-moto">moto</label>
        			<textarea name="edit-moto" id="edit-moto" class="form-control" required cols="30" rows="10"></textarea>
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
        	<table id="t-moto" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
				<thead>
					<tr>
						<th>No</th>
						<th>Moto</th>
						<th>Option</th>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
			</div>
        </div>
	</div>
</div>