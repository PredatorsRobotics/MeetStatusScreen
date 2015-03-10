<?php
$con=mysqli_connect("127.0.0.1","mss","robot","mss");

$date = date('H:i:s');

$result = mysqli_query($con,"SELECT * FROM `event` WHERE time > '$date' ORDER BY time DESC");

while($row = mysqli_fetch_array($result)) {
	$R1 = $row['R1'];
	$R2 = $row['R2'];
	$R3 = $row['R3'];
	$B1 = $row['B1'];
	$B2 = $row['B2'];
	$B3 = $row['B3'];
	$M = $row['Match'];
	$timeraw= $row['time'];
}

$datetime1 = new DateTime($timeraw);

$datetime2 = new DateTime(date('G:i:s'));

$interval = $datetime1->diff($datetime2);

$time = $interval->format('%i:%S');

if(isset($_GET['match'])){
	echo $M;
	die;
}

if(isset($_GET['time'])){
	echo $time;
	die;
}

?>

<?php /* Only echo this this if not requesting time or match: */ ?>
<table id="footer-now-playing">
	<tr>
		<td class="now-playing red"><?php echo $R1; ?></td>
		<td class="now-playing blue"><?php echo $B1; ?></td>
	</tr>
	<tr>
		<td class="now-playing red"><?php echo $R2; ?></td>
		<td class="now-playing blue"><?php echo $B2; ?></td>
	</tr>
	<tr>
		<td class="now-playing red"><?php echo $R3; ?></td>
		<td class="now-playing blue"><?php echo $B3; ?></td>
	</tr>
</table>