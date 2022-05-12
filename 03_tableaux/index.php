<?php 
echo '<pre>';
/*
//Tableau indexé
$tableau = array();
$tableau = [];
//$tableau = array('Lundi', 'Mardi', 45,67.8,false);
$tableau = [true, 45, 'Terre',56,[45,67,78]];



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
echo var_dump($tableau);
for ($i=0; $i < count($tableau); $i++) { 
    # code...
    echo $tableau[$i].'<br/>';
}

$fruits = ['Banane', 'Kiwi', 'Pomme','Poire'];
$html ='';

for ($i=0; $i < count($fruits); $i++) { 
    # code...
    echo $fruits[$i] . ',';
}

foreach($fruits as $fruit ){
    # code...
    echo $fruit . '<br/>';
}
*/
// Construire un tableau $nombreq à l'aide de la boucle for contenant des nombres de 34 à 78

$nombres = [];

for ($i=34; $i <= 78; $i++) { 
    # code...
    array_push($nombres,$i);
}

echo(var_dump($nombres));


//echo $moyenne;
echo '</pre>';

?>
