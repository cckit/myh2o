var myLatlng = new google.maps.LatLng(30,130);
var zoomLevel = 4;

var mapOptions = {
  zoom: zoomLevel,
  center: myLatlng
};

var map;
var map_baidu;
var geocoder = new google.maps.Geocoder();
var geocoder_baidu;
var ac;

$(document).ready(function () {
	map_baidu = new BMap.Map("map-canvas");
	var point = new BMap.Point(104.114129,37.550339);
  map_baidu.centerAndZoom(point, 4);

	map_baidu.addControl(new BMap.NavigationControl());
	map_baidu.addControl(new BMap.ScaleControl());
	map_baidu.addControl(new BMap.OverviewMapControl());
	map_baidu.enableScrollWheelZoom();

	geocoder_baidu = new BMap.Geocoder();
	ac = new BMap.Autocomplete({
		"input": "lblLocation",
		"location": map_baidu
	});

	ac.addEventListener("onconfirm", function(e) {
		$('#btnFindLocation').click();
	});

    //map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
    initialize();

    $('#btnFindLocation').click(function(){
        var address = $('#lblLocation')[0].value;
        //console.log($('#lblLocation')[0].value);
        codeAddress(address);
    });
});

// Update with slider value
$(function(){
  $('#defaultslide').slider({ 
    max: 21,
    min: 0,
    value: 4,
    slide: function(e,ui) {
      map_baidu.setZoom(ui.value);
      // $('#currentval').html(ui.value);
    }
  });

});

var initialize = function initialize() {
  // console.log(status);
  // console.log(data);
  // console.log(jqXHR);
  markers = new Array(410);
  infowindows = new Array(410);
  console.log("Initialize called");

  for (var i = 0; i < data.length; i++) {
    cur = data[i];

    var danger = 0;
    var alert = "Safe Water Source";
    if (cur['heavy_metal'] > .3) {
      danger = 3;
      alert = "Very High Heavy Metal Concentrations";
    }
    else if (cur['heavy_metal'] > 0) {
      danger = 2;
      alert = "High Heavy Metal Concentrations";
    }
    if (cur['nitrate'] > 4) {
      danger = 1;
      alert = "High Nitrate Concentrations";
    }

    if (danger == 0) {
      var droplet = blue_drop;
    }
    else if (danger == 1) {
      var droplet = yellow_drop;
    }
    else if (danger == 2) {
      var droplet = orange_drop;
    }
    else {
      var droplet = red_drop;
    }

    /*var pos = new google.maps.LatLng(+(cur['Latitude']), +(cur['Longitude']));
    markers[i] = new google.maps.Marker({
      position : pos,
      map : map,
      icon : droplet,
      title : 'Water Quality Test'
    });*/

	var pos_baidu = new BMap.Point(+(cur['Longitude']), +(cur['Latitude']));
	var myIcon = new BMap.Icon(droplet.url, new BMap.Size(35, 50));
	myIcon.imageSize = new BMap.Size(14, 20);
	markers[i] = new BMap.Marker(pos_baidu,{icon:myIcon});
	//map_baidu.addOverlay(markers[i]);

    var content = '<div id="content">'+
    '<div id="siteNotice">'+'</div>'+
    '<h1 id="firstHeading" class="firstHeading">' + alert + '</h1>' +
    '<div id="bodyContent">'+
    '<p> pH: ' + cur['ph'] + '<br> Ammonium Nitrate: ' + cur['ammonium_nitrate'] +' mg/L <br> Phosphate: ' + 
    cur['phosphate'] +' mg/L <br> Permanganate: ' + cur['permanganate'] + ' mg/L <br> Heavy Metals: ' + 
    cur['heavy_metal'] + ' mg/L </p>' +
    '</p>Testing performed by: ' + cur[7] + '</p>' +
    '</div>'+ 
    '</div>';

    /*infowindows[i] = new google.maps.InfoWindow({
      content : content,
    });

    (function(mark) {
      var ind = i;
      curWindow = false;
      google.maps.event.addListener(mark, 'click', function() {
        if (curWindow) curWindow.close();
        infowindows[ind].open(map, markers[ind]);
        curWindow = infowindows[ind];
      });
    }(markers[i]));*/

	var infoWindow_baidu = new BMap.InfoWindow(content);
	markers[i].addEventListener("click", function(){
    this.openInfoWindow(infoWindow_baidu);
    $('#heavy-metal-display').text(cur['heavy_metal'] + ' mg/L');
    $('#nitrate-display').text(cur['ammonium_nitrate'] + ' mg/L');
    $('#permanganate-display').text(cur['permanganate'] + ' mg/L');
    $('#phosphate-display').text(cur['phosphate'] + ' mg/L');
  });
  }
  var markerClusterer = new BMapLib.MarkerClusterer(map_baidu, {markers:markers});
}


function codeAddress(address) {
	
	geocoder_baidu.getPoint(address, function(point){
		if(point){
			map_baidu.centerAndZoom(point, 16);
			map_baidu.addOverlay(new BMap.Marker(point));
		}		
	});

  /*geocoder.geocode({ 'address': address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      //console.log(results);
      map.setCenter(results[0].geometry.location);
      map.setZoom(12);
      // if(marker)
      //   marker.setMap(null);
      marker = new google.maps.Marker({
          map: map,
          position: results[0].geometry.location,
          // draggable: true
      });

      $.ajax({
        url:"query.php",
        data: {
            latitude: results[0].geometry.location.A,
            longitude: results[0].geometry.location.k
        },
        success: initialize
      });
      //window.location.href = "http://localhost/~snowbabyjia/myh2o_v2/query.php?latitude=" + results[0].geometry.location.A+ "&longitude=" + results[0].geometry.location.k;
      
      // google.maps.event.addListener(marker, "dragend", function() {
      //   document.getElementById('lat').value = marker.getPosition().lat();
      //   document.getElementById('lng').value = marker.getPosition().lng();
      // });
      // document.getElementById('lat').value = marker.getPosition().lat();
      // document.getElementById('lng').value = marker.getPosition().lng();
    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });*/
}
