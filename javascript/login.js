$(document).ready(function () {
	const base_url = $('.base-url').data('baseurl');
	const xhr = new XMLHttpRequest();
	$('#login-form').submit(function () {
		const data = {
			'id': $('#login-id').val(),
			'password': $('#login-password').val()
		};
		xhr.onloadstart = function () {};
		xhr.onloadend = function () {
			const response = JSON.parse(this.responseText);
			if (response.status == true) {
				window.localStorage.setItem('myId', response.data.myId);
				$.toast({
					text: response.message,
					position: 'top-right',
					loaderBg: '#5ba035',
					icon: 'success',
					hideAfter: 3000,
					stack: 1
				});
				window.location.href = base_url + 'dashboard.html';
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
		xhr.open("POST", base_url + 'api/Api/login', true);
		xhr.send(JSON.stringify(data));
		return false;
	});
});