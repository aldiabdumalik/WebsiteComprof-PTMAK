<div class="row">
	<div class="col-12">
		<div class="card-box">
			<div style="overflow-x:auto;">
        	<table id="t-company" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
				<thead>
					<tr>
						<th>Title</th>
						<th>Text</th>
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
<div id="edit-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
            	<form id="edit-form">
            		<div class="form-group">
            			<label for="edit-id">ID</label>
            			<input type="text" name="edit-id" id="edit-id" class="form-control" required readonly>
            		</div>
            		<div class="form-group">
            			<label for="edit-title">Title</label>
            			<input type="text" name="edit-title" id="edit-title" class="form-control" required>
            		</div>
            		<div class="form-group">
            			<label for="edit-text">Text</label>
						<div id="edit-text" class="edit-text"></div>
            		</div>
            		<div class="form-group">
            			<label for="edit-foto">Foto</label>
            			<input type="file" name="edit-foto" id="edit-foto" class="default" />
            		</div>
            		<div class="form-group">
            			<button type="submit" class="btn btn-custom btn-block">Ubah</button>
            		</div>
            	</form>
            </div>
        </div>
    </div>
</div>