var areaSliderIndex = 0;

$(document).ready(function() {
	$(".photo").click(function(e){
		if($(this) != $('.photo.show'))
			$('.photo.show').removeClass('show');
		$(this).addClass('show');
		console.log(img);
	});
});


