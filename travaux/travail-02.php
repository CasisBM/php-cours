<?php
/*
Travail-02 :

    Travaller avec le fichier json persons.json dans le dossier Travaux
    Afficher le(a) deuxieme ami(e) de Raymond Jimenez dans un titre html <h3>
    Afficher la couleur des yeux de Ball Shaffer en gras html strong sous la forme d'une phrase : La couleur des yeux de Ball Shaffer est :
    Afficher dans une balise html article dans l'ordre suivant :
        image de la personne dans une balise html img
        Nom : le nom de la personne
        Age: age de la personne
        Couleur des yeux : la couleur des yeux de la personne
        Email: email de la personne
        Age: age de la personne
        Fruit favori : fruit favori de la personne
        Si isActive est à true : afficher ACTIF
        Tags : afficher tous les tags de la personne séparé d'une virgule
        Ne pas afficher la derniere la deniere virgule de tous les tags
        Chaque personne sera séparé d'une ligne horizontale html <hr>

Vous trouverez une capture du resultat attendu.
 */
echo '<pre>';
$persons = file_get_contents("./persons.json");
//var_dump($persons);

$persons = json_decode($persons,true);

/*
foreach ($persons as $key => $value) {
    # code...
    if($value['name'] === 'Raymond Jimenez')
    {
       var_dump($value['friends'][2]['name']) ;
    }
    echo '<hr>';
}
*/
// var_dump($persons["Raymond Jimenez"]) ;

echo '</pre>';
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
     <h3>
     <?php foreach ($persons as $key => $value) {
          if($value['name'] === 'Raymond Jimenez')
          {
             echo $value['friends'][2]['name'];
          }
        }?>
     </h3>
 </body>
 </html>
