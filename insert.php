<?php

function connect($hostname, $username, $password, $database)
{
    $link = mysqli_connect($hostname, $username, $password, $database);
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    return $link;
}


function insert($link, $table, $longitude, $latitude, $ph, $ammonium_nitrate, $phosphate, $permanganate, $heavy_metal, $email) {
	echo $longitude,$latitude,$ph,$ammonium_nitrate,$phosphate,$permanganate,$heavy_metal,$email;
    $query = "INSERT INTO $table VALUES (NULL,$longitude,$latitude,$ph,$ammonium_nitrate,$phosphate,$permanganate,$heavy_metal,'$email')";
    if (!mysqli_query($link,$query))
	{
	  die('Error: ' . mysqli_error($link));
	}
    $insert_id = mysqli_insert_id($link);
    printf ("New Record has id %d.\n", $insert_id);
    return $insert_id;
}

function delete($table, $id) {
	$link = connect('localhost', 'root', '821015jiajia', 'myh2o');
	$query = "DELETE FROM $table WHERE id=$id";
	mysqli_query($link, $query);
	close_connection($link);
	printf ("Deleted record id= %d.\n", $id);
}

function close_connection($link)
{
    // Closing connection
    mysqli_close($link);
}

?>

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
                <a class="navbar-brand" href="home.php" style="font-size:24px">MyH<sub>2</sub>O</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse" style="line-height: 1em;">
                <ul class="nav navbar-nav navbar">
                    <li><a href="project.php">Project</a>
                    </li>
                    <li><a href="map.php">Live Map</a>
                    </li>
                    <li><a href="#">Charts</a>
                    </li>
                    <li><a href="upload.php">Upload Data</a>
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
    </div>
    <!-- /.container -->

    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Your Data
                    
                </h1>
            </div>

        </div>

        <hr>

        <?php
        $link = connect('localhost', 'root', '821015jiajia', 'myh2o');
        $longitude = floatval(mysqli_real_escape_string($link, $_POST['longitude']));
        $latitude = floatval(mysqli_real_escape_string($link, $_POST['latitude']));
        $ph = floatval(mysqli_real_escape_string($link, $_POST['ph']));
        $ammonium_nitrate = floatval(mysqli_real_escape_string($link, $_POST['ammonium_nitrate']));
        $phosphate = floatval(mysqli_real_escape_string($link, $_POST['phosphate']));
        $permanganate = floatval(mysqli_real_escape_string($link, $_POST['permanganate']));
        $heavy_metal = floatval(mysqli_real_escape_string($link, $_POST['heavy_metal']));
        $email = mysqli_real_escape_string($link, $_POST['email']);
        //insert($link, "water_quality", $longitude, $latitude, $ph, $ammonium_nitrate, $phosphate, $permanganate, $heavy_metal, $email);
        close_connection($link);
        echo $longitude,$latitude,$ph,$ammonium_nitrate,$phosphate,$permanganate,$heavy_metal, "$email";
        ?>

        <script>
        function goBack()
          {
          window.history.back()
          }
        </script>
        <button type="button" onclick="goBack()">Go Back</button>

    </div>
    
</body>

</html>