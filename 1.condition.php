<?php
//!Pour voir si le code fonctionne, faire | php "nom du documents" |
//Condition ----------
//readline : permet de posez une question quand on effectue le code
//le INT permet de faire fonctionner les "==="
$note = (int)readline('Entrez votre action : ');
if ($note > 10) 
{
    echo 'Bravo vous avez la moyenne';
} 
elseif ($note === 10) 
{
    echo 'Vous avez juste la moyenne';
}
else {
    'Dommage vous n\'avez pas la moyenne';
}

//Simplifier code ----------

$action = (int)readline('Entrez votre action : (1: Attaquer, 2 : Defendre, 3 : Passer son tour) ');

//Code Avant
if ($action === 1) 
{
    echo 'J\'attaque';
} 
elseif ($action === 2) 
{
    echo 'Je défends';
}
elseif ($action === 3) 
{
    echo 'Je passe mon tours';
}
else {
    echo 'Commande Inconnue';
}

//Code Aprés
switch($action){
    case 1 : echo 'J\'attaque';
    break ;
    case 2 : echo 'Je défend';
    break ;
    case 3 : echo 'Je passe mon tours';
    break ;
    default:
    echo 'Commande Inconnue';
}

//ET et OU ----------
//&& = et
//|| = ou
$heure = (int)readline('Entrez une heure : ');

if(( 9 <= $heure && $heure <=12) || (14 <= $heure && $heure <=17 )){
    echo 'Le magasin sera ouvert';
}
else 
{
    echo 'Le magasin est fermé';
}

?>