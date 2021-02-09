$(document).ready(function () {
	const base_url = $('.base-url').data('baseurl');
	const xhr = new XMLHttpRequest();

	const tbl2 = $('#t-company').DataTable({
		"destroy": true,
		"processing": true, 
        "serverSide": false, 
        "order": [], 
        "ajax": {
            "url": base_url + 'api/Api/company',
            "type": "GET",
        },
        "columns": [
        	{ "data":"title_company" },
        	{ "data":"text_company" },
        	{
        		"data":null,
        		render: function ( data, type, row ) {
        			return `
        				<img src="${base_url + data.foto_company}" alt="company" class="img-responsive" width="25%">
        			`;
        		}
        	},
        	{
        		"data":null,
        		render: function ( data, type, row ) {
        			return `
        				<button type="button" class="btn btn-custom btn-edit" data-id="${data.id}" data-toggle="modal">Ubah</button>
        			`;
        		}
        	},
        ],
	});

	$('#edit-text').summernote({
		height: 200,
		minHeight: null,
		maxHeight: null,
		focus: false,
		toolbar: [
			['style', ['bold', 'italic', 'underline', 'clear']],
			['fontsize', ['fontsize']],
			['color', ['color']],
			['para', ['ul', 'ol', 'paragraph']]
		]
	});

	$(document).on('click', '.btn-edit', function () {
		$('#edit-modal').modal('show');
		xhr.onloadstart = function () {};
		xhr.onloadend = function () {
			const response = JSON.parse(this.responseText);
			const data = response.data[0];
			$('#edit-id').val(data.id);
			$('#edit-title').val(data.title_company);
			$('#edit-text').summernote('code',data.text_company);
		}
		xhr.open("GET", base_url + 'api/Api/company?id=' + $(this).data('id'), true);
		xhr.send();
		return false;
	});

	$('#edit-form').submit(function () {
		const formData = new FormData(this);
		formData.append("id", $('#edit-id').val());
		formData.append("title", $('#edit-title').val());
		formData.append("text", $('#edit-text').summernote('code'));
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
				$('#edit-modal').modal('hide');
				tbl2.ajax.reload();
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
		xhr.open("POST", base_url + 'api/Api/company', true);
		xhr.send(formData);
		return false;
	});
});