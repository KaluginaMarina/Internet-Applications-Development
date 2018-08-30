<?php 
	$currentTime = date("H:i:s", strtotime('-1 hour'));
	$start = microtime(true);
	$x = (float) $_POST['valueX'];
	$y = (int) $_POST['valueY'];
	$r = (int) $_POST['valueR'];
	function check($x, $y, $r){
		if ( 
			($x >= 0 && $x <= $r && $y <=0 && $y >= -$r/2) ||
			($x <= 0 && $y <= 0 && $x*$x + $y*$y <= $r) ||
			(-$x <= $r + $y)) {
			return true;
		}
		else {
			return false;
		}
	}
	$res = check ($x, $y, $r);
	$time = microtime(true) - $start;
?>
	
<table>
	<tr>
		<td>
			<h2 class="point">X</h2>
		</td>
		<td>
			<h2 class="point">Y</h2>
		</td>
		<td>
			<h2 class="point">R</h2>
		</td>
		<td>
			<h2 class="point">Result</h2>
		</td>
		<td>
			<h2 class="point">Time</h2>
		</td>
		<td>
			<h2 class="point">ScriptTime [us]</h2>
		</td>
	</tr>
	<tr>
		<td>
			<h2 class="point"><?= $x ?></h2>
		</td>
		<td>
			<h2 class="point"><?= $y ?></h2>
		</td>
		<td>
			<h2 class="point"><?= $r ?></h2>
		</td>
		<td>
			<h2 class="point"><?= $res ? "True" : "False" ?></h2>
		</td>
		<td>
			<h2 class="point"><?= $currentTime ?></h2>
		</td>
		<td>
			<h2 class="point"><?= number_format($time, 10, ".", "")*1000000 ?></h2>
		</td>
	</tr>
	
</table>
