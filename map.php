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
    <!-- <script src="js/map.js"></script> -->
    <link href="css/map.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.html" style="font-size:24px">MyH<sub>2</sub>O</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse" style="line-height: 1em;">
                <ul class="nav navbar-nav navbar">
                    <li><a href="#">Project</a>
                    </li>
                    <li><a href="#">Live Map</a>
                    </li>
                    <li><a href="#">Charts</a>
                    </li>
                    <li><a href="#">About us</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i> Admin <span class="caret"></span></a>
                        <ul id="g-account-menu" class="dropdown-menu" role="menu">
                            <li><a href="#">My Profile</a>
                            </li>
                            <li><a href="#">My Submission</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="glyphicon glyphicon-lock"></i> Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

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
                    <input type="text" id="lblLocation" class="form-control" placeholder="Search by Loaction">
                    <span class="input-group-btn">
                    <button id="btnFindLocation" class="btn btn-primary" type="button">Find!</button>
                  </span>
                </div>
                <br>

                <p class="btn-toolbar">
                    <div class="btn-group btn-toggle">
                        <button class="btn btn-sm btn-default">OFF</button>
                        <button class="btn btn-sm btn-primary active">ON</button>
                    </div>
                    Heavy Metals
                </p>

                <p class="btn-toolbar">
                    <div class="btn-group btn-toggle">
                        <button class="btn btn-sm btn-default">OFF</button>
                        <button class="btn btn-sm btn-primary active">ON</button>
                    </div>
                    Nitrate
                </p>

                <p class="btn-toolbar">
                    <div class="btn-group btn-toggle">
                        <button class="btn btn-sm btn-default">OFF</button>
                        <button class="btn btn-sm btn-primary active">ON</button>
                    </div>
                    Permanganate
                </p>

                <p class="btn-toolbar">
                    <div class="btn-group btn-toggle">
                        <button class="btn btn-sm btn-default">OFF</button>
                        <button class="btn btn-sm btn-primary active">ON</button>
                    </div>
                    Phosphate
                </p>
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
        while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
            // Sorry this is possibly the ugliest code I've ever written but it works!
            echo '<script type="text/javascript">';
            echo 'data.push(' . json_encode($line) . ');';
            echo '</script>';
        }
    ?>
    <script src="js/load_data.js" type="text/javascript"></script>
    <script type="text/javascript">
        // Sorry for using global variables. I was having scope issues when passing local variables to initialize()
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</body>

</html>
