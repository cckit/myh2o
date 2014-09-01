<!DOCTYPE html>
<html>
    <head>
        <title>MyH2O - Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="asset/lib/css/bootstrap-3.1.1.min.css" />
        <link rel="stylesheet" href="css/index.css">
        <script src="asset/lib/js/jquery-1.11.1.min.js"></script>
        <script src="asset/lib/js/bootstrap-3.1.1.min.js"></script>
        <script src="js/index.js"></script>
    </head>
    <body>
        <?php echo file_get_contents('theme/nav_bar.php') ?>
        <!-- Carousel
            ================================================== -->
        <div id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="images/bg/bgC1.jpg" class="img-responsive">
                    <!--<img src="http://www.bootply.com/assets/example/bg_suburb.jpg" class="img-responsive">-->
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>How SAFE is your water?</h1>
                            <p>
                                MyH<sub>2</sub>O helps you understand your own water better<br>
                                First online crowd-sourcing platform
                            </p>
                            <pthis is="" an="" example="" layout="" with="" carousel="" that="" uses="" the="" bootstrap="" 3="" styles.<="" small="">
                            <p></p>
                            <p><a class="btn btn-lg btn-primary" href="#">Learn More</a>
                            </p>
                            </pthis>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="images/bg/bgC2.png">
                    <!--<img src="http://lorempixel.com/1500/600/abstract/1" class="img-responsive">-->
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>China’s Water Pollution</h1>
                            <p>280 million people use unsafe drinking water<br>Half of the urban drinking water supplies do not meet national standards</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Learn More</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="images/bg/bgC3.png" class="img-responsive">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Be the Change</h1>
                            <p>Join our champaign and Educate people</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Sign up</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
            </a>
        </div>
        <!-- /.carousel -->
        <!-- Marketing messaging and featurettes
            ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->
        <div class="container marketing">
            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-md-4 text-center">
                    <img class="img-feature" src="images/logo.png">
                    <!--<img class="img-feature img-circle" src="http://placehold.it/140x140">-->
                    <h2>Credible Sources</h2>
                    <p>Thousands of entries and still growing. <br>Constantly verified and updated.</p>
                    <p><a class="btn btn-default" href="#">View details »</a>
                    </p>
                </div>
                <div class="col-md-4 text-center">
                    <div class="img-feature" style="background-image: url('images/bg/bgFeature2.png')"></div>
                    <h2>Interactive Map</h2>
                    <p>Type in your address<br>Understand your water quality with a click</p>
                    <p><a class="btn btn-default" href="map.php">View details »</a>
                    </p>
                </div>
                <div class="col-md-4 text-center">
                    <div class="img-feature" style="background-image: url('images/bg/bgFeature3.jpg')"></div>
                    <h2>Easy Water Testing</h2>
                    <p>Purchase a rapid water testing kit or<br>Request a professional laboratory testing</p>
                    <p><a class="btn btn-default" href="#">View details »</a>
                    </p>
                </div>
            </div>
            <!-- /.row -->
            <!-- START THE FEATURETTES -->
            <hr class="featurette-divider">
        </div>
        <!-- /.container -->
    </body>
</html>