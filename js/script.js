

$(document).ready(function(){

	// changing second range
	$("#range2").change(function(){
		$("#fifth").val($(this).val());
	});

	// changing first range
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
		//type:$(this).attr("method"),
		type: "POST",
		url: "index.php",
		dataType: "json",
		data:$(this).serialize(),
		
		success:function(data){
			$("#result").html(data);
		},
		error:function(errorData){console.log(errorData);}
	});
		$("#result").html("error");
		
	});
});





