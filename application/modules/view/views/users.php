<div class="row">
	<div class="col-12 col-xl-3">
		<form id="users-form">
			<div class="form-group">
				<label for="users-id">id</label>
				<input type="text" name="users-id" id="users-id" class="form-control" required readonly>
			</div>
			<div class="form-group">
				<label for="users-nama">nama</label>
				<input type="text" name="users-nama" id="users-nama" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="users-email">email</label>
				<input type="email" name="users-email" id="users-email" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="users-password">password</label>
				<input type="password" name="users-password" id="users-password" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="users-password-ulangi">ulangi password</label>
				<input type="password" name="users-password-ulangi" id="users-password-ulangi" class="form-control" required>
			</div>
			<div class="form-group">
				<button type="submit" id="users-btn" class="btn btn-custom btn-block">Tambah</button>
				<button type="reset" id="users-reset" class="btn btn-block">Cancel</button>
			</div>
		</form>
	</div>
	<div class="col-12 col-xl-9">
		<div class="card-box">
			<div style="overflow-x:auto;">
        	<table id="t-users" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Email</th>
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