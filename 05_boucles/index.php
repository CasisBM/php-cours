<?php 
//Loops

//While
/*
$j = 0;
while($j <= 10){
    echo "$j-";
    $j++;
}
*/
$dateActuel = date("Y");
$date = 1970;
$nbJour=-365;

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
    echo "<li> $date </li>";
    $nbJour += 365;
    $date++;
}
echo "Il y a eu $nbJour jour depuis 1970"
 ?>
</ul>
</body>
</html>
