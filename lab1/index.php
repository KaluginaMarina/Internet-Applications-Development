<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/style.css" type="text/css">
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
			<img class="vt" width="80" height="80" src="img/vt.png" alt="vt">
				
			<h2 class="fio">Kalugina M.M, P3202</h2>
		</header>
		
		<table>
			<tr>		
				<td width="50%">
				<form action="check.php" method="post">
					<table>
						<tr>
							<td>
								<h2 class="point">X:</h2>
							</td>
							<td>
								<p><input type="text" name="valueX" value="0"/></p>
							</td>
						</tr>
						<tr>
							<td>
								<h2 class="point">Y:</h2>
							</td>
							<td>
						
								<div>
									<input class="w3-radio" type="radio" id="minus5" name="valueY" value="-5" />
									<label for="minus5">-5</label>
								</div>
									<div>
									<input class="w3-radio" type="radio" id="minus4" name="valueY" value="-5" />
									<label for="minus4">-4</label>
								</div>
								<div>
									<input class="w3-radio" type="radio" id="minus3" name="valueY" value="-3" />
									<label for="minus3">-3</label>
								</div>
								<div>
									<input class="w3-radio" type="radio" id="minus2" name="valueY" value="-1" />
									<label for="minus1">-1</label>
								</div>
								<div>
									<input class="w3-radio" type="radio" id="zerro" name="valueY" value="0" />
									<label for="zerro">0</label>
								</div>
								<div>
									<input class="w3-radio" type="radio" id="plus1" name="valueY" value="1" />
									<label for="plus1">1</label>
								</div>
								<div>
									<input class="w3-radio" type="radio" id="plus2" name="valueY" value="2" />
									<label for="plus2">2</label>
								</div>
								<div>
									<input class="w3-radio" type="radio" id="plus3" name="valueY" value="3" />
									<label for="plus3">3</label>
								</div>

							</td>
						</tr>
						<tr>
							<td>
								<h2 class="point">R:</h2>
							</td>
							
							<td>
								<select name='valueR' value="-3">
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
								<p><input type="submit" class="button" value="Check"/></p>
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