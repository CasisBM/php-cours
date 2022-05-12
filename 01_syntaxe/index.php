<h1>Un Titre</h1>
<?php
//echo/print

echo "texte en ph", " Autre Texte <br/>";
print "Texte en php avec print <br/>";

//Print 'Texte en php avec print <br/>'
//un commentaire
# un commentaire
/*
*commentaire sur plusiuer ligne
*/

// variable 
//fonctionne

$variable = "Une variable";
$Variable = "Une autre variable";
echo $variable, $Variable;
$_3var = 34;
echo $_3var;

// fonctionne pas
// $3var = 34;

// string

$nom = "mohamed";
//int

$nombre = 34;
//float

$nombreDecimale = 23.7;
//bool

$vrai = true;
$faux = false;

//array/objet

$tableau = ["groupe", 34, 45.6, false];

//null
//$variable = null;

// simple/double guillemets (quotes)

//$message = "aujourhui"
//$message = 'aujourd\'hui'
$tkt = 'Bonjour';
//echo "$txt tout le monde";
echo '$txt tout le monde<br>';

//concatenation
/*
$fruit1 = 'Kiwi';
$fruit2 = 'Pomme';
$fruit3 = 'Banane';

//echo $fruit1 . '<br> ' . $fruit2;
*/

$fruit1 = 'Kiwi';
$fruit1 = 'Pomme';
$fruit2 = 'Banane';
$fruit2 .= 'Poire';

echo $fruit2 . '<br> ';
echo $fruit1;

$html = '<h1> Cours de php </h1>';
$html .= '<p> Ajout d\'un texte dans un paragraphe </p>';
echo $html;
?>
<h2> Texte html </h2>

<?php
$titre = 'Texte de titre';
?>

<h4> <?php echo $titre; ?> </h4>
<h4> <?= $titre; ?> </h4>

<!--  
    $data1 = 'Hello';
    $data2 = 'les terriens';
    $data3 = 'Mars';
    $data4 = 'planete';

    Avec les 2 methodes de concatenation, ecrire la phrase : 
    Hello , les terriens. Je viens de la planete Mars 
-->

<?php
$data1 = 'Hello';
$data2 = 'les terriens';
$data3 = 'Mars';
$data4 = 'planete';

$phrase = '';
$phrase .= $data1;
$phrase .= ', ';
$phrase .= $data2;
$phrase .= '. Je viens de la ';
$phrase .= $data4;
$phrase .= ' ';
$phrase .= $data3;
$phrase .= '.';
?>

<p><?= $data1 . ', ' . $data2 . '. Je viens de la ' . $data4 . ' ' . $data3 . '.'; ?> </p>
<p> <?= $phrase; ?> </p>