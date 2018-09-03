<?php 
	session_start();
	
	$currentTime = date("H:i:s", strtotime('-1 hour'));
	$start = microtime(true);
	$x = (float) str_replace(",", ".", $_POST['valueX']);
	$y = (int) $_POST['valueY'];
	$r = (int) $_POST['valueR'];
	function check($x, $y, $r){
		return($x >= 0 && $x <= $r && $y <=0 && $y >= -$r/2) ||
			($x <= 0 && $y <= 0 && $x*$x + $y*$y <= $r*$r) ||
			($x <= 0 && $y >= 0 && -$x <= $r + $y);
	}
	if (!in_array($y, array(-5, -4, -3, -2, -1, 0, 1, 2, 3)) || !is_numeric($x) || $x < -3 || $x > 5 || !in_array($r, array( -3, -2, -1, 0, 1, 2, 3, 4, 5))) {
		http_response_code(400);
		return;
	}
	$res = check ($x, $y, $r);
	$time = microtime(true) - $start;
	$resultat = array($x, $y, $r, $res, $currentTime, $time);
	if (!isset($_SESSION['history'])) {
		$_SESSION['history'] = array();
	}
	
	array_push($_SESSION['history'], $resultat);
	
	include "table.php";	
?>
