<?php 
 				$conjugueNb1 = 0;
				$nb1 = 0;
				$nb2 = $nb2Bis;
				echo "<center style = 'color: white'> 
						<div id='Well' class='well well-sm'>Forme algebrique : </div><span class='result' lang='latex'>Z = $nb2</span><br>
					  </center>";
				 echo"<br><center style = 'color: white'> <div id='Well' class='well well-sm'>Coordonnées du point M :</div> 
						<span class='result' lang='latex'>M = $coordonnes </span>
					 </center><br>";
				echo"<center style = 'color: white'> <div id='Well' class='well well-sm'>conjugé : </div></span><span class='result' lang='latex'>\\bar{Z} = $conjugue </span></center><br>";
				require 'Argument.php';
				echo "<center style = 'color: white'>
						</p> <div id='Well' class='well well-sm'>Forme trigonométrique :</div> 
						<span class='result' lang='latex'> Z = \\sqrt$abs( \\cos(  ". round($resTeta, 3) . " ) + \\sin(  ". round($resTeta, 3) . " ).i )  </span>
					  </center><br>";
				echo "<center style = 'color: white'>
						</p> <div id='Well' class='well well-sm'>Forme exponentielle :</div> 
						<span class='result' lang='latex'> Z = \\sqrt$abs.e^{i.". round($resTeta, 3) . "}</span>
					  </center><br>";