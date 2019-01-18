<?php

$colors = array("#2E8B57", "#FF8000", "#FFFF00", "#00FF00", "#0000FF", "#BF00FF", "#F0F8FF", "#E6E6FA", "#4B0082", "#8B4513", '#FAFAD2', '#00FA9A');
$devs = array( "Hortense", "Clément", "Kevin", "Romain", "Laurine", "Thiabult", "Wikenson", "Yohann", "Aurélien", "Nicolas", "Ludo", "Matthias");
$nombrenom = count($devs);

foreach ($colors as $color) {
// chaque couleur du tableau $colors sera pris individuellement comme une variable $color//

echo "<div class='toto' style='background-color: $color;'>créé par PHP</div>";

}

/////////

$a = 0; 
$b = 0;
$c = 0;

for ($i=1; $i<=5; $i++) { 
	$a += 100;
	$b += 50;
	$c += 10;
}
echo "a= " .$a. " b=".$b. " c=".$c ."</br>";



$d = 1;
while ($d<6) {
	echo"</br>Le chiffre D=".$d++ ."</br>";
}



// Attribuer une couleur a chaque nom de dev
for ($i=0; $i < $nombrenom; $i++) { 
 echo "<div style='color: $colors[$i];'>".$devs[$i]."</div>";
} //Le PHP n'a pas de fonction .length, on lui demande donc de compter le nombre de valeur d'un des 2 tableaux (nous savons nous qu'ils ont la même taille) ce qui permet de faire la boucle for qui attribuera pour chaque itération de i une couleur de l'autre tableau a chaque nom.
?>

