

$(document).ready(function(){
	$nuevo_item = $("#item-template").clone();
	
	$.get('preguntas/usuario', null, function(data) {
		$("#preguntas-usuario").empty();
		$(data).each(function(i, item) {
			var $fila = $nuevo_item.clone();
			$fila.find("[data-field=descripcion]").html(item.descripcion);
			$fila.find("[data-field=vistas]").html(item.vistas);
			$fila.find("[data-field=autor]").html(item.id_usuario);
			$fila.find("[data-field=fecha]").html(item.fecha);
			$fila.appendTo("#preguntas-usuario").show();
		});
	},'json');
	
});































/*$(document).ready(function(){
	
	$("#btnEnviar").click(function(e){
		//alert('enviar');
		$('#modalNuevo').modal({keyboard: true, remote: 'nueva_pregunta.html'});
		e.preventDefault();
	});
	
});*/
