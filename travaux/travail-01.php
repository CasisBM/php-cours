<?php
/*
Travail-01 :

    Réaliser un script qui convertit une température de degré Celsius °C en degré Fahrenheit °F
    Afficher les résultats dans un tableau html table , utiliser la fonction php round pour arrondir à l'unité supérieur
    Voici le tableau de conversion que vous devez avoir :

| °C | °F |
|--- |--- |
| 25 | 77 |
| 03 | 37.4 |
| 35 | 95 |
| 11 | 51.8 |
 */

 $tabCelsius = [25,03,35,11];
 $tabFahrenheit=[];

 foreach ($tabCelsius as $key => $value) {
     # code...
     //var_dump($value);
     $valueToFahrenheit = round(($value * 9/5) + 32,0, PHP_ROUND_HALF_UP);
     array_push($tabFahrenheit,$valueToFahrenheit);
 }
 $tab = array_combine($tabCelsius, $tabFahrenheit);
 //var_dump($tab);

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
     <table border="1">
        <tr>
            <th>Celsius °C</th>
            <th>Fahrenheit °F</th>
        </tr>

        <?php foreach ($tab as $key => $value) {?>
            <tr>
                <td> <?=$key ?></td>
                <td> <?=$value ?></td>
            </tr>
            <?php }?>
     </table>
 </body>
 </html>
