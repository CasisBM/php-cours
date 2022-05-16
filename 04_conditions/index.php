<?php 
// https://www.php.net/manual/fr/language.operators.comparison.php
//=================
// if/elseif/else 
//=================
/*
$age = 17;
if($age >= 18){
    echo 'vous avez le droit de voter';
}
else{
    echo "vous n'avez pas le droit de voter car votre age est de : $age ans";
}




//Avec la condition if/else afficher si on est le matin ou le soir

$heure = intval(date('H'));

if($heure < 18){
    echo "C'est le matin";
}
else
{
    echo "C'est le soir";
}

//Avec la condition if/elseif/else afficher si on est le matin; l'apres-midi ou le soir

$heure = 18;
if($heure < 12){
    echo "C'est le matin";
}
elseif($heure >= 18)
{
    echo "C'est le soir";
}
else{
    echo "C'est l'après-midi";
}


//
$a = 20;
$b = 5;
$c1 = 10;
$c2 = '10';

if($b != 3)
{
    //echo "la variable $b n'est pas égale à $b";
}

//Tester $c1 et $c2 avec == et ===
var_dump($c1==$c2); 
var_dump($c1 === $c2); 

//=================
// switch case
//=================

switch ($variable) {
    case 'value':
        # code...
        break;
    
    default:
        # code...
        break;
}

//=================
// match
//=================

$food = 'cake';

$return_value = match ($food) {
    'apple' => 'This food is an apple',
    'bar' => 'This food is a bar',
    'cake' => 'This food is a cake',
};

var_dump($return_value);

//=================
// empty/isset
//=================

$var = 0;
                   
// Évaluée à vrai car $var est vide
if (empty($var)) {
  echo '$var vaut soit 0, vide, ou pas définie du tout';
}
                   
// Évaluée à vrai car $var est définie
if (isset($var)) {
  echo '$var est définie même si elle est vide';
}
*/
// Faire une condition sur ce tableau : tester l'article à l'index 0 si il est non vide , sinon afficher "il n'ya pas d'articles"
// Créer une branche articles , que vous fusionnerez avec main lorsque l'exercice est finit.
$article = [];
if (empty($article[0])) {
    echo 'il n\'a pas d\'article';
  }

?>