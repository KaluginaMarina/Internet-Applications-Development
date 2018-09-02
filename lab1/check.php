<?php 
	$currentTime = date("H:i:s", strtotime('-1 hour'));
	$start = microtime(true);
	$x = (float) $_POST['valueX'];
	$y = (int) $_POST['valueY'];
	$r = (int) $_POST['valueR'];
	function check($x, $y, $r){
		return($x >= 0 && $x <= $r && $y <=0 && $y >= -$r/2) ||
			($x <= 0 && $y <= 0 && $x*$x + $y*$y <= $r*$r) ||
			($x <= 0 && $y >= 0 && -$x <= $r + $y);
	}
	$res = check ($x, $y, $r);
	$time = microtime(true) - $start;
?>
	
<table border="1px" border-collapse="collapse" >
	<tr>
		<td>
			<h2 class="ansPoint">X</h2>
		</td>
		<td>
			<h2 class="ansPoint">Y</h2>
		</td>
		<td>
			<h2 class="ansPoint">R</h2>
		</td>
		<td>
			<h2 class="ansPoint">Result</h2>
		</td>
		<td>
			<h2 class="ansPoint">Time</h2>
		</td>
		<td>
			<h2 class="ansPoint">ScriptTime [us]</h2>
		</td>
	</tr>
	<tr>
		<td>
			<h2 class="ansPoint"><?php echo $x ?></h2>
		</td>
		<td>
			<h2 class="ansPoint"><?php echo $y ?></h2>
		</td>
		<td>
			<h2 class="ansPoint"><?php echo $r ?></h2>
		</td>
		<td>
			<h2 class="ansPoint"><?php echo $res ? "True" : "False" ?></h2>
		</td>
		<td>
			<h2 class="ansPoint"><?php echo $currentTime ?></h2>
		</td>
		<td>
			<h2 class="ansPoint"><?php echo number_format($time, 10, ".", "")*1000000 ?></h2>
		</td>
	</tr>
	
</table>
<br>
