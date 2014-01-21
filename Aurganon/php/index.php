<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>AURGANON 2014</title>
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link href='http://fonts.googleapis.com/css?family=Metamorphous' rel='stylesheet' type='text/css'>
		<script src="js/modernizr.custom.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

		<script type="text/javascript">
		$(document).ready(function(){
			setTimeout(function(){
				$(".container").hide();
				$(".srm").animate({ opacity: 1 }, 5000);
				setTimeout(function(){
				   //$(".srm1").animate({ opacity: 1 }, 5000);
				setTimeout(function(){
				   $(".arg").animate({ opacity: 1 }, 5000);
				setTimeout(function(){
					$(".but").animate({opacity: 1}, 5000);
				},4000)

				},3000)
				},3000)
				
			},45000)
		})
		</script>
		<style>
		.logo a.but{
			height: 150px;
			width: 150px;
			display: block;
			opacity: 0;
			margin-left: 50%;
			margin-top: -128px;
		}
		.logo img.srm{
			margin-left: 200px;
			margin-top: 40px;
			height: 150px;
			width: 150px;
			display: block;
			opacity: 0;
		}
		.logo img.srm1{
			margin-left: 300px;
			margin-top: 100px;
			height: 200px;
			width: 300px;
			display: block;
			opacity: 0;
		}
		.logo img.arg{
			margin-top: -30px;
			margin-left: 270px;
			height: 450px;
			width: 800px;
			display: block;
			opacity: 0;
		}
		.logo{
			
			position: absolute;
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
				<h2>AURGANON 2K14</h2>
				<h2>This February 21</h2>
				<h2>Be a Winner</h2>
			    <h2>Coz that is What you want</h2>
			</div>
		</div>
		<div class="logo">
			<img src="images/logo.png" class="srm"/>
			<img src="images/Aurganon 2.png" class="arg"/>
			<a href="home.html" class="but"><abbr title="Click Here"><img src="images/web.png"/></abbr></a>
		</div>
		
		<script src="js/jquery.lettering.js"></script>
		<script>
			$(document).ready(function() {
				$("#os-phrases > h2").lettering('words').children("span").lettering().children("span").lettering(); 
			})
		</script>
		
         <footer>
         <audio autoplay="autoplay" controls="controls">
         <source src="theme.mp3" type="audio/mpeg" />
        </footer>
	</body>
</html>