<?php 
 		$conjugueNb1 = 0;
				$nb1 = "<i style='color: rgb(255, 157, 0)'>Pas de partie reelle</i>";
				echo "<center style = 'color: white'> 
						<div id='Well' class='well well-sm'>Forme algebrique : </div><span class='result' lang='latex'>Z = $nb2 (Imaginaire pur) </span><br>
						<br><div id='Well' class='well well-sm'>Peut aussi s'ecrire : </div><span class='result' lang='latex'>Img($nb2)</span>
					  </center>";
				 echo"<br><center style = 'color: white'> <div id='Well' class='well well-sm'>Coordonnées du point M :</div> 
						<span class='result' lang='latex'>M = $coordonnes </span>
					 </center><br>";
				echo"<center style = 'color: white'> <div id='Well' class='well well-sm'>conjugé : </div><span class= 'zBarre'>Z</span> = $conjugue </center><br>";
				require 'fonction.php';
				echo "<center style = 'color: white'>
						</p> <div id='Well' class='well well-sm'>Forme trigonométrique :</div> 
						<span class='result' lang='latex'> Z = \\sqrt$abs( \\cos(  ". round($resTeta, 3) . " ) + \\sin(  ". round($resTeta, 3) . " ).i )  </span>
					  </center><br>";
				echo "<center style = 'color: white'>
						</p> <div id='Well' class='well well-sm'>Forme exponentielle :</div> 
						<span class='result' lang='latex'> Z = \\sqrt$abs.e^{i.". round($resTeta, 3) . "}</span>
					  </center><br>";