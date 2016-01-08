<!DOCTYPE html>
<html>
<head>
	<title>Complexe Manager</title>
	<link rel="stylesheet" type="text/css" href="css/math.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://latex.codecogs.com/latexit.js"></script>
</head>
<body>
	<div class='container'>
	<form action="" method="POST">
		<h1 style="text-align: center;color: #FF5722;background-color: rgba(96, 109, 139, 0.17);" class="jumbotron">Nombre complexe</h1>
		<div class="contenair">
			<div class="nb1">
				<label style="color: white">
					<br>
					<input class="style_radius" type="number" step="0.0000000000001" name="nb1">
				</label>
			</div>
			<div class="signe">
				<select name="signe">
					<option value="+">+</option>
					<option value="-">-</option>
				</select>
			</div>

			<div class="nb2">
				<label style="color: white">
					<br>
					<input class="style_radius" type="number" step="0.0000000000001" name="nb2" >
				</label>
			</div>			
			<br><br>
			<button type="submit" id="button" class="btn btn-primary">Valider</button>
		</div>
		<br><br>
		<?php 
			echo "<div id='Error' class='container'>
					<div class='alert alert-info fade in'>
					    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					    <strong>Info !</strong> L'utilisation d'internet est obligatoire.
					    <ul><li> Pour le bon fonctionnement/affichage des resultats (<img src='http://latex.codecogs.com/gif.latex?\\LaTeX,'/> utiliser internet. Cordialement.</li></ul>
					</div>
	     		 </div>";
		 ?>	
		<br>
		<?php include 'complexe.php'; ?>
	</form>
	
	</div>
	</body>
</html>