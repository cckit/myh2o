var areaSliderIndex = 0;

$(document).ready(function() {
	$('.multiselect').multiselect();
	$('.slider').slider().on('slide', function(ev){
		areaSliderIndex = ev.value;
	});
});


