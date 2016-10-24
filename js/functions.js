function showLan(){
	$(".flags").css("display", "inline");
	$(".lan").css("display", "inline");
}

function hideLan(){
	$(".flags").css("display", "none");
	$(".lan").css("display", "none");
}

function showNav(){
	$(".mobileNav").css("display", "block");
}

function hideNav(){
	$(".mobileNav").css("display", "none");
}

function openMenu(){
	showNav();
}

function closeMenu(){
	hideNav();
}

function toggleMenu(){
	if($(".menuButton").hasClass("menuOpen")){
		openMenu();
	}else{
		closeMenu();
	}
	$(".menuButton").toggleClass("menuOpen");
}

$(window).resize(function(){
	if($(window).width() > 993){
		showNav();
		showLan();
		$(".mobileNav").css("display", "none");
	}else{
		hideNav();
	}
});

function toggleSubMenu(id){
	console.log("true");
	if($("#" + id).css("display") == "block"){
		$("#" + id).css("display", "none");
	}
	else
		$("#" + id).css("display", "block");
}