$(document).ready(function () {
	const base_url = $('.base-url').data('baseurl');
	const id = $('.id-artikel').data('idartikel');
	const xhr = new XMLHttpRequest();
	function artikel() {
		xhr.onloadstart = function () {};
		xhr.onloadend = function () {
			const response = JSON.parse(this.responseText);
			const data = response.data[0];
			$('#foto-artikel').attr('src', base_url + "uploads/artikel/" + data.foto_artikel);
			$('#judul-artikel').html(data.judul_artikel);
			$('#author-artikel').html(data.author);
			$('#isi-artikel').load(base_url + "uploads/artikel/" + data.url_artikel + ".html");
			$('#tgl-artikel').html(data.tgl_artikel);

			//share
			$('#share-twitter').attr('href', 'http://twitter.com/share?url=' + base_url + 'artikel/detail/' + data.url_artikel);
			$('#share-facebook').attr('href', 'https://www.facebook.com/sharer.php?u=' + base_url + 'artikel/detail/' + data.url_artikel);
			$('#share-wa').attr('href', 'whatsapp://send?text=' + base_url + 'artikel/detail/' + data.url_artikel);
		}
		xhr.open("GET", base_url + 'api/Api_artikel/artikel?id=' + id, true);
		xhr.send();
		return false;
	}
	artikel();
});