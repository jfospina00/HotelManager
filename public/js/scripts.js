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
	$('#stroom').change(function(event) {
		/* Act on the event */
		$id    = $(this).val();
		$token = $('#_token1').val();
		$route = $("input[route]").val();
		$start = $('input#start').val();
		$exit = $('input#exit').val();
		$.post($route, {exit:$exit, start: $start,id: $id, _token:$token}, function(datos) {
		  	$('#mostrar').html(datos);
		});
	});
	$('#start').change(function(event) {
		$('#stroom').removeAttr('disabled');
	})
});
	