<?php 
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
*/
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



?>