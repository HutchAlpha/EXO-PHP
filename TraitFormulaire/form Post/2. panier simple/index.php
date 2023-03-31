<?php
session_start();

if(isset($_SESSION['panier'])) 
{ // Vérifier si la variable de session 'panier' existe
    unset($_SESSION['panier']); // Détruire la variable de session qui contient les éléments du panier
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post" action="panier.php">
        <h2>Sélectionnez vos fruits et légumes :</h2>
        <input type="checkbox" name="fruits[]" value="pomme"> Pomme<br>
        <input type="checkbox" name="fruits[]" value="banane"> Banane<br>
        <input type="checkbox" name="legumes[]" value="carotte"> Carotte<br>
        <input type="checkbox" name="legumes[]" value="brocoli"> Brocoli<br>
        <input type="submit" name="submit" value="Ajouter au panier">
        <input type="reset" name="vider_panier" value="Vider le panier"> <!-- Bouton pour vider le panier -->
    </form>
   <?php

     if(isset($_POST['vider_panier'])) 
     { // Vérifier si le bouton "Vider le panier" a été cliqué
         unset($_SESSION['panier']); // Détruire la variable de session qui contient les éléments du panier
     }
   ?>
    
</body>
</html>