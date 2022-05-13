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

// Construire un tableau $nombreq à l'aide de la boucle for contenant des nombres de 34 à 78

$nombres = [];

for ($i=34; $i <= 78; $i++) { 
    # code...
    array_push($nombres,$i);
}

//echo(var_dump($nombres));


//Tableau Associatif
$fruits = ['banane'=> 'jaune' ,'pomme' => 'rouge', 'kiwi'=>'vert'];
echo 'La couleur de la pomme est ' . $fruits["pomme"];
echo '<hr>';
echo 'La longueur du tableau $fruits est de' . sizeof($fruits);
//sizeof() = count()
$ages = ['Michel'=> 34, 'Lucie' => 12, 'Didier'=>56];

$chaine = implode('-', $ages);// assemble value d'un tableau en string
$chaine2 =  explode('-', $chaine);// transforme un string en tableau en presisant le delimiteur
print_r($chaine2);
echo '<hr>';
echo $chaine; 

$ages['Paul'] = 22;

//echo $moyenne;

$html = '<ul>';
foreach ($ages as $key => $value) {
    # code...
    $html .= '<li>' . $key . ' a ' . $value . ' ans</li>';
}
$html .= '</ul>';
echo $html;


//Creer un tableau $notes avec un prenom => une note
//Afficher une liste ul des eleves et les notes
//Marc a eu 15/20

$fruits = 
[
    'banane'=> 'jaune' ,
    'pomme' => 'rouge',
    'kiwi'=>'vert'];
$notes = [
    'Michel'=> 12, 
    'Lucie' => 5, 
    'Didier'=>16, 
    'Marc' =>15
];
$html = '<ul>';
foreach ($notes as $key => $value) {
    # code...
    $html .= '<li>' . $key . ' a eu ' . $value . '/20</li>';
}
$html .= '</ul>';
echo $html;
$tab4 = array_merge($fruits,$notes);
echo var_dump($tab4);

//asort() // tri des valeurs d'un tableau par ordre croissant
//https://www.php.net/manual/en/array.sorting.php

// print_r($planetes);
// print_r($notes);
// echo '<hr>';
// asort($planetes); // tri des valeurs d'un tableau par ordre croissant
// asort($notes); 
// rsort($notes); // tri tableau par ordre decroissant
// ksort($notes); // tri tableau en fonction des clefs par ordre croissant
// arsort($notes); // tri tableau en fonction des valeurs par ordre decroissant
// krsort($notes); // tri en fonction des clefs par ordre decroissant

// print_r($planetes);
// print_r($notes);
*/
// Créer un tableau avec les mois de l'annnée
// - afficher la valeur de la 5 ligne de ce tableau
// - afficher la vleur de l'index 10
// - modifier le mois d'avril en le mettant en majuscule

$mois = [
    'Janvier',
    'Fevrier',
    'Mars',
    'Avril',
    'Mai',
    'Juin',
    'Juillet',
    'Aout',
    'Septembre',
    'Octobre',
    'Novembre',
    'Decembre'
];

echo $mois[4];
echo $mois[10];

$nomMois = 'Avril';
$mois[array_search($nomMois,$mois)] = strtoupper($nomMois);
//$nomMois = strtoupper('Avril');
//echo $mois[array_search($nomMois,$mois)];

// Créer un tableau associatif des departements de la region normandie
// avec le nom du departement en valeur et son code postale en index
// - afficher la valeur de l'index 27
// - ajouter le departement et code postale de la ville de Brest
// - parcourir le tableau des departements et afficher chaque departement dans un parapraphe p de la façon suivante :
// Le 'nom du departement' possede le code postale suivant :  'code postale'
echo '<hr>';
$departement = [
    14 => 'Calvados', 
    27 => 'Eure', 
    16 => 'Manche',
    76 => 'Seine-Maritime',  
    61 => 'Orne' 
];
$departement += [29 => 'Brest'];

echo $departement[27];
echo $departement[29];

$html = '';
foreach ($departement as $key => $value) {
    # code...
    $html .= '<p>' . $key . ' : ' . $value . '</p>';
}
echo $html;

echo '</pre>';

?>