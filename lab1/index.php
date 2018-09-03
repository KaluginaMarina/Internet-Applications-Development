<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/style.css" type="text/css">
		<script type="text/javascript" src='js.js'></script>
		<style type="text/css">
			label {
				font:18px comic sans ms,cursive; 
				color:#9CAFB7;
			}
			
			select {
				font:18px comic sans ms,cursive; 
				color:#9CAFB7;
				border: 1px solid #e6b89c;
				border-radius: 3px;
			}
			
			input[type=text]{
				font:18px comic sans ms,cursive; 
				color:#9CAFB7;
				border: 1px solid #e6b89c;
				border-radius: 3px;
			}
		</style>
		
		<title>web_lab#1</title>
	</head>
	
	<body>
	
		<header>
			<img width="80" height="80" src="img/vt.png" alt="vt">
				
			<h2 id="fio">Kalugina M.M, P3202</h2>
		</header>
		
		<table>
			<tr>		
				<td width="50%">
				<form id="form" action="" method="post">
					<table>
						<tr>
							<td>
								<h2 class="point">X:</h2>
							</td>
							<td>
								<p><input type="text" name="valueX" id="text" placeholder="-3..5" value="0"/></p>
							</td>
						</tr>
						<tr>
							<td>
								<h2 class="point">Y:</h2>
							</td>
							<td>
						
								<div>
									<input class="w3-check" checked="checked" onclick="onlyOne(this)" type="checkbox" id="minus5" name="valueY" value="-5" />
									<label for="minus5">-5</label>
								</div>
									<div>
									<input class="w3-check" type="checkbox" id="minus4" onclick="onlyOne(this)" name="valueY" value="-5" />
									<label for="minus4">-4</label>
								</div>
								<div>
									<input class="w3-check" type="checkbox" id="minus3" onclick="onlyOne(this)" name="valueY" value="-3" />
									<label for="minus3">-3</label>
								</div>
								<div>
									<input class="w3-check" type="checkbox" id="minus2" onclick="onlyOne(this)" name="valueY" value="-1" />
									<label for="minus1">-1</label>
								</div>
								<div>
									<input class="w3-check" type="checkbox" id="zerro" onclick="onlyOne(this)" name="valueY" value="0" />
									<label for="zerro">0</label>
								</div>
								<div>
									<input class="w3-check" type="checkbox" id="plus1" onclick="onlyOne(this)" name="valueY" value="1" />
									<label for="plus1">1</label>
								</div>
								<div>
									<input class="w3-check" type="checkbox" id="plus2" onclick="onlyOne(this)" name="valueY" value="2" />
									<label for="plus2">2</label>
								</div>
								<div>
									<input class="w3-check" type="checkbox" id="plus3" onclick="onlyOne(this)" name="valueY" value="3" />
									<label for="plus3">3</label>
								</div>

							</td>
						</tr>
						<tr>
							<td>
								<h2 class="point">R:</h2>
							</td>
							
							<td>
								<select name='valueR' id='selectR' value="-3">
									<option>-3</option>
									<option>-2</option>
									<option>-1</option>
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								<label class="error" id="labelX"></label>
							</td>
						</tr>
						<tr>
							<td>
								<label class="error" id="labelR"></label>
							</td>
						</tr>
						<tr>
							<td>
								<p><input type="submit" class="button" value="Check" id="submitButton"/></p>
							</td>
						</tr>
						<tr>
						<tr>
							<td>
								
								<table id="ans" border="2px">
									<?php
										session_start();
										if (!isset($_SESSION['history'])) {
											$_SESSION['history'] = array();
										}
										include 'table.php';
									?>
								</table>
								
							</td>
						</tr>
					</table>
					
				</form>	
				</td>
			
				<td width="50%">
					<img src="img/img.png" alt="img">
				</td>
			</tr>
		</table>
	
	</body>
	
</html>
