$(document).ready(function(){
	var x = document.getElementsByClassName("socNet");
	for(var i = 0; i < x.length; i ++){
		var img  = document.createElement("img");
		img.src = "img/" + x[i].id + ".png";
		img.style="position:relative; top:1px; left:1px;"
		x[i].append(img);
	}
});