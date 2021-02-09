$(document).ready(function () {
	const base_url = $('.base-url').data('baseurl');
	const xhr = new XMLHttpRequest();

    xhr.onloadstart = function () {};
    xhr.onloadend = function () {
        const response = JSON.parse(this.responseText);
        const data = response.data;
        $('#tp-id').val(data.id);
        $('#tp-judul').val(data.judul);
        $('#tp-text').val(data.text);
        $('#tp-form').submit(function () {
            const formData = new FormData(this);
            formData.append("id", $('#tp-id').val());
            formData.append("judul", $('#tp-judul').val());
            formData.append("text", $('#tp-text').val());
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
                    setTimeout(function () {
                        window.location.reload();
                    }, 3100)
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
            xhr.open("POST", base_url + 'api/Api_artikel/slogan', true);
            xhr.send(formData);
            return false;
        });
    }
    xhr.open("GET", base_url + 'api/Api_artikel/slogan', true);
    xhr.send();
    return false;

});