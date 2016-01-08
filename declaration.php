<<?php
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
		$resInverse = "<img src='http://latex.codecogs.com/gif.latex? \\frac{($conjugueNb1)}{(". round(pow($mod, 2), 0) .")} $signeConjugue \\frac{($newNb2Bis)}{(". round(pow($mod, 2), 0) .")}.i'/>";
