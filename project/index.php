<!DOCTYPE html>
<html>
	<head>
		<script src="js/jquery-2.1.3.min.js"></script>
		<script src="js/countdown.js"></script>
		<link href="css/weather-icons.min.css" rel="stylesheet">
		<script>
			$(function() { // Only runs once on load
				checkWeather();
				setInterval(function(){checkWeather()},600000);
				updateTime();
				setInterval(function(){updateTime()},200);
				updateTeams();
				setInterval(function(){updateTeams()},5000);
				updateNum();
			});
			function checkWeather() {
				$.get( "ajax/weather.php", function( data ) {
					$( "#header-weather" ).html( data );
				});
			}
			function updateTime() {
				$.get( "ajax/match.php?time", function( data ) {
					$( "#body-time-left" ).html( data );
				});
			}
			function updateNum() {
				$.get( "ajax/match.php?match", function( data ) {
					$( "#body-until-match" ).text(function(){
            			return "UNTIL MATCH " + data;
        			});
				});
			}
			function updateTeams() {
				$.get( "ajax/match.php", function( data ) {
					$( "#footer-table" ).html( data );
				});
			}
		</script>
		<style>
			body {
				font-family: Century Gothic;
				background-color: black;
				color: white;
				margin: 0;
				padding: 0;
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
				width: 100%;
				position: fixed;
				top: 75px;
				color: white;
				text-align: center;
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
			.now-playing {
				width: 50%;
				text-align: center;
				font-size: 64pt;
				font-weight: bold; /* (consider this?) It dosn't look the best, but i think it will help to see it from a distance */
			}
			#footer-now-playing {
				border-spacing: 0;
				width: 100%;
			}
		</style>
	</head>
	
	<body>
		<!--<img style="position: absolute; top: 0; left: 0; border: 0;" src="https://camo.githubusercontent.com/82b228a3648bf44fc1163ef44c62fcc60081495e/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f7265645f6161303030302e706e67">-->
		<div id="header">
			<div id="header-brand">
				<p>Predators</p>
			</div>
			<div id="header-weather"></div>
		</div>

		<div id="content">
			<span id="body-time-left" style="font-size: 192pt;"></span><br>
			<span id="body-until-match" style="font-size: 18pt;"></span>
		</div>
		
		<div id="footer">
			<div id="footer-logo">
				<img src="predator-head.png" />
			</div>
			<div id="footer-table"></div>
		</div>
		
	</body>
</html>