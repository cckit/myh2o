google.load('visualization', '1.1', {'packages': ['geochart']});
google.setOnLoadCallback(drawRegionsMap);

var mainData = {};

var mapOptions = { 
  region:'CN', 
  resolution: 'provinces',
  colorAxis: {minValue: 0, maxValue: 1, colors: ['aqua', 'crimson']}, 

  tooltip: {isHtml: true}
};


function drawAmmon() {
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

  var chart = new google.visualization.GeoChart(document.getElementById('chart_div'));
  chart.draw(googleTable, mapOptions);
}

function drawMetals() {
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

    var avgConc = (1.0 * cur['metals'] / cur['pts']);
    var dangerPercent = 100 * cur['metalDanger'] / cur['pts'];
    var modifDanger = 1 - Math.min(1, 3* (1 - cur['metalDanger'] / cur['pts']) / cur['pts']);
    row.push(modifDanger);

    var text = '<b>Avg. Heavy Metal Conc. (mg/L)</b>: ' + String(avgConc) + '<br> <b>National Standard Conc. (mg/L)</b>: 2.0' + '<br> <b>Samples in this region</b>: ' + 
      String(cur['pts']) + '<br><b>Percentage of samples w/ Dangerous levels</b>: ' + String(dangerPercent) + '%';
    row.push(text);

    tableData.push(row);
  }

  var googleTable = google.visualization.arrayToDataTable(tableData);

  var chart = new google.visualization.GeoChart(document.getElementById('metals_chart'));
  chart.draw(googleTable, mapOptions);  
}

ajaxSuccessFunction = function(d) {

  var data = $.csv.toArrays(d);
  for (var i = 1; i < data.length; i++) {
    var region = data[i][8];
    var ammon = data[i][3];
    var metals = data[i][6];
    if (region in mainData) {
      mainData[region]['pts']++;
      mainData[region]['ammon'] += parseFloat(ammon);
      mainData[region]['metals'] += parseFloat(metals);
      if (ammon >= 1) {
        mainData[region]['danger']++;
      } 
      if (metals >= 2.0) {
        mainData[region]['metalDanger']++;
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
      mainData[region]['metals'] = parseFloat(metals);
      if (metals >= 2.0) {
        mainData[region]['metalDanger'] = 1;
      }
      else {
        mainData[region]['metalDanger'] = 0;
      }
      mainData[region]['name'] = data[i][9];
    }
  }
  drawAmmon();
  drawMetals();
}

function drawRegionsMap() {
  $.ajax({
      type: "GET",
      url: "data/greenovationISO.csv",
      dataType: "text",
      success: ajaxSuccessFunction
  });
}

