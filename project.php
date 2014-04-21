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

    </nav>
    <div class="container">
        <hr>
    </div>
    <!-- /.container -->
    
    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header"> Project Introduction
                    
                </h1>
            </div>

        </div>
        <p>

		<b>Why MyH2O?</b>
		</p>
		<p>
		China has long been troubled by water contamination. Continuous emissions from industry as well as heavy application of agricultural fertilizers and pesticides are the major contributors to the deteriorating water quality [1].
		</p>
		<p>
		However, the government has been reluctant to publish water survey results and often presents the general public with manipulated, inconsistent information, leaving most communities in the dark about the quality of their rivers, lakes, groundwater and even drinking water. Inspired by how the independent test results of air quality in Beijing went viral on social media and eventually pushed the government to take a stand against air pollution [2], we hope to carry out a similar scheme for water pollution.
		</p>
		<p>
		With this picture in mind, we decided to develop "MyH2O" as one of the first online crowd-sourcing platforms on water issues in China. We plan to distribute cheap water quality testing kits and testing manuals to university students, NGOs and community volunteers. These participants can be then trained to test their local water quality and upload their location, photos of water bodies and testing results to a common mapping database through computer-based and mobile app platforms that are also connected to social media including Chinese facebook and twitter.
		</p>
		<p>
		[1] China's water issue: http://tinyurl.com/mt2yzb9

		[2] The inspirational case for China's air quality: http://tinyurl.com/lkurywp
		</p>
		<p>

		<b>Impact</b>
		</p>
		<p>
		Create a reliable mapping database of water quality data in China, as well as an interactive social platform for water info sharing that engages at least 1000 people in two cities.
		</p>
	</div>
</body>
</html>

