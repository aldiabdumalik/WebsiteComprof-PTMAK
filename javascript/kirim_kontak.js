$(document).ready(function () {
	const base_url = $('.base-url').data('baseurl');
	const xhr = new XMLHttpRequest();
	$('#form-contact').submit(function () {
		const data = {
			'nama': $('#name').val(),
			'email': $('#email').val(),
			'subject': $('#subject').val(),
			'isi': $('#message').val(),
		};
		xhr.onloadstart = function () {};
		xhr.onloadend = function () {
			const response = JSON.parse(this.responseText);
			if (response.status == true) {
				alert(response.message);
				window.location.href = base_url;
			}else{
				alert('gagal');
			}
		}
		xhr.open("POST", base_url + 'api/Api/sendkontak', true);
		xhr.send(JSON.stringify(data));
		return false;
	});
});