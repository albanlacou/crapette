<!DOCTYPE html>
<html>
<head>
	<title>Crapette en ligne</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="ennemie">
		<div class="ennemieContainer">
			<div class="defausse"></div>
			<div class="deck"></div>
			
		</div>
	</div>
	<div class="main">
		<?php 
		$piques = array("1","2","3","4","5","6","7","8","9","10","valet","dame","roi");
		$coeur = array("1","2","3","4","5","6","7","8","9","10","valet","dame","roi");
		$carreau = array("1","2","3","4","5","6","7","8","9","10","valet","dame","roi");
		$trefle = array("1","2","3","4","5","6","7","8","9","10","valet","dame","roi");
		$atout = array("l'excuse","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21");
		$cartes = [	['nom' => '1' , 'symbole' => 'coeur', 'couleur' => 'rouge'], 
					['nom' => '2' , 'symbole' => 'coeur', 'couleur' => 'rouge'], 
					['nom' => '3' , 'symbole' => 'coeur', 'couleur' => 'rouge'], 
					['nom' => '4' , 'symbole' => 'coeur', 'couleur' => 'rouge'], 
					['nom' => '5' , 'symbole' => 'coeur', 'couleur' => 'rouge'], 
					['nom' => '6' , 'symbole' => 'coeur', 'couleur' => 'rouge'], 
					['nom' => '7' , 'symbole' => 'coeur', 'couleur' => 'rouge'], 
					['nom' => '8' , 'symbole' => 'coeur', 'couleur' => 'rouge'], 
					['nom' => '9' , 'symbole' => 'coeur', 'couleur' => 'rouge'], 
					['nom' => '10' , 'symbole' => 'coeur', 'couleur' => 'rouge'], 
					['nom' => 'valet' , 'symbole' => 'coeur', 'couleur' => 'rouge'], 
					['nom' => 'dame' , 'symbole' => 'coeur', 'couleur' => 'rouge'], 
					['nom' => 'roi' , 'symbole' => 'coeur', 'couleur' => 'rouge'], 
					['nom' => '1' , 'symbole' => 'carreau', 'couleur' => 'rouge'], 
					['nom' => '2' , 'symbole' => 'carreau', 'couleur' => 'rouge'], 
					['nom' => '3' , 'symbole' => 'carreau', 'couleur' => 'rouge'], 
					['nom' => '4' , 'symbole' => 'carreau', 'couleur' => 'rouge'], 
					['nom' => '5' , 'symbole' => 'carreau', 'couleur' => 'rouge'], 
					['nom' => '6' , 'symbole' => 'carreau', 'couleur' => 'rouge'], 
					['nom' => '7' , 'symbole' => 'carreau', 'couleur' => 'rouge'], 
					['nom' => '8' , 'symbole' => 'carreau', 'couleur' => 'rouge'], 
					['nom' => '9' , 'symbole' => 'carreau', 'couleur' => 'rouge'], 
					['nom' => '10' , 'symbole' => 'carreau', 'couleur' => 'rouge'], 
					['nom' => 'valet' , 'symbole' => 'carreau', 'couleur' => 'rouge'], 
					['nom' => 'dame' , 'symbole' => 'carreau', 'couleur' => 'rouge'], 
					['nom' => 'roi' , 'symbole' => 'carreau', 'couleur' => 'rouge'], 
					['nom' => '1' , 'symbole' => 'pique', 'couleur' => 'noir'], 
					['nom' => '2' , 'symbole' => 'pique', 'couleur' => 'noir'], 
					['nom' => '3' , 'symbole' => 'pique', 'couleur' => 'noir'], 
					['nom' => '4' , 'symbole' => 'pique', 'couleur' => 'noir'], 
					['nom' => '5' , 'symbole' => 'pique', 'couleur' => 'noir'], 
					['nom' => '6' , 'symbole' => 'pique', 'couleur' => 'noir'], 
					['nom' => '7' , 'symbole' => 'pique', 'couleur' => 'noir'], 
					['nom' => '8' , 'symbole' => 'pique', 'couleur' => 'noir'], 
					['nom' => '9' , 'symbole' => 'pique', 'couleur' => 'noir'], 
					['nom' => '10' , 'symbole' => 'pique', 'couleur' => 'noir'], 
					['nom' => 'valet' , 'symbole' => 'pique', 'couleur' => 'noir'], 
					['nom' => 'dame' , 'symbole' => 'pique', 'couleur' => 'noir'], 
					['nom' => 'roi' , 'symbole' => 'pique', 'couleur' => 'noir'], 
					['nom' => '1' , 'symbole' => 'trefle', 'couleur' => 'noir'], 
					['nom' => '2' , 'symbole' => 'trefle', 'couleur' => 'noir'], 
					['nom' => '3' , 'symbole' => 'trefle', 'couleur' => 'noir'], 
					['nom' => '4' , 'symbole' => 'trefle', 'couleur' => 'noir'], 
					['nom' => '5' , 'symbole' => 'trefle', 'couleur' => 'noir'], 
					['nom' => '6' , 'symbole' => 'trefle', 'couleur' => 'noir'], 
					['nom' => '7' , 'symbole' => 'trefle', 'couleur' => 'noir'], 
					['nom' => '8' , 'symbole' => 'trefle', 'couleur' => 'noir'], 
					['nom' => '9' , 'symbole' => 'trefle', 'couleur' => 'noir'], 
					['nom' => '10' , 'symbole' => 'trefle', 'couleur' => 'noir'], 
					['nom' => 'valet' , 'symbole' => 'trefle', 'couleur' => 'noir'], 
					['nom' => 'dame' , 'symbole' => 'trefle', 'couleur' => 'noir'], 
					['nom' => 'roi' , 'symbole' => 'trefle', 'couleur' => 'noir'],
					['nom' => 'excuse' , 'type' => 'atout'], 
					['nom' => '1' , 'type' => 'atout'], 
					['nom' => '2' , 'type' => 'atout'], 
					['nom' => '3' , 'type' => 'atout'], 
					['nom' => '4' , 'type' => 'atout'], 
					['nom' => '5' , 'type' => 'atout'], 
					['nom' => '6' , 'type' => 'atout'], 
					['nom' => '7' , 'type' => 'atout'], 
					['nom' => '8' , 'type' => 'atout'], 
					['nom' => '9' , 'type' => 'atout'], 
					['nom' => '10' , 'type' => 'atout'], 
					['nom' => '11' , 'type' => 'atout'], 
					['nom' => '12' , 'type' => 'atout'], 
					['nom' => '13' , 'type' => 'atout'], 
					['nom' => '14' , 'type' => 'atout'], 
					['nom' => '15' , 'type' => 'atout'], 
					['nom' => '16' , 'type' => 'atout'], 
					['nom' => '17' , 'type' => 'atout'], 
					['nom' => '18' , 'type' => 'atout'], 
					['nom' => '19' , 'type' => 'atout'], 
					['nom' => '20' , 'type' => 'atout'], 
					['nom' => '21' , 'type' => 'atout']];


		$total = $piques + $coeur + $carreau + $trefle + $atout;
		var_dump($cartes[52]);
		echo "test";
		?>
		<div class="middle_cont">
			<div class="pile1" id="pile"></div>
			<div class="pile2" id="pile"></div>
			<div class="pile3" id="pile"></div>
			<div class="pile4" id="pile"></div>
			<div class="pile5" id="pile"></div>
		</div>
		
	</div>
	
	<div class="moi">
		<div class="setContainer">
			<div class="deck"></div>
			<div class="defausse"></div>
		</div>
	</div>

</body>
</html>