var areaSliderIndex = 0;

$(document).ready(function() {
	$('.multiselect').multiselect();
	$('.slider').slider().on('slide', function(ev){
		areaSliderIndex = ev.value;
	});

	$('#lblLocation').keypress(function(e){
		if(e.which == 13) {
        	alert('You pressed enter!');
        	$('#btnFindLocation').click();
    	}
	});
});


