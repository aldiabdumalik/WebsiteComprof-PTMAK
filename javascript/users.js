$(document).ready(function () {
	const base_url = $('.base-url').data('baseurl');
	const xhr = new XMLHttpRequest();

	const tbl2 = $('#t-users').DataTable({
		"destroy": true,
		"processing": true, 
        "serverSide": false, 
        "order": [], 
        "ajax": {
            "url": base_url + 'api/Api/users',
            "type": "GET",
        },
        "columns": [
        	{ "data":"no" },
        	{ "data":"username" },
        	{ "data":"email" },
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
			$('#users-id').val(data.id);
			$('#users-nama').val(data.username);
			$('#users-email').val(data.email);
			$('#users-btn').text('Ubah');
		}
		xhr.open("GET", base_url + 'api/Api/users?id=' + $(this).data('id'), true);
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
			$('#users-form').trigger('reset');
			tbl2.ajax.reload();
			$('#users-btn').text('Tambah');
		}
		xhr.open("POST", base_url + 'api/Api/users', true);
		xhr.send(formData);
		return false;
	});

	$('#users-reset').click(function () {
		$('#users-btn').text('Tambah');
	});

	$('#users-form').submit(function () {
		const formData = new FormData(this);
		formData.append("action", 'ubah');
		formData.append("id", $('#users-id').val());
		formData.append("username", $('#users-nama').val());
		formData.append("email", $('#users-email').val());
		formData.append("password", $('#users-password').val());
		if ($('#users-password').val() != $('#users-password-ulangi').val()) {
			$.toast({
				text: 'Maaf password tidak sama, silahkan ulangi lagi',
				position: 'top-right',
				loaderBg: '#bf441d',
				icon: 'error',
				hideAfter: 3000,
				stack: 1
			});
		}else{
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
					$('#users-form').trigger('reset');
					tbl2.ajax.reload();
					$('#users-btn').text('Tambah');
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
			xhr.open("POST", base_url + 'api/Api/users', true);
			xhr.send(formData);
		}
		return false;
	});

});