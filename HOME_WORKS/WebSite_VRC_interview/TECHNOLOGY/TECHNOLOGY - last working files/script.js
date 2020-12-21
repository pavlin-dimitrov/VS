$(document).ready(function(){
	$(".read").click(function(){
		$(this).prev().toggle();
		$(this).siblings('.dots').toggle();
		if($(this).text()=='Read more'){
			$(this).text('Read less');
		}
		else{
			$(this).text('Read more');
		}
	});
});

