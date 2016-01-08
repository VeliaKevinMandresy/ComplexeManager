<?php
			echo "<center style = 'color: white'>
					</p> <div id='Well' class='well well-sm'>Algebrique : </div>
						<span class='result' lang='latex'><img src='http://latex.codecogs.com/gif.latex?Z = $Z'/></span>
				  </center><br>";
			echo"<center style = 'color: white'> <div id='Well' class='well well-sm'>Coordonnées du point M :</div> 
					<span class='result' lang='latex'><img src='http://latex.codecogs.com/gif.latex? M = $coordonnes'/></span>
				 </center><br>";
			echo"<center style = 'color: white'> <div id='Well' class='well well-sm'>Conjugué :</div> 
					<span class='result'lang='latex'><img src='http://latex.codecogs.com/gif.latex? \\bar{Z} = $conjugue'/></span>
				 </center><br>"; 

			if ($nb1 == "" AND $nb2 == "") {}
			else {
				echo "<center style = 'color: white'>"."<div id='Well' class='well well-sm'>Module :</div>"."\n"."<span class='result' lang='latex'>|Z| =  \\sqrt".abs(($nb1*$nb1 + $nb2*$nb2));
				echo "\n"."= ". $mod ."</span></center><br>";
			}
			echo"<center style = 'color: white'> <div id='Well' class='well well-sm'>Inverse de Z :</div> 
					<p class= 'Inverse'>
						<span class='result' lang='latex' style='padding: 20px'>
							\\frac{1}{Z} = \\frac{($conjugue)}{($Z)($conjugue)}
							=\\frac{($conjugue)}{($nb1)^2 $signeConjugue ($conjugueNb2.i)^2}
							=\\frac{($conjugueNb1)}{(". round(pow($mod, 2), 0) .")} $signeConjugue \\frac{($newNb2Bis)}{(". round(pow($mod, 2), 0) .")}.i
						</span>	
					</p>	
				 </center><br>"; 
			require 'Argument.php';
			echo "<center style = 'color: white'>
					</p> <div id='Well' class='well well-sm'>Forme trigonométrique :</div> 
						<span class='result' lang='latex'> Z = \\sqrt$abs( \\cos(  ". round($resTeta, 3) . " ) + \\sin(  ". round($resTeta, 3) . " ).i )  </span>
			  </center><br>";

			echo "<center style = 'color: white'>
					</p> <div id='Well' class='well well-sm'>Forme exponentielle :</div> 
						<span class='result' lang='latex'> Z = \\sqrt$abs.e^{i.(". round($resTeta, 3) . ")}</span>
			  </center><br>";