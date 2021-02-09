$(document).ready(function () {
	const base_url = $('.base-url').data('baseurl');
	const xhr = new XMLHttpRequest();

	const tbl2 = $('#t-contact').DataTable({
		"destroy": true,
		"processing": true, 
        "serverSide": false, 
        "order": [], 
        "ajax": {
            "url": base_url + 'api/Api/contact',
            "type": "GET",
        },
        "columns": [
        	{ "data":"no" },
        	{ "data":"tanggal" },
        	{ "data":"email" },
        	{ "data":"subject" },
        	{ "data":"isi" },
        ],
	});
});