<?php 
//Tableau indexé
$tableau = array();
$tableau = [];
//$tableau = array('Lundi', 'Mardi', 45,67.8,false);
$tableau = [true, 45, 'Terre',56,[45,67,78]];

echo '<pre>';

//print_r($tableau);
$tableau[] = 'Janvier';
$tableau[] = 45;
$tableau[] = false;

//var_dump($tableau);

$notes = [12,5,16,7];

//Afficher moyenne des notes
//count($tableau) // connaitre nb elt dans tableau
//array_push($tableau,'object') // ajouter elt dans tab
$moyenne = array_sum($notes)/count($notes);
//$tab3 = array_merge($tableau,$notes); // assemble des tableaux
//var_dump($tab3);
echo $moyenne;
echo '<pre/>';
?>