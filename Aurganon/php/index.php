<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>AURGANON 2014</title>
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/indexdefault.css" />
		<link rel="stylesheet" type="text/css" href="css/indexcomponent.css" />
		<script src="js/indexmodernizr.custom.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		
		<style>
		.logo img.srm{
			height: 200px;
			width: 200px;
			display: block;
			opacity: 0;
		}
		.logo img.arg{
			margin-top: 30px;
			display: block;
			opacity: 0;
		}
		.logo{
			position: absolute;
			top:50%;
			left:50%;
			margin-top: -200px;
			margin-left: -100px;
			text-align: center;
		}
		</style>
	</head>
	<body>
		<div class="container">	
			<div class="os-phrases" id="os-phrases">
				<h2>Patience is golden they say</h2>
				<h2>We've waited so long</h2>
				<h2>We came, we went</h2>
				<h2>And now we are back</h2>
				<h2>AURGANON 2014</h2>
				<h2>And a little more patience is all we ask</h2>
				<h2>This February 21</h2>
				<h2>Get Ready</h2>
			</div>
		</div>
		<div class="logo">
			<img src="images/logo.png" class="srm"/>
			<img src="images/aurfull1.jpg" class="arg"/>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/jquery.lettering.js"></script>
		<script>
			$(document).ready(function() {
				$("#os-phrases > h2").lettering('words').children("span").lettering().children("span").lettering(); 
			})
		</script>
		
         <footer>
         <audio autoplay="autoplay" controls="controls" loop="loop">
         <source src="theme.mp3" type="audio/mpeg" />
        </footer>
	</body>
</html>