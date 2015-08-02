var url = window.location.href.split('/'),
base_url = window.location.protocol + '//' + url[2] + '/' + url[3] + '/';

$(document).ready(function(){ 
	//$("#historico").hide();
	$("#novo").hide();

	$("#paciente_novo").bind("click", function(){
		$("#novo").fadeIn();
		$("#velho").fadeOut();
	});
	$("#paciente_velho").bind("click", function(){
		$("#velho").fadeIn();
		$("#novo").fadeOut();
	});


	$("#salvarPaciente").click(function(){
		//var dados = $("form#PacienteAddForm ").serialize();		
		var dados = "_method=POST&data[Paciente][nome]="+$("div.pacientes #nome").val()+"&data[Paciente][sexo]="+$("div.pacientes #sexo").val()+"&data[Paciente][telefone]="+$("div.pacientes #telefone").val()+"&data[Paciente][rg]="+$("div.pacientes #rg").val()+"&data[Paciente][orgao_exp]="+$("div.pacientes #orgao_exp").val()+"&data[Paciente][logradouro]="+$("div.pacientes #logradouro").val()+"&data[Paciente][cidade_id]="+$("div.pacientes #cidade_id").val()+"&data[Paciente][estado_id]="+$("div.pacientes #estado_id").val()+"&data[Paciente][atividade]="+$("div.pacientes #atividade").val()+"&data[Paciente][procedencia]="+$("div.pacientes #procedencia").val()+"&data[Paciente][responsavel]="+$("div.pacientes #responsavel").val();
		var nomePaciente = $("div.pacientes #nome").val();
		$.get(base_url+"historicos/salvaPacienteAjax?"+dados,
			  null,
			  function(data) {
			  		var data = data.replace(/"/gi, '');
			  		alert(data)
			  		if(data != 0){
				  		var id_paciente = parseInt(data);
				  		$("#paciente_id_hist").val(id_paciente);
				  		$("#historico").fadeIn("slow");
				  		$("#novo").fadeOut("slow");
				  		$("#identificacao").removeClass("active");
				  		$("#ip").removeClass("active");
				  		$("#anamnese").addClass("active");
				  		$("#anm").addClass("active");
				  		$("#nomePaciente").text("Paciente: "+nomePaciente);
				  		$("li").removeClass('esconde');

				  	}
		});
	});


	 $( "#paciente_id" ).autocomplete({
		source: base_url+"/historicos/pacienteAjax",
		minLength: 2,
		select: function( event, ui ) {
			$("#nomePaciente").text("Paciente: "+ui.item.label);
			$("#paciente_id_hist").val(ui.item.id);
	  		$("#historico").fadeIn("slow");
	  		$("#novo").fadeOut("slow");
	  		$("#identificacao").removeClass("active");
			$("#ip").removeClass("active");
			$("#anamnese").addClass("active");
			$("#anm").addClass("active");
			$("li").removeClass('esconde');
			
		}
	});

});

	function uploadImg(){
		
		var img1 = $("#tools_sketch1").val();
		var img  = $("#tools_sketch").val();

		var data  = img.toDataURL();
		var data1 = img1.toDataURL();
		
		$.ajax({
		  type: "POST",
		  url: base_url+"/historicos/uploadImg",
		  data: {
		     img : data, 
		     img1: data1
		  }
		}).done(function(o) {
		  return true;		  
		  //console.log('saved'); 
		  // If you want the file to be visible in the browser 
		  // - please modify the callback in javascript. All you
		  // need is to return the url to the file, you just saved 
		  // and than put the image in your browser.
		});

		
	}