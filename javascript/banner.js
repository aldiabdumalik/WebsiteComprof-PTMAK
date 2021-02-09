$(document).ready(function () {
	const base_url = $('.base-url').data('baseurl');
	const xhr = new XMLHttpRequest();

	const tbl = $('#t-kegiatan').DataTable({
		"destroy": true,
		"processing": true, 
        "serverSide": false, 
        "order": [], 
        "ajax": {
            "url": base_url + 'api/Api/banner',
            "type": "GET",
        },
        "columns": [
        	{ "data":"no" },
        	{
        		"data":null,
        		render: function ( data, type, row ) {
        			return `
        				<img src="${base_url + data.foto}" alt="company" class="img-responsive" width="50%">
        			`;
        		}
        	},
        	{
        		"data":null,
        		render: function ( data, type, row ) {
        			return `
        				<button type="button" class="btn btn-danger btn-hapus" data-id="${data.id}"><i class="fa fa-trash"></i></button>
        			`;
        		}
        	},
        ],
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
            tbl.ajax.reload();
        }
        xhr.open("POST", base_url + 'api/Api/banner', true);
        xhr.send(formData);
        return false;
    });

    $('#modal-loading').modal({
        backdrop: 'static',
        keyboard: true, 
        show: false
    });

    function hideModal(){
        $("#modal-loading").removeClass("in");
        $(".modal-backdrop").remove();
        $("#modal-loading").hide();
    }

    $('#kegiatan-form').submit(function () {
        const formData = new FormData(this);
        formData.append("foto", $('#kegiatan-foto')[0].files[0]);
        xhr.onloadstart = function () {
            $('#modal-loading').modal('show');
        };
        xhr.onloadend = function () {
            const response = JSON.parse(this.responseText);
            hideModal();
            if (response.status == true) {
                $.toast({
                    text: response.message,
                    position: 'top-right',
                    loaderBg: '#5ba035',
                    icon: 'success',
                    hideAfter: 3000,
                    stack: 1
                });
                $('#kegiatan-form').trigger('reset');
                tbl.ajax.reload();
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
        xhr.open("POST", base_url + 'api/Api/banner', true);
        xhr.send(formData);
        return false;
    });
});