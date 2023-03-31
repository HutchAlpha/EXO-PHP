//!Pour voir si le code fonctionne, faire | php "nom du documents" |
<?php
function test ($sexe, $prenom) {

    echo 'Bonjour' . " " . $sexe .", ". $prenom ;
}


$sexe = "Madame" ;
$prenom = "Martin";

echo test ($sexe, $prenom) ;




?>