$(document).ready(function(){
	
	$("a.cpr").colorbox();
	
	var bodyWidth = $("body").width();
	var pageWidth = 980;
	if ( bodyWidth < pageWidth ){
		$("body").css("background-position", "-805px 20px");
	}

	// $('#client-quotes').cycle({
	// 	speed: 500,
	// 	timeout: 7000,
	// 	before: onBefore,
	// 	sync: 0
	// });
	
	function onBefore() { 
		var newHeight = $(this).height();
	    $('#client-quotes').animate({"height": newHeight}, "slow"); 
	};
	
});


