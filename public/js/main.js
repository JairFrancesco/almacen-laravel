

$(document).ready(function(){
	
	$("#btnEnviar").click(function(){
		/*$("h4:first").css("color", "#FF3300")
		.css("font-size", "40px");*/
		
		var Titulos = ["Titulo 1", "Titulo 2", "Titulo 3", "Titulo 4"];
		
		$(Titulos).each(function(i, item){
			$("#recientes").append(
				$("<h4></h4>").html(item)
			);
		});
		
		
		
		
	});
	
	/*$(".btn").click(function(){
		alert( $(this).attr('class') );
	});*/
	
});































/*$(document).ready(function(){
	
	$("#btnEnviar").click(function(e){
		//alert('enviar');
		$('#modalNuevo').modal({keyboard: true, remote: 'nueva_pregunta.html'});
		e.preventDefault();
	});
	
});*/
