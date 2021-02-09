$(document).ready(function () {
	const base_url = $('.base-url').data('baseurl');
	const xhr = new XMLHttpRequest();

	const tbl2 = $('#t-medsos').DataTable({
		"destroy": true,
		"processing": true, 
        "serverSide": false, 
        "order": [], 
        "ajax": {
            "url": base_url + 'api/Api/medsos',
            "type": "GET",
        },
        "columns": [
        	{ "data":"email" },
        	{ "data":"telp" },
        	{ "data":"wa" },
        	{
        		"data":null,
        		render: function ( data, type, row ) {
        			return `
        				<a href="${data.fb}" target="_blank">Lihat</a>
        			`;
        		}
        	},
        	{
        		"data":null,
        		render: function ( data, type, row ) {
        			return `
        				<a href="${data.ig}" target="_blank">Lihat</a>
        			`;
        		}
        	},
        	{
        		"data":null,
        		render: function ( data, type, row ) {
        			return `
        				<a href="${data.yt}" target="_blank">Lihat</a>
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
        			`;
        		}
        	},
        ],
	});

	$('#edit-reset').click(function () {
        $('#edit-btn').text('Tambah');
    });

    $(document).on('click', '.btn-edit', function () {
        xhr.onloadstart = function () {};
        xhr.onloadend = function () {
            const response = JSON.parse(this.responseText);
            const data = response.data[0];
            $('#edit-id').val(data.id);
            $('#edit-email').val(data.email);
            $('#edit-telp').val(data.telp);
            $('#edit-wa').val(data.wa);
            $('#edit-fb').val(data.fb);
            $('#edit-ig').val(data.ig);
            $('#edit-yt').val(data.yt);
            $('#edit-btn').text('Ubah');
        }
        xhr.open("GET", base_url + 'api/Api/medsos?id=' + $(this).data('id'), true);
        xhr.send();
        return false;
    });

    $('#edit-form').submit(function () {
        const formData = new FormData(this);
        formData.append("action", 'ubah');
        formData.append("id", $('#edit-id').val());
        formData.append("email", $('#edit-email').val());
        formData.append("telp", $('#edit-telp').val());
        formData.append("wa", $('#edit-wa').val());
        formData.append("fb", $('#edit-fb').val());
        formData.append("ig", $('#edit-ig').val());
        formData.append("yt", $('#edit-yt').val());
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
        xhr.open("POST", base_url + 'api/Api/medsos', true);
        xhr.send(formData);
        return false;
    });
});