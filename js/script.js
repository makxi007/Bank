

$(document).ready(function(){
	$("#range2").change(function(){
		$("#fifth").val($(this).val());
	});

	$("#range1").change(function(){
		$("#second").val($(this).val());
	});

	$("#fifth").on("input", function(){
		$("#range2").val($(this).val());
	});

	$("#second").on("input", function(){
		$("#range1").val($(this).val());
	});

	$('form').on("submit", function(){

		$.ajax({
		data:$(this).serialize(),
		type:$(this).attr("method"),
		url: "php/calc.php",
		
		success:function(data){
			$("#result").html(data);
		},
		error:function(errorData){console.log(errorData);}
	});
		$("#result").html("error");

		
	});
	
	

});