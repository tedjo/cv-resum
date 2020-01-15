/*global $, jQuery, alert*/
$(document).ready(function () {

	'use strict';
	$(function () {
		var typed = $(".typed");
		var speed = $('#speed').val();
		$.ajax({
			url: "home/showData/",
			method: "POST",
			dataType: "JSON",
			success: function (data) {
				console.log(parseInt(speed));
				typed.typed({
					strings: data,
					typeSpeed: parseInt(speed),
					loop: true,
				});
			}
		});
	});

});
