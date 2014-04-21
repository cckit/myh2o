var myLatlng = new google.maps.LatLng(30,130);
var zoomLevel = 4;

var mapOptions = {
  zoom: zoomLevel,
  center: myLatlng
};

var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
var geocoder = new google.maps.Geocoder();

function initialize() {

  // alert("Initialize called");
  console.log(data);

  markers = new Array(410);
  infowindows = new Array(410);
  var easy_drop = 'images/reddrop.png';
  var red_drop = new google.maps.MarkerImage(
    'images/reddrop.png',
    new google.maps.Size(70, 99),
    new google.maps.Point(0,0),
    new google.maps.Point(0, 28),
    new google.maps.Size(14,20)
  );
  var orange_drop = new google.maps.MarkerImage(
    'images/orangedrop.png',
    new google.maps.Size(70, 99),
    new google.maps.Point(0,0),
    new google.maps.Point(0,0),
    new google.maps.Size(14,20)          
  );
  var yellow_drop = new google.maps.MarkerImage(
    'images/yellowdrop.png',
    new google.maps.Size(70, 99),
    new google.maps.Point(0,0),
    new google.maps.Point(0, 0),
    new google.maps.Size(14,20)          
  );
  var blue_drop = new google.maps.MarkerImage(
    'images/bluedrop.png',
    new google.maps.Size(70, 99),
    new google.maps.Point(0,0),
    new google.maps.Point(0, 0),
    new google.maps.Size(14,20)          
  );        


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

    var pos = new google.maps.LatLng(+(cur['Latitude']), +(cur['Longitude']));
    markers[i] = new google.maps.Marker({
      position : pos,
      map : map,
      icon : droplet,
      title : 'Water Quality Test'
    });

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

    infowindows[i] = new google.maps.InfoWindow({
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
    }(markers[i]));
  }
}

function codeAddress(address) {
  geocoder.geocode({ 'address': address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map.setCenter(results[0].geometry.location);
      map.setZoom(12);
      // if(marker)
      //   marker.setMap(null);
      marker = new google.maps.Marker({
          map: map,
          position: results[0].geometry.location,
          // draggable: true
      });
      // google.maps.event.addListener(marker, "dragend", function() {
      //   document.getElementById('lat').value = marker.getPosition().lat();
      //   document.getElementById('lng').value = marker.getPosition().lng();
      // });
      // document.getElementById('lat').value = marker.getPosition().lat();
      // document.getElementById('lng').value = marker.getPosition().lng();
    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });
}
