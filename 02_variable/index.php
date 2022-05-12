<?php
//constantes
define('HOST','localhost');
define('USER','root');

/*  
var_dump(HOST);
var_dump(USER); 
*/


 /* <?= HOST.'<br/>'.USER ?>  */

$x = 4;
$y = 2;
$z = 5;

/* 
$calcul = $x + $y;
$calcul = $x * $y;
$calcul = $x / $y;
$calcul = $x % $y; 
$calcul = $x ** $y; //exponentiel
$calcul = $x % $y;  //modulo
*/

//affectation

$a =2;
$b =3;
/*
$a += $b; // $a = $a + $b
$a -= $b; // $a = $a + $b
$a *= $b; // $a = $a + $b
$a /= $b; // $a = $a + $b
round($a,précision) // tourne la valeur arrondie de num à la précision 
                    // (nombre de chiffres après la virgule). 
*/

$prixHt = 172;
$tva = 0.2;
$prixTtc = $prixHt + $prixHt * $tva;
?>

<strong> Prix Hors Taxe </strong>
<?=': '.$prixHt.' €'?>
<hr>
<strong> T.V.A </strong>
<?=': '.$tva.' %'?>
<hr>
<strong> Prix Toutes Taxes Compris </strong>
<?=': '.$prixTtc.' €' ?>
<hr>


<?php 
$naissance = 1990;
$age =  intval(date("Y")) - $naissance;
//var_dump(intval(date("Y")));
?>

<strong> Année de naissance </strong>
<?=': '.$naissance?>
<hr>
<strong> Age </strong>
<?=': '.$age?>
<hr>

<?php
//Incrementation/decrementation

$i = 0;
$i++; // $i += 1; // $i = $i + 1;

$j = 10; // $j -= 1; // $j = $j - 1;
$j-- 

?>
