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
    <div class="navbar-wrapper">
        <div class="container">
            <div class="navbar navbar-inverse">

                <div class="navbar-header">
                    <a class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a id="homeButton" class="navbar-brand" href="#">
                        <span>MyH<sub>2</sub>O</span>
                    </a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="project.php">Project</a>
                        </li>
                        <li><a href="map.php">Live Map</a>
                        </li>
                        <li><a href="#">Charts</a>
                        </li>
                        <li><a href="query.php">Upload Data</a>
                        </li>
                        <li><a href="about.php">About us</a>
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
                                <li><a href="#"><i class="glyphicon glyphicon-lock"></i> Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /container -->
    </div>
    <!-- /navbar wrapper -->


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
                        <h1>Some Short Slogan</h1>
                        <p>Short short introduction</p>
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
                        <h1>Changes to....</h1>
                        <p>(How to change?)</p>
                        <p><a class="btn btn-large btn-primary" href="#">Learn more</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="http://placehold.it/1500X500" class="img-responsive">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Map</h1>
                        <p>bababa</p>
                        <p><a class="btn btn-large btn-primary" href="#">Live Map</a>
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
                <h2>Mobile-first</h2>
                <p>Tablets, phones, laptops. The new 3 promises to be mobile friendly from the start.</p>
                <p><a class="btn btn-default" href="#">View details »</a>
                </p>
            </div>
            <div class="col-md-4 text-center">
                <img class="img-circle" src="http://placehold.it/140x140">
                <h2>One Fluid Grid</h2>
                <p>There is now just one percentage-based grid for Bootstrap 3. Customize for fixed widths.</p>
                <p><a class="btn btn-default" href="#">View details »</a>
                </p>
            </div>
            <div class="col-md-4 text-center">
                <img class="img-circle" src="http://placehold.it/140x140">
                <h2>LESS is More</h2>
                <p>Improved support for mixins make the new Bootstrap 3 easier to customize.</p>
                <p><a class="btn btn-default" href="#">View details »</a>
                </p>
            </div>
        </div>
        <!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="featurette">
            <img class="featurette-image img-circle pull-right" src="http://placehold.it/512">
            <h2 class="featurette-heading">Responsive Design. <span class="text-muted">It'll blow your mind.</span></h2>
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
