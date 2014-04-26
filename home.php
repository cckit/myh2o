<!DOCTYPE html>
<html>

<head>
	<title>MyH2O - Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Inlcuded files -->
	<?php include('include.php'); ?>
	<link href="css/home.css" rel="stylesheet">
</head>
<body>
    <?php include('theme/nav_bar.php'); ?>

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
                <img src="http://www.bootply.com/assets/example/bg_suburb.jpg" class="img-responsive">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>How SAFE is your water?</h1>
                        <p>MyH<sub>2</sub>O helps you understand your own water better</p>
                        <pthis is="" an="" example="" layout="" with="" carousel="" that="" uses="" the="" bootstrap="" 3="" styles.<="" small="">
                            <p></p>
                            <p><a class="btn btn-lg btn-primary" href="#">Learn More</a>
                            </p>
                        </pthis>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="http://lorempixel.com/1500/600/abstract/1" class="img-responsive">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Easy, Accessible Water Testing</h1>
                        <p>Purchase rapid testing kit <br> Request professional laboratory testing</p>
                        <p><a class="btn btn-large btn-primary" href="#">Learn more</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="http://placehold.it/1500X500" class="img-responsive">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Be the Change</h1>
                        <p>Join our champaign and Educate people</p>
                        <p><a class="btn btn-large btn-primary" href="#">Sign up</a>
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
                <img class="img-circle" src="http://placehold.it/140x140">
                <h2>Reliable</h2>
                <p>We only take data from credible sources.<br>All the information are constantly verified and updated.</p>
                <p><a class="btn btn-default" href="#">View details »</a>
                </p>
            </div>
            <div class="col-md-4 text-center">
                <img class="img-circle" src="http://placehold.it/140x140">
                <h2>You are not alone!</h2>
                <p>78% worries about tap water safety, 90% says they know nothing about the water they drink according to a survey conducted by China Times. Are you one of them?</p>
                <p><a class="btn btn-default" href="#">View details »</a>
                </p>
            </div>
            <div class="col-md-4 text-center">
                <img class="img-circle" src="http://placehold.it/140x140">
                <h2>It is that simple!</h2>
                <p>Type in your address<br>You can understand your water quality with with a click of a button.</p>
                <p><a class="btn btn-default" href="#">View details »</a>
                </p>
            </div>
        </div>
        <!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="featurette">
            <img class="featurette-image img-circle pull-right" src="http://placehold.it/512">
            <h2 class="featurette-heading">You are not alone!<span class="text-muted"></span></h2>
            <p class="lead">In simple terms, a responsive web design figures out what resolution of device it's being served on. Flexible grids then size correctly to fit the screen.</p>
        </div>

        <hr class="featurette-divider">

        <div class="featurette">
            <img class="featurette-image img-circle pull-left" src="http://placehold.it/512">
            <h2 class="featurette-heading">Smaller Footprint. <span class="text-muted">Lightweight.</span></h2>
            <p class="lead">The new Bootstrap 3 promises to be a smaller build. The separate Bootstrap base and responsive.css files have now been merged into one. There is no more fixed grid, only fluid.</p>
        </div>

        <hr class="featurette-divider">

        <div class="featurette">
            <img class="featurette-image img-circle pull-right" src="http://placehold.it/512">
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Flatness.</span></h2>
            <p class="lead">A big design trend for 2013 is "flat" design. Gone are the days of excessive gradients and shadows. Designers are producing cleaner flat designs, and Bootstrap 3 takes advantage of this minimalist trend.</p>
        </div>

        <hr class="featurette-divider">

    </div>
    <!-- /.container -->
</body>

</html>
