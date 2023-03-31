//!Réaliser formulaire en mode get(voir information sur l'url (!NON RECOMMENDE !)

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <?php
        //require: permet d'appliquer un code comme avec un href
        $nombre = 150 ;
        require 'header.php' ;
    ?>

//placeholder : ecrit un texte que le client vera au form
<form action="/jeu.php" method="get">
    <input type="number" name="chiffre" placeholder="Donner un nombre entre 0 à 150">
    <button type="submit">Deviner</button>
</form>  

<?php   if ($_GET['chiffre'] > $nombre){ ?>
    <h1>votre chiffre est trop grand !</h1>
<?php } elseif ($_GET['chiffre'] < $nombre){ ?>
    <h1>votre chiffre est trop petit !</h1>
<?php } else {?>
    <h1>vous avez trouver le chiffres, félicitations !</h1>}
<?php } ?>
</body>
</html>