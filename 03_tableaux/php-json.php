<?php
$person= [
    'prenom' => 'Kylian',
    'nom' => 'Mbapée',
    'email' => 'kylian@psg.fr'
];

$people = [
    $person,
    [
        'prenom' => 'Stephen',
        'nom' => 'Curry',
        'email' => 'curry@warriors.com'
    ],
    [
        'prenom' => 'Elon ',
        'nom' => 'Musk',
        'email' => 'elon@tesla.com'
    ]
];
    //var_dump($people[0]);
    echo $people[0]['email'];
    echo $people[0]['nom'];

    $json_file = json_encode($people);
    echo $json_file;
?>
    