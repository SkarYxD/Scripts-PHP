<!DOCTYPE html>
<html lang="en">
	<head>
		<title>JK DEV # Free Scripts PHP</title>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">JKDev</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Simple Convert Hour To Year</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<form method="POST" action="">
				<center><label>Enter a hour</label></cemnter>
				<center><input type="number" name="hour" style="width:200px;" class="form-control" min="0" required="required"/></center>
				
				<br />
				<center><button class="btn btn-primary" name="convert">Convert</button></center>
			</form>
			<br />
			<?php include'convert.php'?>
		</div>
	</div>
</body>	
</html>
