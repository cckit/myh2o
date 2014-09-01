<!DOCTYPE html>
<html>
	<head>
		<title>MyH2O - Team</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="asset/lib/css/bootstrap-3.1.1.min.css" />
		<link href="css/theme.css" rel="stylesheet">
		<link href="css/team.css" rel="stylesheet">
		<script src="asset/lib/js/jquery-1.11.1.min.js"></script>
		<script src="asset/lib/js/bootstrap-3.1.1.min.js"></script>
	</head>
	<body>
		<?php echo file_get_contents('theme/nav_fixed.php') ?>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header"> Who We Are
					</h1>
				</div>
			</div>
			<div class="visible-md visible-lg">
				<div = style="display:none;">
					<hr class="featurette-divider" style="position:absolute;left:50px;right:50px;top:160px;z-index:1">
					<hr class="featurette-divider" style="position:absolute;left:50px;right:50px;top:168px;z-index:1">
					<hr class="featurette-divider" style="position:absolute;left:50px;right:50px;top:285px;z-index:1">
					<hr class="featurette-divider" style="position:absolute;left:50px;right:50px;top:297px;z-index:1">
				</div>
				<nav class="text-center" role="navigation i">
					<ul id="image-bar" class="nav nav-pills" style="display: inline-block; margin:0;padding:0;">
						<li style="margin: 0;">
							<div class="photo img-thumbnail" style="background-image: url('images/team/Chang.jpg')"></div>
						<li style="margin: 0;">
							<div class="photo img-thumbnail" style="background-image: url('images/team/Mengqi.jpg')"></div>
						<li style="margin: 0;">
							<div class="photo img-thumbnail" style="background-image: url('images/team/SiyiZ.jpg')"></div>
						<li style="margin: 0;">
							<div class="photo show img-thumbnail" style="background-image: url('images/team/Charlene.jpg')"></div>
						<li style="margin: 0;">
							<div class="photo img-thumbnail" style="background-image: url('images/team/Tommy.jpg')"></div>
						<li style="margin: 0;">
							<div class="photo img-thumbnail" style="background-image: url('images/team/Jiajia.jpg')"></div>
						<li style="margin: 0;">
							<div class="photo img-thumbnail" style="background-image: url('images/team/Jonathan.jpg')"></div>
					</ul>
				</nav>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div id="member-detail" class="well">
							<h1><span class="member-name">Charlene Ren</span><br><small><span class="member-role">Director of MyH<sub>2</sub>O</span><br>
								<span class="member-occupation">Graduate student in Environmental Engineering at MIT</span></small>
							</h1>
							<div class="row">
								<span class="member-about col-md-11">
								Charlene manages the overall development strategy and social enterprise plan for the project. She has close connections with Chinese NGOs from her internship experience at CYCAN and Roots &amp; Shoots, Beijing.
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row visible-xs visible-sm">
				<ul class="nav nav-pills" style="display: inline-block; margin:0; padding:0; text-center">
					<li style="margin: 0;">
						<div class="photo show img-thumbnail"></div>
						<div class="well">
							<h1>Charlene Ren<br>
								<small>
								Director of MyH<sub>2</sub>O<br>
								Graduate student in Environmental Engineering at MIT
								</small>
							</h1>
							<p>Charlene manages the overall development strategy and social enterprise plan for the project. She has close connections with Chinese NGOs from her internship experience at CYCAN and Roots & Shoots, Beijing.</p>
						</div>
					<li style="margin: 0;">
						<div class="photo show img-thumbnail"></div>
					<li style="margin: 0;">
						<div class="photo show img-thumbnail"></div>
					<li style="margin: 0;">
						<div class="photo show img-thumbnail"></div>
					<li style="margin: 0;">
						<div class="photo show img-thumbnail"></div>
					<li style="margin: 0;">
						<div class="photo show img-thumbnail"></div>
					<li style="margin: 0;">
						<div class="photo show img-thumbnail"></div>
				</ul>
			</div>
		</div>
	</body>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#image-bar .photo").click(function(e){
				if($("#image-bar .photo").hasClass('show')){
					$('#image-bar .photo.show').removeClass('show');
				}
				$(this).addClass('show');
				updateContent($("#image-bar .photo").index($(this)), 200);
			});
			updateContent(3, 0);
		});
		
		function updateContent(chosen, duration) {
			var showContent = content.members[chosen];
		
			$('.member-name').fadeTo(duration, 0.3, function() {
				$(this).html(showContent.name).fadeTo(duration, 1);
			});
			$('.member-role').fadeTo(duration, 0.3, function() {
				$(this).html(showContent.role).fadeTo(duration, 1);
			});
			$('.member-occupation').fadeTo(duration, 0.3, function() {
				$(this).html(showContent.occupation).fadeTo(duration, 1);
			});
			$('.member-about').fadeTo(duration, 0.3, function() {
				$(this).html(showContent.about).fadeTo(duration, 1);
			});
		}
		
		var content = {
			"members": [
				{
					"name": "Chang Liu",
					"role": "Treasurer & Researcher",
					"occupation": "Government & Economics student at Franklin & Marshall College",
					"about": "Chang is very passionate about environmental issues and has participated in various environment-related activities. He has developed connecitons with environment department officers in the British Embassy in China, and he is responsible for fundraising and other finance-related work in the team."
				},
				{
					"name": "Mengqi Shi",
					"role": "Researcher",
					"occupation": "Biology & Environmental Policy student at Sewanee",
					"about": "Mengqi is responsible for MyH<sub>2</sub>O's research in China’s water quality, and prioritizes the water contaminants of the project’s concern. She’s also currently the International Director at CYCAN, and serves as a liaison between MyH<sub>2</sub>O and CYCAN local team."
				},
				{
					"name": "Siyi Zhang",
					"role": "Public Relation Manager",
					"occupation": "Environmental Engineering student at MIT",
					"about": "Having worked in multiple US-China organizations in green energy and climate change advocacy, Siyi is responsible for reaching out to Chinese water experts, Chinese universities, and local water testing labs for potential collaboration and data collection."
				},
				{
					"name": "Charlene Ren",
					"role": "Director of MyH<sub>2</sub>O",
					"occupation": "Graduate student in Environmental Engineering at MIT",
					"about": "Charlene manages the overall development strategy and social enterprise plan for the project. She has close connections with Chinese NGOs from her internship experience at CYCAN and Roots & Shoots, Beijing."
				},
				{
					"name": "Tommy Chan",
					"role": "Front-end Web Developer",
					"occupation": "Computer Science student at MIT",
					"about": "Tommy is responsible for building up MyH<sub>2</sub>O web site and helping in data visualization of water pollutants. He is interested in public welfare projects and has been working on Chinese and Hong Kong Sign Language Recognition System to help disadvantaged community. He is currently an undergraduate researcher in MIT Museum and MIT Media Lab."
				},
				{
					"name": "Jiajia Zhao",
					"role": "Back-end Web Developer",
					"occupation": "Computer Science student at MIT",
					"about": "Jiajia is passionate about public health and water safety in China. She is working on implementing online and mobile platform for MyH<sub>2</sub>O."
				},
				{
					"name": "Jonathan Uesato",
					"role": "Developer",
					"occupation": "Mathematics and Computer Science student at MIT",
					"about": "Jonathan has a strong quantitative and programming background. He is currently conducting data analysis research with the MIT Media Lab."
				}
			]
		};
	</script>
</html>