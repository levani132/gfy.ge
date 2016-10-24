$(".nav").mouseenter(function(){
	$(".cur").removeClass("underline");
});

$(".nav").mouseleave(function(){
	$(".cur").addClass("underline");
});

$(".geo").mouseenter(function(){
	$("#geo").css("display", "block");
});

$(".geo").mouseleave(function(){
	$("#geo").css("display", "none");
});

$(".instr").mouseenter(function(){
	$("#instr").css("display", "block");
});

$(".instr").mouseleave(function(){
	$("#instr").css("display", "none");
});