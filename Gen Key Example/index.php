<!DOCTYPE html>
<html lang="en">
	<head>
         	<title>JK DEV # Free Scripts PHP</title>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">JKDEV</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Create Password Generator</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-4">
			<form method = "POST">
				<div class="form-group">
					<label>Enter some length</label>
					<input type="number" min="5" max="50" name="length" class="form-control" require="required"/>
				</div>
				
				<center><button class="btn btn-info" name="create"><span class="glyphicon glyphicon-random"></span> Create Pass</button></center>
			</form>
		</div>
		<div class="col-md-6">
				<?php include 'character.php'?>
		</div>
		
	</div>
<span>
</body>
</html>
