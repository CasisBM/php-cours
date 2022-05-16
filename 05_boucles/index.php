<?php 
//Loops
//While
/*

$j = 0;
while($j <= 10){
    echo "$j-";
    $j++;
}

$dateActuel = date("Y");
$date = 1970;
$nbJour = -365;

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
    <ul>
        <?php
        while ($dateActuel >= $date) {
        ?>
            <li> <?= $date ?> </li>

        <?php
            $nbJour += 365;
            $date++;
        }
        ?>
        <p> Il y a eu <strong> <?=$nbJour?> </strong> jour depuis 1970 </p> 
    </ul>
</body>

</html>


//==========
// Do while
//==========
// $y = 0;
// $k = 10;
// do {
//     echo "Nombre : $y<br>";
//     $y++;
//     $k--;
// } while ($y >= 10);
// echo '<br>';
// echo $k;

//=========
// foreach
//=========
$tabs = [1,2,3,4,5,6];
foreach($tabs as $tab) {
    echo 'Nombre : ' . $tab . '<br>';
}
*/
for ($i=34; $i <= 89 ; $i++) { 
 # code...
 echo $i;
 if($i<89)
 {
    echo ",";
 }
}

?>