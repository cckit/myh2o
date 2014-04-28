google.load('visualization', '1.1', {'packages': ['geochart']});
google.setOnLoadCallback(drawRegionsMap);

ajaxSuccessFunction = function(d) {
  var mainData = {};

  var data = $.csv.toArrays(d);
  for (var i = 1; i < data.length; i++) {
    var region = data[i][8];
    var ammon = data[i][3];
    if (region in mainData) {
      mainData[region]['pts']++;
      mainData[region]['ammon'] += parseFloat(ammon);
      if (ammon >= 1) {
        mainData[region]['danger']++;
      } 
    }
    else {
      mainData[region] = {};
      mainData[region]['pts'] = 1;
      mainData[region]['ammon'] = parseFloat(ammon);
      if (ammon >= 1) {
        mainData[region]['danger'] = 1;
      }
      else {
        mainData[region]['danger'] = 0;
      }
      mainData[region]['name'] = data[i][9];
    }
  }

  // Now add data into array and load table
  var tableData = [];
  var header = ['Country', 'Average Ammonium Nitrate Concentration (mg/L)', { role:'tooltip', p:{html:true} } ];
  tableData.push(header);

  for (regiona in mainData) {
    var cur = mainData[regiona];
    var row = [];

    var label = {};
    label.v = regiona;
    label.f = cur['name'];
    row.push(label);

    var avgConc = (1.0 * cur['ammon'] / cur['pts']);
    var dangerPercent = 100 * cur['danger'] / cur['pts'];
    var modifDanger = 1 - Math.min(1, 3* (1 - cur['danger'] / cur['pts']) / cur['pts']);
    row.push(modifDanger);

    var text = '<b>Average NH4 Conc. (mg/L)</b>: ' + String(avgConc) + '<br> <b>National Standard Conc. (mg/L)</b>: 1.0' + '<br> <b>Samples in this region</b>: ' + 
      String(cur['pts']) + '<br><b>Percentage of samples w/ Dangerous levels</b>: ' + String(dangerPercent) + '%';
    row.push(text);

    tableData.push(row);
  }

  var googleTable = google.visualization.arrayToDataTable(tableData);

  var options = { 
    region:'CN', 
    resolution: 'provinces',
    colorAxis: {colors: ['aqua', 'crimson']}, 
    tooltip: {isHtml: true}
  };
  var chart = new google.visualization.GeoChart(document.getElementById('chart_div'));
  chart.draw(googleTable, options);
}

function drawRegionsMap() {
  $.ajax({
      type: "GET",
      url: "data/greenovationISO.csv",
      dataType: "text",
      success: ajaxSuccessFunction
  });
}

