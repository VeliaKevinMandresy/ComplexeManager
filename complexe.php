<?php 
if ((isset($_POST['nb1']) AND isset($_POST['nb2']) AND isset($_POST['signe']))) {
	include 'declaration.php';
?>
			<div>
				<hr>
<?php

		if ((!empty($_POST['nb1']) AND !empty($_POST['nb2']))) {
			include 'F_Algebrique.php';
			echo "<div class = 'info' id = 'info'>
					<h3><center style = 'color: white'>Recapitulatif<br></center></h3>
						<div id = position>
						 	<p style = 'color: white'> <span class = 'position' style = 'color: rgb(255, 255, 247)'> -> </span> partie réelle: <span style='color:  rgb(255, 157, 0)' lang='latex' >\\Re $nb1</span> </p>
						 	<p style = 'color: white'> <span class = 'position' style = 'color: rgb(255, 255, 247)'> -> </span> partie imaginaire : <span style='color:  rgb(255, 157, 0)'lang='latex'>\\Im $nb2Bis</span></p>
						 	<p style = 'color: white'> <span class = 'position' style = 'color: rgb(255, 255, 247)'> -> </span> Coordonnées du point M : <span style='color:  rgb(255, 157, 0)'lang='latex'>M = $coordonnes</span></p>
						 	<p style = 'color: white'> <span class = 'position' style = 'color: rgb(255, 255, 247)'> -> </span> Conjugué : <span style='color:  rgb(255, 157, 0)'lang='latex'>$conjugue</span></p>
						 	<p style = 'color: white'> <span class = 'position' style = 'color: rgb(255, 255, 247)'> -> </span> Module : <span style='color:  rgb(255, 157, 0)'lang='latex'>$abs = $mod</span></p>
						 	<p style = 'color: white'> <span class = 'position' style = 'color: rgb(255, 255, 247)'> -> </span> Inverse : <span style='color:  rgb(255, 157, 0)'lang='latex'>$resInverse</span></p>
						 	<p style = 'color: white'> <span class = 'position' style = 'color: rgb(255, 255, 247)'> -> </span> Argument : <span style='color:  rgb(255, 157, 0)'lang='latex'>&theta; = $resTeta</span></p>
						 	<p style = 'color: white'> <span class = 'position' style = 'color: rgb(255, 255, 247)'> -> </span> Forme trigonométrique : <span style='color:  rgb(255, 157, 0)'lang='latex'> ( \\cos( ". round($resTeta, 3) . " ) + \\sin( ". round($resTeta, 3) . " ).i )</span></p>
						 	<p style = 'color: white'> <span class = 'position' style = 'color: rgb(255, 255, 247)'> -> </span> Forme exponentielle : <span style='color:  rgb(255, 157, 0)'lang='latex'> \\sqrt$abs.e^{i.". round($resTeta, 3) . "}</span></span></p>
						 </div>
				 </div><br>";
			
		}elseif ((empty($_POST['nb1']) AND !empty($_POST['nb2']))) {
			include'AutreFichier/ImaginairePur.php';
			echo "<div class = 'info' id = 'info'>
					<h3><center style = 'color: white'>Recapitulatif<br></center></h3>
						<div id = position>
						 	<p style = 'color: white'> <span class = 'position' style = 'color: rgb(255, 255, 247)'> -> </span> partie réelle : <span style='color:  rgb(255, 157, 0)'>\\Re $nb1</span> </p>
						 	<p style = 'color: white'> <span class = 'position' style = 'color: rgb(255, 255, 247)'> -> </span> partie imaginaire : <span style='color:  rgb(255, 157, 0)'>\\Im $nb2Bis</span></p>
						 	<p style = 'color: white'> <span class = 'position' style = 'color: rgb(255, 255, 247)'> -> </span> Coordonnées du point M : <span style='color:  rgb(255, 157, 0)'>M = $coordonnes</span></p>
						 	<p style = 'color: white'> <span class = 'position' style = 'color: rgb(255, 255, 247)'> -> </span> Conjugué : <span style='color:  rgb(255, 157, 0)'>$conjugue</span></p>
						 	<p style = 'color: white'> <span class = 'position' style = 'color: rgb(255, 255, 247)'> -> </span> Module : <span style='color:  rgb(255, 157, 0)'>$abs = $mod</span></p>
						 	<p style = 'color: white'> <span class = 'position' style = 'color: rgb(255, 255, 247)'> -> </span> Inverse : <span style='color:  rgb(255, 157, 0)'>$resInverse</span></p>
						 	<p style = 'color: white'> <span class = 'position' style = 'color: rgb(255, 255, 247)'> -> </span> Argument : <span style='color:  rgb(255, 157, 0)'>&theta; = $resTeta</span></p>
						 	<p style = 'color: white'> <span class = 'position' style = 'color: rgb(255, 255, 247)'> -> </span> Forme trigonométrique : <span style='color:  rgb(255, 157, 0)'> $abs( cos( ". round($resTeta, 3) . " ) + sin( ". round($resTeta, 3) . " ).i )</span></p>
						 	<p style = 'color: white'> <span class = 'position' style = 'color: rgb(255, 255, 247)'> -> </span> Forme exponentielle : <span style='color:  rgb(255, 157, 0)'> $abs.e<sup>i.". round($resTeta, 3) . "</span></span></p>
						 </div>
				 </div><br>";
		}elseif ((!empty($_POST['nb1']) AND empty($_POST['nb2']))) {
			include'PartieReel.php';
			echo "<div class = 'info' id = 'info'>
					<h3><center style = 'color: white'>Recapitulatif<br></center></h3>
						<div id = position>
						 	<p style = 'color: white'> <span class = 'position' style = 'color: rgb(255, 255, 247)'> -> </span> partie réelle : <span style='color:  rgb(255, 157, 0)'>\\Re $nb1</span> </p>
						 	<p style = 'color: white'> <span class = 'position' style = 'color: rgb(255, 255, 247)'> -> </span> partie imaginaire : <span style='color:  rgb(255, 157, 0)'>\\Im $nb2Bis</span></p>
						 	<p style = 'color: white'> <span class = 'position' style = 'color: rgb(255, 255, 247)'> -> </span> Coordonnées du point M : <span style='color:  rgb(255, 157, 0)'>M = ($nb1; $nb2Bis)</span></p>
						 	<p style = 'color: white'> <span class = 'position' style = 'color: rgb(255, 255, 247)'> -> </span> Conjugué : <span style='color:  rgb(255, 157, 0)'>$conjugue</span></p>
						 	<p style = 'color: white'> <span class = 'position' style = 'color: rgb(255, 255, 247)'> -> </span> Module : <span style='color:  rgb(255, 157, 0)'>$abs = $mod</span></p>
						 	<p style = 'color: white'> <span class = 'position' style = 'color: rgb(255, 255, 247)'> -> </span> Inverse : <span style='color:  rgb(255, 157, 0)'>$resInverse</span></p>
						 	<p style = 'color: white'> <span class = 'position' style = 'color: rgb(255, 255, 247)'> -> </span> Argument : <span style='color:  rgb(255, 157, 0)'>&theta; = $resTeta</span></p>
						 	<p style = 'color: white'> <span class = 'position' style = 'color: rgb(255, 255, 247)'> -> </span> Forme trigonométrique : <span style='color:  rgb(255, 157, 0)'> $abs( cos( $resTeta ) + sin( $resTeta ).i )</span></p>
						 	<p style = 'color: white'> <span class = 'position' style = 'color: rgb(255, 255, 247)'> -> </span> Forme exponentielle : <span style='color:  rgb(255, 157, 0)'> $abs.e<sup>i.$resTeta</span></span></p>
						 </div>
				 </div><br>";
		}elseif ((empty($_POST['nb1']) AND empty($_POST['nb2']))) {
			echo "<div id='Error' class='container'>
					<div class='alert alert-danger fade in'>
					    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					    <strong>Attention !</strong> Vous devez au moins remplir un champs
					    <ul><li>Le champs des réels ET/OU des imaginaires doivent être completés</li></ul>
					</div>
	     		 </div>";
		}
}
?>
	</div>