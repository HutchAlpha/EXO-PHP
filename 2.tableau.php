<?php
//!Pour voir si le code fonctionne, faire | php "nom du documents" |
//tableau ----------
$exemple = 
            [
            'nom' => 'Bernard',
            'prenom' => 'TAPIS',
            'sexe' => 35
            ];

echo $exemple ['prenom'];
//tableau sur tableau ----------
$classe = 
        [
            [
            'nom' => 'Bernard',
            'prenom' => 'TAPIS',
            'sexe' => 35
            ],[
            'nom' => 'Salut',
            'prenom' => 'Sa va',
            'sexe' => 42
            ]
        ];

echo $classe [1] ['prenom'];

//Ajout valeur tableaux ----------

$ajout = [10,12,20];

array_push($ajout, 15, 17);
print_r($ajout); 

?>
