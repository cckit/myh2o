<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Water Quality Map</title>

    <!-- JavaScript and CSS -->
    <?php include 'include.php'; ?>
    <script src="js/map.js"></script>
    <script src="js/load_data.js"></script>
    <script src="js/bootstrap-multiselect.js"></script>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=NSmU1lWBokfpznsFnsC63XBr"></script>
	<script type="text/javascript" src="http://api.map.baidu.com/library/TextIconOverlay/1.2/src/TextIconOverlay_min.js"></script>
	<script type="text/javascript" src="http://api.map.baidu.com/library/MarkerClusterer/1.2/src/MarkerClusterer_min.js"></script>
    <link href="css/theme.css" rel="stylesheet">

    <style>
        div.ui-slider-range.ui-widget-header {
    background: #0000ff;
}
    </style>


</head>

<body>
    <?php include 'theme/nav_fixed.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Water Quality Map
                </h1>
            </div>
        </div>

        <div class="row">

            <div class="col-md-8">
                <!--<img class="img-responsive" src="http://placehold.it/750x500">-->
                <div id="mapregion">
                    <div id="map-canvas" style="height : 500px; position: relative; z-index: 1" }></div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="input-group">
                    <input type="text" id="lblLocation" class="form-control" placeholder="Search by Location" name="address">
                    <span class="input-group-btn">
                    <button id="btnFindLocation" class="btn btn-primary" type="button" 
                        onclick="codeAddress(document.getElementById('lblLocation').value)">
                        Find!
                    </button>
                  </span>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-6">
                        <b>Area &nbsp;</b><div id="defaultslide" class=".col-md-1"></div>

                    </div>
                    <div class="col-md-6 input-group btn-group">
                        <span class="input-group-addon "><b class="glyphicon glyphicon-eye-open"></b></span>
                        <select class="multiselect btn-primary">
                          <option value="HeavyMetals">Heavy Metals</option>
                          <option value="Nitrate">Nitrate</option>
                          <option value="Permanganate">Permanganate</option>
                          <option value="Phosphate">Phosphate</option>
                        </select>  
                    </div>
                </div>

                <br>
                <div class="alert alert-danger">The score of the area: <b>40</b> out of 100. The water quality is <b>20%</b> below average.</div>
                <table class="table table-bordered"> 
                  <tr>
                    <td class="field-label active">
                      <label>Heavy Metals</label>
                    </td>
                    <td>
                      <font color="red" id="heavy-metal-display">High Risk (150% over national standard)</font>
                    </td>
                  </tr>
                  <tr>
                    <td class="field-label active">
                      <label>Nitrate</label>
                    </td>
                    <td>
                      <font color="red">High Risk (400% over national standard)</font>
                    </td>
                  </tr>
                  <tr>
                    <td class="field-label active">
                      <label>Permanganate</label>
                    </td>
                    <td>
                      <font color="orange">Medium Risk</font>
                    </td>
                  </tr>
                  <tr>
                    <td class="field-label active">
                      <label>Phosphate</label>
                    </td>
                    <td>
                      <font color="orange">Medium Risk</font>
                    </td>
                  </tr>
                </table>
            </div>
        </div>

        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Popular Views</h3>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300">
                </a>
            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">
        <hr>
    </div>
    <!-- /.container -->

    <!-- Loading the Google Map from database -->
    <script type="text/javascript">
        var data = [];
    </script>

    <?php 
        include 'query.php'; 
        $result = all_points();
        // echo <h1> . $result . </h1>;
       
	echo '<script type="text/javascript">';
	while ($line = mysqli_fetch_array($result, MYSQL_ASSOC)) {
            // Sorry this is possibly the ugliest code I've ever written but it works!
            echo 'data.push(' . json_encode($line) . ');';
        }
	echo '</script>';
    ?>
    <script src="js/droplet_icons.js" type "text/javascript"></script>
    <script src="js/load_data.js" type="text/javascript"></script>
    <script type="text/javascript">
        // Sorry for using global variables. I was having scope issues when passing local variables to initialize()
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</body>

</html>
