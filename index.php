<?php $con=mysqli_connect("localhost","user","password","database");

$date = date ('H:i:s');

$result = mysqli_query($con,"SELECT * FROM `event` WHERE time > '$date' ORDER BY time DESC");

while($row = mysqli_fetch_array($result)) {
$R1 = $row['R1'];
$R2 = $row['R2'];
$R3 = $row['R3'];
$B1 = $row['B1'];
$B2 = $row['B2'];
$B3 = $row['B3'];
$M = $row['Match'];
$timeraw = $row['time'];
} 

if(isset($timeraw)){
$convert = new DateTime($timeraw);
$time = $convert->format('g:i A');
}
?>

<html>
	<head>
		<title><?php if(isset($M)) {echo 'Match ' . $M;}else{echo 'No Match Scheduled';} ?></title>
		<meta http-equiv="refresh" content="5">
		<script src="countdown/countdown.js"></script>
	</head>
	<body style="margin: 0; padding: 0; font-family: Century Gothic; background-color: black;">
<?php if(isset($M)){ ?>
		<div style="position: fixed; top: 0px; width: 100%; height: 60px; color: white; font-size: 36pt;">
			<div style="width: 50%; height: 100%; float: left; background-color: black; text-align: center;">
				<?php echo 'Match ' . $M; ?>
			</div>
			<div style="width: 50%; height: 100%; float: right; background-color: black; text-align: center;">
				<?php echo 'Match Time ' . $time; ?>
			</div>
		</div>
<?php } ?>
		<div style="width: 100%; position: fixed; top: 200px; color: white; font-size: 36pt;  text-align: center;">
			<?php if(empty($M)){echo date('g:i A').'<br>'; echo 'No Match Scheduled<br>';} ?>
		</div>
<?php if(isset($M)){ ?>
		<div style="position: fixed; bottom: 0px; width: 100%; height: 185px; color: white; font-size: 36pt;">
			<div style="width: 50%; height: 100%; float: left; background-color: red; text-align: center;">
				<b><?php echo $R1; ?></b><br>
				<?php echo $R2; ?><br>
				<?php echo $R3; ?><br>
			</div>
			<div style="width: 50%; height: 100%; float: right; background-color: blue; text-align: center;">
				<?php echo $B1; ?><br>
				<?php echo $B2; ?><br>
				<?php echo $B3; ?><br>
			</div>
		</div>
<?php } ?>
	</body>
</html>