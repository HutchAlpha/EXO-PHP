<?php
session_start();

if(isset($_SESSION['panier'])) 
{ // Vérifier si la variable de session 'panier' existe
    unset($_SESSION['panier']); // Détruire la variable de session qui contient les éléments du panier
}

    $prixPomme = "1.57";
    $prixBanane = "1.64";
    $prixCarotte = "1.34";
    $prixBrocoli = "2.00";
    
    ?>
    
    

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Version N°2 Liste Courses</title>
</head>
<body>

    <form method="post" action="panier.php">
        <h2>Sélectionnez vos fruits et légumes :</h2>

<input type="checkbox" name="validePomme" value="pomme" checked> Pomme
<?php echo $prixPomme; ?>€
<select name="qtePomme">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select><br>

<input type="checkbox" name="valideBanane" value="banane"> Banane
<?php echo $prixBanane ; ?>€
<select name="qteBanane">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select><br>

<input type="checkbox" name="valideCarotte" value="carotte"> Carotte
<?php echo $prixCarotte; ?>€
<select name="qteCarotte">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select><br>

        
<input type="checkbox" name="valideBrocoli" value="banane"> Brocoli
<?php echo $prixBrocoli; ?>€
<select name="qteBrocoli">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select><br>

<br />
<input type="submit" name="submit" value="Ajouter au panier">
<input type="reset" name="vider_panier" value="Vider le panier">
<?php
//ce code est la pour faire un test avant d'envoyer sur pannier.php
if (isset($_POST["validePomme"]) == "true"){
    
    $qtePomme = isset($_POST["qtePomme"]) ? intval($_POST["qtePomme"][0]) : 1; // obtenir la quantité de pommes sélectionnée
    
    $pomme = [
        'nom' => 'pomme',
        'bool' => true,
        'FL' => 'fruits', 
        'qte' => $qtePomme, 
        'prix' => $prixPomme,
        'total' => $prixPomme * $qtePomme,   
    ];
?>

<h1>Vous avez achetez :  <?php echo $pomme['qte']; ?> : <?php echo $pomme['nom']; ?> aux prix de 
<?php echo $pomme['prix']; ?>€, soit en total <?php echo $pomme['total']; ?>€ </h1>

<?php
}



if (isset($_POST["valideBanane"]) == "true"){
    
    $qteBanane = isset($_POST["qteBanane"]) ? intval($_POST["qteBanane"][0]) : 1; // obtenir la quantité de Bananes sélectionnée
    
    $banane = [
        'nom' => 'banane',
        'bool' => true,
        'FL' => 'fruits', 
        'qte' => $qteBanane, 
        'prix' => $prixBanane,
        'total' => $prixBanane * $qteBanane,
    ];
?>

    <h1>Vous avez achetez :  <?php echo $banane['qte']; ?> : <?php echo $banane['nom']; ?> aux prix de 
    <?php echo $banane['prix']; ?>€, soit en total <?php echo $banane['total']; ?>€ </h1>

<?php
}

if (isset($_POST["valideCarotte"]) == "true"){
    
    $qteCarotte = isset($_POST["qteCarotte"]) ? intval($_POST["qteCarotte"][0]) : 1; // obtenir la quantité de Carotte sélectionnée
    
    
    $carotte = [
        'nom' => 'carotte',
        'bool' => true,
        'FL' => 'legumes', 
        'qte' => $qteCarotte, 
        'prix' => $prixCarotte,
        'total' => $prixPomme * $qtePomme,   
    ];
?>
    <h1>Vous avez achetez :  <?php echo $carotte['qte']; ?> : <?php echo $carotte['nom']; ?> aux prix de 
    <?php echo $carotte['prix']; ?>€, soit en total <?php echo $carotte['total']; ?>€ </h1>

<?php
}
 
if (isset($_POST["valideBrocoli"]) == "true"){
    
    $qteBrocoli = isset($_POST["qteBrocoli"]) ? intval($_POST["qteBrocoli"][0]) : 1; // obtenir la quantité de Brocoli sélectionnée

    $brocoli = [
        'nom' => 'brocoli',
        'bool' => true,
        'FL' => 'legumes', 
        'qte' => $qteBrocoli, 
        'prix' => $prixBrocoli,
        'total' => $prixBrocoli* $qteBrocoli  
    ];
?>
    <h1>Vous avez achetez :  <?php echo $brocoli['qte']; ?> : <?php echo $brocoli['nom']; ?> aux prix de 
    <?php echo $brocoli['prix']; ?>€, soit en total <?php echo $brocoli['total']; ?>€ </h1>
<?php
}

?>
</body>
</html>