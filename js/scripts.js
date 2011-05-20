$(document).ready(function(){
	
	$("a.cpr").colorbox();
	
	var bodyWidth = $("body").width();
	var pageWidth = 980;
	if ( bodyWidth < pageWidth ){
		$("body").css("background-position", "-805px 20px");
	}

	
	$('#client-quotes').cycle();
	
});


