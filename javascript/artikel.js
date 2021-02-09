$(document).ready(function () {
	const base_url = $('.base-url').data('baseurl');
	const xhr = new XMLHttpRequest();
    $('#artikel-konten').summernote({
        height: 300,
        minHeight: null,
        maxHeight: null,
        focus: false,
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['insert', ['picture', 'link', 'hr']]
        ]
    });
	const tbl2 = $('#t-artikel').DataTable({
		"destroy": true,
		"processing": true, 
        "serverSide": false, 
        "order": [], 
        "ajax": {
            "url": base_url + 'api/Api/artikel',
            "type": "GET",
        },
        "columns": [
        	{ "data":"no" },
        	{ "data":"judul" },
            { "data":"author" },
        	{
        		"data":null,
        		render: function ( data, type, row ) {
        			return `
        				<a href="${data.url}" class="btn btn-custom" target="_blank">
                            <i class="fa fa-eye"></i>
                        </a>
                        <button type="button" class="btn btn-warning btn-edit" data-id="${data.id}">
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
        $('#edit-modal').modal('show');
        xhr.onloadstart = function () {};
        xhr.onloadend = function () {
            const response = JSON.parse(this.responseText);
            const data = response.data[0];
            $('#artikel-id').val(data.id);
            $('#artikel-judul').val(data.judul);
            $('#artikel-url').val(data.url_2);
            $('#artikel-keywords').val(data.keywords);
            $('#artikel-deskripsi').val(data.deskripsi);
            $('#artikel-konten').summernote('code', data.konten);
        }
        xhr.open("GET", base_url + 'api/Api/artikel?id=' + $(this).data('id'), true);
        xhr.send();
        return false;
    });

    $(document).on('click', '.btn-hapus', function () {
        const formData = new FormData();
        formData.append("request", 'delete');
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
        xhr.open("POST", base_url + 'api/Api/artikel', true);
        xhr.send(formData);
        return false;
    });

    $('#artikel-form').submit(function () {
        const formData = new FormData(this);
        formData.append("request", 'tambah');
        formData.append("id", $('#artikel-id').val());
        formData.append("judul", $('#artikel-judul').val());
        formData.append("url", $('#artikel-url').val());
        formData.append("deskripsi", $('#artikel-deskripsi').val());
        formData.append("keywords", $('#artikel-keywords').val());
        formData.append("konten", $('#artikel-konten').summernote('code'));
        if ($('#artikel-foto')[0].files.length != 0) {
            formData.append("is_upload", 'yes');
            formData.append("foto", $('#artikel-foto')[0].files[0]);
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
                $('#artikel-form').trigger('reset');
                window.location.href = base_url + 'artikel.html';
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
        xhr.open("POST", base_url + 'api/Api/artikel', true);
        xhr.send(formData);
        return false;
    });
});