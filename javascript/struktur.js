$(document).ready(function () {
	const base_url = $('.base-url').data('baseurl');
	const xhr = new XMLHttpRequest();

	const tbl2 = $('#t-struktur').DataTable({
		"destroy": true,
		"processing": true, 
        "serverSide": false, 
        "order": [], 
        "ajax": {
            "url": base_url + 'api/Api/struktur',
            "type": "GET",
        },
        "columns": [
        	{ "data":"no" },
        	{ "data":"nama" },
        	{ "data":"jabatan" },
        	{
        		"data":null,
        		render: function ( data, type, row ) {
        			return `
        				<img src="${base_url + data.foto}" alt="company" class="img-responsive" width="15%">
        			`;
        		}
        	},
        	{
        		"data":null,
        		render: function ( data, type, row ) {
        			return `
        				<button type="button" class="btn btn-custom btn-edit" data-id="${data.id}">
        					<i class="fa fa-edit"></i>
        				</button> 
        				<button type="button" class="btn btn-danger btn-hapus" data-id="${data.id}">
        					<i class="fa fa-trash"></i>
        				</button>
        			`;
        		}
        	},
        ],
	});

	$(document).on('click', '.btn-edit', function () {
		xhr.onloadstart = function () {};
		xhr.onloadend = function () {
			const response = JSON.parse(this.responseText);
			const data = response.data[0];
			$('#edit-id').val(data.id);
			$('#edit-nama').val(data.nama);
			$('#edit-jabatan').val(data.jabatan);
			$('#edit-btn').text('Ubah');
		}
		xhr.open("GET", base_url + 'api/Api/struktur?id=' + $(this).data('id'), true);
		xhr.send();
		return false;
	});

	$(document).on('click', '.btn-hapus', function () {
		const formData = new FormData();
		formData.append("action", 'delete');
		formData.append("id", $(this).data('id'));
		xhr.onloadstart = function () {};
		xhr.onloadend = function () {
			const response = JSON.parse(this.responseText);
			if (response.status == true) {
				$.toast({
					text: response.message,
					position: 'top-right',
					loaderBg: '#5ba035',
					icon: 'success',
					hideAfter: 3000,
					stack: 1
				});
			}else{
				$.toast({
					heading: 'Gagal!',
					text: response.message,
					position: 'top-right',
					loaderBg: '#bf441d',
					icon: 'error',
					hideAfter: 3000,
					stack: 1
				});
			}
			$('#edit-form').trigger('reset');
			tbl2.ajax.reload();
			$('#edit-btn').text('Tambah');
		}
		xhr.open("POST", base_url + 'api/Api/struktur', true);
		xhr.send(formData);
		return false;
	});

	$('#edit-reset').click(function () {
		$('#edit-btn').text('Tambah');
	});

	$('#edit-form').submit(function () {
		const formData = new FormData(this);
		formData.append("action", 'ubah');
		formData.append("id", $('#edit-id').val());
		formData.append("nama", $('#edit-nama').val());
		formData.append("jabatan", $('#edit-jabatan').val());
		if ($('#edit-foto')[0].files.length != 0) {
			formData.append("is_upload", 'yes');
			formData.append("foto", $('#edit-foto')[0].files[0]);
		}else{
			formData.append("is_upload", null);
		}
		xhr.onloadstart = function () {};
		xhr.onloadend = function () {
			const response = JSON.parse(this.responseText);
			if (response.status == true) {
				$.toast({
					text: response.message,
					position: 'top-right',
					loaderBg: '#5ba035',
					icon: 'success',
					hideAfter: 3000,
					stack: 1
				});
				$('#edit-form').trigger('reset');
				tbl2.ajax.reload();
				$('#edit-btn').text('Tambah');
			}else{
				$.toast({
					heading: 'Gagal!',
					text: response.message,
					position: 'top-right',
					loaderBg: '#bf441d',
					icon: 'error',
					hideAfter: 3000,
					stack: 1
				});
			}
		}
		xhr.open("POST", base_url + 'api/Api/struktur', true);
		xhr.send(formData);
		return false;
	});

});