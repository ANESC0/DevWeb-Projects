<?php


$suspects = [
    [
        'Prénom'    => 'Bonnie',
        'Nom'       => 'Parker',
        'Age'       => 20,
        'Taille'    => '1m65',
        'Poids'     => 50,
        'Adresse'   => [
            'Rue'   => '4 rue des dunes',
            'Ville' => 'Snowland',
            'Pays'  => 'Etats-Unis'
        ]
    ],
    [
        'Prénom'    => 'Clyde',
        'Nom'       => 'Borrow',
        'Age'       => 22,
        'Taille'    => '1m75',
        'Poids'     => 80,
        'Adresse'   => [
            'Rue'   => '4 rue des dunes',
            'Ville' => 'Snowland',
            'Pays'  => 'Etats-Unis'
        ]
    ]
];


foreach($suspects as $cle => $informations){
    echo $suspects[$cle]['Prénom']. ' '.$suspects[$cle]['Nom'].'.<br>
    Agé de '.$suspects[$cle]['Age'].' ans et mesurant '.$suspects[$cle]['Taille'].' 
    pour '.$suspects[$cle]['Poids'].'Kg, habite '.$suspects[$cle]['Adresse']['Rue'].'
    à '.$suspects[$cle]['Adresse']['Ville'].','.$suspects[$cle]['Adresse']['Pays'].'<br><br>'; 
}
?>