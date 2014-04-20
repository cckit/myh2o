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
                    <li><a href="map.php">Live Map</a>
                    </li>
                    <li><a href="#">Charts</a>
                    </li>
                    <li><a href="upload.php">Upload Data</a>
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
        <hr>
        <form action="insert.php" method="post">
            Longiude: <input type="text" name="longitude">
            Latitude: <input type="text" name="latitude">
            PH: <input type="text" name="ph">
            ammonium_nitrate: <input type="text" name="ammonium_nitrate">
            phosphate: <input type="text" name="phosphate">
            permanganate: <input type="text" name="permanganate">
            heavy_metal: <input type="text" name="heavy_metal">
            email: <input type="text" name="email">
            <input type="submit">
        </form>

    </div>
    <!-- /.container -->

</body>

</html>
