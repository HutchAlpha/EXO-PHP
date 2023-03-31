<?php
//!Pour voir si le code fonctionne, faire | php "nom du documents" |

//Utiliser une fonction ----------
//!Ex 1 : Appeler une personne
//Lorsque l'on créer une fonction, il faut déclarer les valeurs que l'on souhaite importer
function bonjour ($nom) {
    echo 'Bonjour' . $nom . "\n" ;
}

//nom de la fonction aprés echo
//cela permet de faire un raccourcis au niveau du code
echo bonjour('Jean');
echo bonjour('Marion');

//!Ex-2: Mettre des conditions
//Dans cette exercices, nous allons montrer que il faut obligatoirement utiliser le echo
//suivie du nom de fonction pour incérer des infos dans la fonction autrement c'est imposible
$nom = "Doe";

function exemple2 ($prenom = null, $nom = null) {
    if($prenom === null) {
    return "Bonjour\n";
    }
    return 'Bonjour' . $prenom . " " . $nom . "\n" ;
}

echo exemple2('Jean', $nom);













?>