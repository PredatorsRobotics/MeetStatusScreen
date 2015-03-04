<!DOCTYPE html>
<?php include('weather.php'); ?>
<html>
	<head>
		<script src="js/jquery-2.1.3.min.js"></script>
		<script src="js/countdown.js"></script>
		<link href="css/weather-icons.min.css" rel="stylesheet">
		<script>
			$.get( "ajax/weather.php", function( data ) {
				$( "#header-weather" ).html( data );
			});
		</script>
		<style>
			* {
				margin: 0;
				padding: 0;
			}

			body {
				font-family: Century Gothic;
				background-color: black;
				color: white;
			}

			#header {
				position: fixed;
				width: 100%;
				height: 100px;
				font-size: 36pt;
			}

			#header-brand {
				width: 50%;
				height: 100%;
				float: left;
			}

			#header-brand p {
				margin-top: 20px;
				margin-left: 20px;
			}

			#header-weather {
				width: 50%;
				height: 100%;
				float: right;
				margin-top: 10px;
				background-color: black;
				text-align: center;
			}
			#header-weather-icon {
				height: 100%;
				float: right;
				text-align: right;
			}
			#header-weather-text {
				height: 100%;
				float: right;
			}
			#header-weather-temp {
				padding-left: 20px;
				padding-right: 20px;
				text-align: left;
			}
			#header-weather-location {
				padding-left: 20px;
				padding-right: 20px;
				font-size: 12pt;
				text-align: left;
			}
			#content {
				
			}

			#footer {
				position: fixed;
				bottom: 0px;
				width: 100%;
				height: 315px;
				color: white;
				font-size: 36pt;
				overflow: hidden;
			}
			#footer-table {
				width: 50%;
				height: 100%;
				float: left;
			}
			
			#footer-logo {
				float: right;
				width: 50%;
			}
			
			#footer-logo {
				width: 50%;
				height: 100%;
				text-align: center;
			}
			
			#footer-logo img {
				max-height: 100%;
				max-width: 100%;
			}
			
			.red {
				background-color: red;
			}
			.blue {
				background-color: blue;
			}
			.black {
				background-color: black;
			}
			.now-playing {
				width: 50%;
				text-align: center;
				font-size: 64pt;
				/* font-weight: bold; (consider this?) */
			}
			#footer-now-playing {
				border-spacing: 0;
				width: 100%;
			}
		</style>
	</head>
	
	<body onload="checkWeather; setInterval(function(){checkWeather()},600000);">
		<div id="header">
		
			<div id="header-brand">
				<p>Predators</p>
			</div>
			
			<div id="header-weather">
			</div>
			
		</div>

		<div id="body" style="width: 100%; position: fixed; top: 200px; color: white; font-size: 36pt;  text-align: center;">
		
			<span id="body-time-left" style="font-size: 128pt;">27:01</span><br><span id="body-until-match" style="font-size: 18pt;">UNTIL MATCH 12</span>
		
		</div>
		
		<div id="footer">
			<div id="footer-logo">
				<img src="predator-head.png" />
			</div>
			<div id="footer-table">
				<table id="footer-now-playing">
					<tr>
						<td class="now-playing red">4665</td>
						<td class="now-playing blue">3232</td>
					</tr>
					<tr>
						<td class="now-playing red">4242</td>
						<td class="now-playing blue">2169</td>
					</tr>
					<tr>
						<td class="now-playing red">3633</td>
						<td class="now-playing blue">4945</td>
					</tr>
				</table>
			</div>

		</div>
		
	</body>
</html>
