var map;
var geocoder = new google.maps.Geocoder();

$(document).ready(function () {

    initialize();

    $('#btnFindLocation').click(function(){
        var address = $('#lblLocation')[0].value;
        //console.log($('#lblLocation')[0].value);
        codeAddress(address);
    });
});

function codeAddress(address) {
  geocoder.geocode( { 'address': address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      // alert("hello");
      map.setCenter(results[0].geometry.location);
      map.setZoom(12);
      // if(marker)
      //   marker.setMap(null);
      marker = new google.maps.Marker({
          map: map,
          position: results[0].geometry.location,
      });
     } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });
}

function getSearchParameters() {
    var prmstr = window.location.search.substr(1);
    return prmstr != null && prmstr != "" ? transformToAssocArray(prmstr) : {};
}

function transformToAssocArray(prmstr) {
    var params = {};
    var prmarr = prmstr.split("&");
    for (var i = 0; i < prmarr.length; i++) {
        var tmparr = prmarr[i].split("=");
        params[tmparr[0]] = tmparr[1];
    }
    return params;
}


function initialize() {
    var params = getSearchParameters();
    var myLatlng = new google.maps.LatLng(30, 130);
    var zoomLevel = 4;
    if (params['latitude'] && params['latitude'].length > 0) {
        var myLatlng = new google.maps.LatLng(parseFloat(params['latitude']), parseFloat(params['longitude']));
        zoomLevel = 9;
    }


    var location = params['locat'];
    if (location) {
        var tmp = location.split(/%28(\d)%2C(\d)%29/);
    }

    // var zip_or_gps = location.split("%2C");
    // alert(zip_or_gps);
    // alert(zip_or_gps.length);
    // if (zip_or_gps.length > 1) {
    //   alert("gps");
    //   alert(+(zip_or_gps[0]) + 100);
    //   alert(+(zip_or_gps[1]) + 100);
    // }
    // else {
    //   alert("zip");
    // }

    var mapOptions = {
        zoom: zoomLevel,
        center: myLatlng
    };

    map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    markers = new Array(410);
    infowindows = new Array(410);
    var easy_drop = 'images/reddrop.png';
    var red_drop = new google.maps.MarkerImage(
        'images/reddrop.png',
        new google.maps.Size(70, 99),
        new google.maps.Point(0, 0),
        new google.maps.Point(0, 28),
        new google.maps.Size(14, 20)
    );
    var orange_drop = new google.maps.MarkerImage(
        'images/orangedrop.png',
        new google.maps.Size(70, 99),
        new google.maps.Point(0, 0),
        new google.maps.Point(0, 0),
        new google.maps.Size(14, 20)
    );
    var yellow_drop = new google.maps.MarkerImage(
        'images/yellowdrop.png',
        new google.maps.Size(70, 99),
        new google.maps.Point(0, 0),
        new google.maps.Point(0, 0),
        new google.maps.Size(14, 20)
    );
    var blue_drop = new google.maps.MarkerImage(
        'images/bluedrop.png',
        new google.maps.Size(70, 99),
        new google.maps.Point(0, 0),
        new google.maps.Point(0, 0),
        new google.maps.Size(14, 20)
    );

    $(document).ready(function () {
        $.ajax({
            type: "GET",
            url: "data/greenovation.csv",
            dataType: "text",
            success: function (d) {
                var data = $.csv.toArrays(d);

                for (var i = 0; i < data.length; i++) {
                    cur = data[i];

                    var danger = 0;
                    var alert = "Safe Water Source";
                    if (cur[6] > .3) {
                        danger = 3;
                        alert = "Very High Heavy Metal Concentrations";
                    } else if (cur[6] > 0) {
                        danger = 2;
                        alert = "High Heavy Metal Concentrations";
                    }
                    if (cur[3] > 4) {
                        danger = 1;
                        alert = "High Nitrate Concentrations";
                    }

                    if (danger == 0) {
                        var droplet = blue_drop;
                    } else if (danger == 1) {
                        var droplet = yellow_drop;
                    } else if (danger == 2) {
                        var droplet = orange_drop;
                    } else {
                        var droplet = red_drop;
                    }

                    var pos = new google.maps.LatLng(+(cur[1]), +(cur[0]));
                    markers[i] = new google.maps.Marker({
                        position: pos,
                        map: map,
                        icon: droplet,
                        title: 'Water Quality Test'
                    });

                    var content = '<div id="content">' +
                        '<div id="siteNotice">' + '</div>' +
                        '<h1 id="firstHeading" class="firstHeading">' + alert + '</h1>' +
                        '<div id="bodyContent">' +
                        '<p> pH: ' + cur[2] + '<br> Ammonium Nitrate: ' + cur[3] + ' mg/L <br> Phosphate: ' +
                        cur[4] + ' mg/L <br> Permanganate: ' + cur[5] + ' mg/L <br> Heavy Metals: ' +
                        cur[6] + ' mg/L </p>' +
                        '</p>Testing performed by: ' + cur[7] + '</p>' +
                        '</div>' +
                        '</div>';

                    infowindows[i] = new google.maps.InfoWindow({
                        content: content,
                    });

                    (function (mark) {
                        var ind = i;
                        google.maps.event.addListener(mark, 'click', function () {

                            infowindows[ind].open(map, markers[ind]);
                        });
                    }(markers[i]));
                }
            }
        });
    });
    // map.map.setCenter(new google.maps.LatLng(45, 19));

}
google.maps.event.addDomListener(window, 'load', initialize);
