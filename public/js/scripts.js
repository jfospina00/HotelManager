$(function() {
	$('.tb-show').click(function(event) {
		/* Act on the event */
		$id    = $(this).attr('id');
		$token = $('#_token1').val();
		$route = $("input[route]").val();
		$.post($route, {id: $id,_token:$token}, function(datos) {
		  	$('.modal-body').html(datos);
		});
	});
	$('.tb-showReserveHall').click(function(event) {
		/* Act on the event */
		$id    = $(this).attr('id');
		$token = $('#_token2').val();
		$route = $("input[route]").val();
		$.post($route, {id: $id,_token:$token}, function(datos) {
		  	$('.modal-body').html(datos);
		});
	});
});
