<?php 
/*	 *****************  Calcul argument  *****************  */
	if (isset($nb1) AND isset($nb2) AND (!empty($mod))) { 
		$Cos = $nb1 / $mod;
		$Sin = $nb2 / $mod;
		$resTeta = acos($Cos);
		if ($Sin < 0) {
			$resTeta *= -1;
		}
		echo "<center style = 'color: white'>
					</p> <div id='Well' class='well well-sm'>Argument :</div> 
					<span class='result' style='padding: 10px'lang='latex'>
						\\theta = \\sqrt$abs = $mod
					</span>
				  </center><br>";
	}elseif (isset($nb1) AND (empty($mod)) OR $mod == "0") {
		echo "<hr>";
		echo "<div id='Error' class='container'>
					<div class='alert alert-danger fade in'>
					    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					    <strong>Attention !</strong> Vous devez au moins remplir le champs des nombres imaginaires
					    <ul><li>Une division par 0 est impossible. Repart reviser tes cours de maths de primaire.</li></ul>
					</div>
	     		 </div>";
	     		 return "O";
	}
/*	 *****************  *******************  *****************  */
