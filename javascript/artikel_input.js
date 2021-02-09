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

	$('#artikel-form').submit(function () {
		const formData = new FormData(this);
		formData.append("request", 'tambah');
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