<?php
    
    session_start(); // démarrer la session
    $count = 0;
    $prixPomme = "1.57";
    $prixBanane = "1.64";
    $prixCarotte = "1.34";
    $prixBrocoli = "2.00";
    $total = "00.00";

    if(isset($_POST['submit'])) 
    { // Vérifier si le formulaire a été soumis 
       
        ?><h1>Voici votre panier :</h1><?php

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
            if ($qtePomme > 1) {
                $pomme['nom'].= "s";
            }
        
        ?>
        
        <h3><?php echo $pomme['qte']; ?> <?php echo $pomme['nom']; ?> aux prix de 
        <?php echo $pomme['prix']; ?> € /  Total :<?php echo $pomme['total']; ?> € </h3>
        
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
            if ($qteBanane > 1) {
                $banane['nom'].= "s";
            }
        
        ?>
            <h3><?php echo $banane['qte']; ?> <?php echo $banane['nom']; ?> aux prix de 
            <?php echo $banane['prix']; ?> € /  Total  <?php echo $banane['total']; ?> € </h3>
        
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
            if ($qteCarotte > 1) {
                $carotte['nom'].= "s";
            }
        
        ?>

            <h3><?php echo $carotte['qte']; ?> <?php echo $carotte['nom']; ?> aux prix de 
            <?php echo $carotte['prix']; ?> € /  Total <?php echo $carotte['total']; ?> € </h3>
        
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
            if ($qteBrocoli > 1) {
                $brocoli['nom'].= "s";
            }
        
        ?>

            <h3><?php echo $brocoli['qte']; ?> <?php echo $brocoli['nom']; ?> aux prix de 
            <?php echo $brocoli['prix']; ?> € /  Total  <?php echo $brocoli['total']; ?> € </h3>
    <?php
    }
    //Calcul somme final
    if (isset($pomme['total']) && $pomme['total'] > 0) {
        $prixPommeTot = $pomme['total'] ;
    } else {
        $prixPommeTot = 0;
    }
    
    if (isset($banane['total']) && $banane['total'] > 0) {
        $prixBananeTot = $banane['total'] ;
    } else {
        $prixBananeTot = 0;
    }
    
    if (isset($carotte['total']) && $carotte['total'] > 0) {
        $prixCarotteTot = $carotte['total'] ;
    } else {
        $prixCarotteTot = 0;
    }
    
    if (isset($brocoli['total']) && $brocoli['total'] > 0) {
        $prixBrocoliTot = $brocoli['total'] ;
    } else {
        $prixBrocoliTot = 0;
    }
    
   
        
        $prixTotal = $prixPommeTot + $prixBananeTot + $prixCarotteTot + $prixBrocoliTot;
        ?>
    <h2>Prix TTC à payer : <strong> <?php echo $prixTotal ?> €</strong> </h2>
    
    <?php
    

}
else
{
echo'Vous avez tricher, merci de revenir sur la page index.php';
}
    
?>