<?php
	 $nb2Bis = 0;
			$nb2 = "<i style='color: rgb(255, 157, 0)'>Pas de partie imaginaire</i>";
			echo "<center style = 'color: white'>
					</p> <div id='Well' class='well well-sm'>Forme algebrique :</div> <span class='result' lang='latex'>Z = $nb1</span>
					<br><br>";
			require 'Argument.php';
			echo "<center style = 'color: white'>
					</p> <div id='Well' class='well well-sm'>Forme trigonométrique :</div> 
						<span class='result' lang='latex'> Z = \\sqrt$abs( \\cos(  ". round($resTeta, 3) . " ) + \\sin(  ". round($resTeta, 3) . " ).i )  </span>
			  </center><br>";

			echo "<center style = 'color: white'>
					</p> <div id='Well' class='well well-sm'>Forme exponentielle :</div> 
						<span class='result' lang='latex'> Z = \\sqrt$abs.e{i.". round($resTeta, 3) . "}</span>
			  </center><br>";	  
				  
