$(document).ready(function () {
	const base_url = $('.base-url').data('baseurl');
	const xhr = new XMLHttpRequest();
	$('#artikel-pagination').pagination({
        cssStyle: 'compact-theme',
        itemsOnPage: 6,
        onPageClick (pageNumber, event){
        	getArtikel(pageNumber-1);
        }
    });
    function getArtikel(page=0) {
    	xhr.onloadstart = function () {};
		xhr.onloadend = function () {
			const response = JSON.parse(this.responseText);
			$('#list-artikel').empty();
			$('#artikel-pagination').pagination('updateItems', response.all.jml);
			$.each(response.data, function (i, data) {
				$('#list-artikel').append(`
					<div class="col-12 col-md-4 d-flex align-items-stretch" data-aos="fade-up">
						<div class="card">
							<div class="card-img">
								<img src="${base_url}uploads/artikel/${data.foto_artikel}" alt="img-artikel">
							</div>
							<div class="card-body">
								<h5 class="card-title">${data.judul_artikel}</h5>
								<p class="card-text">
									${data.deskripsi_artikel}
								</p>
								<div class="read-more">
									<a href="${base_url}artikel/detail/${data.url_artikel}"><i class="icofont-arrow-right"></i> Lihat selengkapnya</a>
								</div>
							</div>
						</div>
					</div>
				`);
			});
		}
		xhr.open("GET", base_url + 'api/Api_artikel?page=' + page, true);
		xhr.send();
		return false;
    }
    getArtikel();
});