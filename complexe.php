<?php 
	if ((isset($_POST['nb1']) AND isset($_POST['nb2']) AND isset($_POST['signe']))) {
		/* Déclaration variable */
		$nb1 = $_POST['nb1'];
		$nb2 = $_POST['nb2'] . '.i';
		$signe = $_POST['signe'];
		$nb2Bis = $_POST['nb2'];
		if (($_POST['nb2'] < 0) AND ($_POST['signe'] == "-")){
			$nb2 = (-1)*($_POST['nb2']) . '.i';
			$signe = $_POST['signe'];
			$signe = "+";
		}elseif (($_POST['nb2'] < 0) AND ($_POST['signe'] == "+")) {
			$nb2 = (-1)*($_POST['nb2']) . '.i';
			$signe = $_POST['signe'];
			$signe = "-";
		}
		$Z = $nb1 . $signe . $nb2 ;
		$mod = abs(sqrt($nb1*$nb1 + $nb2*$nb2));
		$abs = "&radic;". abs(($nb1*$nb1 + $nb2*$nb2));
		$newNb2Bis = pow($nb2Bis * (-1), 2);
		/* Coordonnées du point M */
		if (!empty($nb1) AND empty($nb2)) {
			$coordonnes = "($nb1; 0)";
		}elseif (empty($nb1) AND !empty($nb2)) {
			if (($_POST['nb2'] < 0) AND ($_POST['signe'] == "-")) {
				$nb2Bis = (-1) * $nb2Bis;
				$coordonnes = "(0; $nb2Bis)";
			}else {
				$coordonnes = "(0; $nb2Bis)";
			}	
		}else {
			if (($_POST['nb2'] < 0) AND ($_POST['signe'] == "-")) {
				$nb2Bis = (-1) * $nb2Bis;
				$coordonnes = "($nb1; $nb2Bis)";
			}else {
				$coordonnes = "($nb1; $nb2Bis)";
			}
		}
		/*  Fin coordonnées point M */
		if ((isset($_POST['nb1'])AND (isset($_POST['nb2'])) AND ($signe == '+'))) {
			$signeConjugue = '-';
			$conjugueNb1 = $nb1;
			$conjugueNb2 = $nb2Bis;
			$conjugue = $nb1 . $signeConjugue . $nb2Bis . '.i';
		}elseif ((isset($_POST['nb1'])) AND (isset($_POST['nb2'])) AND ($signe == '-')) {
			$signeConjugue = '+';
			$conjugueNb1 = $nb1;
			$conjugueNb2 = $nb2Bis;
			$conjugue = $nb1 . $signeConjugue . $nb2Bis . '.i';
		}elseif ((isset($_POST['nb2'])) AND ($signe == '-')) {
			$signeConjugue = '+';
			$conjugueNb2 = $nb2Bis;
			$conjugue = $signeConjugue . $nb2;
		}else {
			$signeConjugue = '-';
			$conjugueNb2 = $nb2Bis;
			$conjugue = $signeConjugue . $nb2;
		}
		$resInverse = "<span class= 'Inverse'> <sup>1</sup>&frasl;<sub>Z</sub> = <sup>$conjugueNb1</sup>/<sub>". round(pow($mod, 2), 0) ."</sub> $signeConjugue <sup>$newNb2Bis.i</sup>/<sub>". round(pow($mod, 2), 0) ."</sub></span>";

	/* Fin déclaration variable */
?>
			<div>
				<hr>
<?php
		if ((!empty($_POST['nb1']) AND !empty($_POST['nb2']))) {
			echo "<center style = 'color: white'>
					</p> <div id='Well' class='well well-sm'>Algebrique : </div> 
						<span class='result'>Z = $Z </span>
				  </center><br>";
			echo"<center style = 'color: white'> <div id='Well' class='well well-sm'>Coordonnées du point M :</div> 
					<span class='result'>M = $coordonnes </span>
				 </center><br>";
			echo"<center style = 'color: white'> <div id='Well' class='well well-sm'>Conjugué :</div> 
					<span class='result'><span class= 'zBarre'>Z</span> = $conjugue </span>
				 </center><br>"; 

			if ($nb1 == "" AND $nb2 == "") {}
			else {
				echo "<center style = 'color: white'>"."<div id='Well' class='well well-sm'>Module :</div>"."\n"."<span class='result'>|Z| =  &radic;".abs(($nb1*$nb1 + $nb2*$nb2));
				echo "\n"."= ". $mod ."</span></center><br>";
			}
			echo"<center style = 'color: white'> <div id='Well' class='well well-sm'>Inverse de Z :</div> 
					<p class= 'Inverse'><span class='result'> <sup>1</sup>&frasl;<sub>Z</sub> = 
						<sup>$conjugue</sup>/<sub>($Z)($conjugue)</sub> = 
						<sup>$conjugue</sup>/<sub>$nb1<sup>2</sup> $signeConjugue ($conjugueNb2.i)<sup>2</sup></sub> =
						<sup>$conjugueNb1</sup>/<sub>". round(pow($mod, 2), 0) ."</sub>$signeConjugue(<sup>$newNb2Bis</sup>/<sub>". round(pow($mod, 2), 0) ."</sub>).i
					</p>	
				 </center><br>"; 
			require 'fonction.php';
			echo "<center style = 'color: white'>
					</p> <div id='Well' class='well well-sm'>Forme trigonométrique :</div> 
						<span class='result'> Z = $abs( cos(  ". round($resTeta, 3) . " ) + sin(  ". round($resTeta, 3) . " ).i )  </span>
			  </center><br>";

			echo "<center style = 'color: white'>
					</p> <div id='Well' class='well well-sm'>Forme exponentielle :</div> 
						<span class='result'> Z = $abs.e<sup> i.(". round($resTeta, 3) . ")</span>
			  </center><br>";
			  
			echo "<div class = 'info' id = 'info'>
					<h3><center style = 'color: white'>Recapitulatif<br></center></h3>
						<div id = position>
						 	<p style = 'color: white'> <span class = 'position' style = 'color: rgb(255, 255, 247)'> -> </span> partie réel : <span style='color:  rgb(255, 157, 0)'>$nb1</span> </p>
						 	<p style = 'color: white'> <span class = 'position' style = 'color: rgb(255, 255, 247)'> -> </span> partie imaginaire : <span style='color:  rgb(255, 157, 0)'>$nb2</span></p>
						 	<p style = 'color: white'> <span class = 'position' style = 'color: rgb(255, 255, 247)'> -> </span> Coordonnées du point M : <span style='color:  rgb(255, 157, 0)'>M = $coordonnes</span></p>
						 	<p style = 'color: white'> <span class = 'position' style = 'color: rgb(255, 255, 247)'> -> </span> Conjugué : <span style='color:  rgb(255, 157, 0)'>$conjugue</span></p>
						 	<p style = 'color: white'> <span class = 'position' style = 'color: rgb(255, 255, 247)'> -> </span> Module : <span style='color:  rgb(255, 157, 0)'>$abs = $mod</span></p>
						 	<p style = 'color: white'> <span class = 'position' style = 'color: rgb(255, 255, 247)'> -> </span> Inverse : <span style='color:  rgb(255, 157, 0)'>$resInverse</span></p>
						 	<p style = 'color: white'> <span class = 'position' style = 'color: rgb(255, 255, 247)'> -> </span> Argument : <span style='color:  rgb(255, 157, 0)'>&theta; = $resTeta</span></p>
						 	<p style = 'color: white'> <span class = 'position' style = 'color: rgb(255, 255, 247)'> -> </span> Forme trigonométrique : <span style='color:  rgb(255, 157, 0)'> $abs( cos( ". round($resTeta, 3) . " ) + sin( ". round($resTeta, 3) . " ).i )</span></p>
						 	<p style = 'color: white'> <span class = 'position' style = 'color: rgb(255, 255, 247)'> -> </span> Forme exponentielle : <span style='color:  rgb(255, 157, 0)'> $abs.e<sup>i.". round($resTeta, 3) . "</span></span></p>
						 </div>
				 </div><br>";
			
		}elseif ((empty($_POST['nb1']) AND !empty($_POST['nb2']))) {
			
			$conjugueNb1 = 0;
			$nb1 = "<i style='color: rgb(255, 157, 0)'>Pas de partie reelle</i>";

			echo "<center style = 'color: white'> 
					<div id='Well' class='well well-sm'>Forme algebrique : </div><span class='result'>Z = $nb2 (Imaginaire pur) </span><br>
					<br><div id='Well' class='well well-sm'>Peut aussi s'ecrire : </div><span class='result'>Img($nb2)</span>
				  </center>";
			 echo"<br><center style = 'color: white'> <div id='Well' class='well well-sm'>Coordonnées du point M :</div> 
					<span class='result'>M = $coordonnes </span>
				 </center><br>";
			echo"<center style = 'color: white'> <div id='Well' class='well well-sm'>conjugé : </div><span class= 'zBarre'>Z</span> = $conjugue </center><br>";
			require 'fonction.php';
			echo "<center style = 'color: white'>
					</p> <div id='Well' class='well well-sm'>Forme trigonométrique :</div> 
						<span class='result'> Z = $abs( cos(  ". round($resTeta, 3) . " ) + sin(  ". round($resTeta, 3) . " ).i )  </span>
			  </center><br>";

			echo "<center style = 'color: white'>
					</p> <div id='Well' class='well well-sm'>Forme exponentielle :</div> 
						<span class='result'> Z = $abs.e<sup> i.(". round($resTeta, 3) . ")</span>
			  </center><br>";
			
			echo "<div class = 'info' id = 'info'>
					<h3><center style = 'color: white'>Recapitulatif<br></center></h3>
						<div id = position>
						 	<p style = 'color: white'> <span class = 'position' style = 'color: rgb(255, 255, 247)'> -> </span> partie réel : <span style='color:  rgb(255, 157, 0)'>$nb1</span> </p>
						 	<p style = 'color: white'> <span class = 'position' style = 'color: rgb(255, 255, 247)'> -> </span> partie imaginaire : <span style='color:  rgb(255, 157, 0)'>$nb2</span></p>
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
			$nb2Bis = 0;
			$nb2 = "<i style='color: rgb(255, 157, 0)'>Pas de partie imaginaire</i>";
			echo "<center style = 'color: white'>
					</p> <div id='Well' class='well well-sm'>Forme algebrique :</div> Z = $nb1 (Réel) 
					<br><br>
					<p><div id='Well' class='well well-sm'>Peut aussi s'ecrire: </div>Re($nb1)</p>
				  </center><br><br>";
			require 'fonction.php';
			echo "<center style = 'color: white'>
					</p> <div id='Well' class='well well-sm'>Forme trigonométrique :</div> 
						<span class='result'> Z = $abs( cos(  ". round($resTeta, 3) . " ) + sin(  ". round($resTeta, 3) . " ).i )  </span>
			  </center><br>";

			echo "<center style = 'color: white'>
					</p> <div id='Well' class='well well-sm'>Forme exponentielle :</div> 
						<span class='result'> Z = $abs.e<sup> i.(". round($resTeta, 3) . ")</span>
			  </center><br>";	  
				  
			echo "<div class = 'info' id = 'info'>
					<h3><center style = 'color: white'>Recapitulatif<br></center></h3>
						<div id = position>
						 	<p style = 'color: white'> <span class = 'position' style = 'color: rgb(255, 255, 247)'> -> </span> partie réel : <span style='color:  rgb(255, 157, 0)'>$nb1</span> </p>
						 	<p style = 'color: white'> <span class = 'position' style = 'color: rgb(255, 255, 247)'> -> </span> partie imaginaire : <span style='color:  rgb(255, 157, 0)'>$nb2</span></p>
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

?>
	</div>
<?php 
	}
