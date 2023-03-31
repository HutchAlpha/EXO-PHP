<?php
    session_start(); // Démarrer une session pour stocker les éléments du panier

        $count = '';
        
        if(isset($_POST['submit'])) 
        { // Vérifier si le formulaire a été soumis 
            if(isset($_POST['fruits'])) 
            { // Vérifier si des fruits ont été cochés
                foreach($_POST['fruits'] as $fruit) 
                {
                    $_SESSION['panier'][] = $fruit; // Ajouter le fruit au panier
                }
            }

            if(isset($_POST['legumes'])) 
            { // Vérifier si des légumes ont été cochés
                foreach($_POST['legumes'] as $legume) 
                {
                    $_SESSION['panier'][] = $legume; // Ajouter le légume au panier
                }
            }
            
            if(empty($_SESSION['panier'])){
                echo "<h1>Votre panier est actuelement vide :( </h1>";
            } else {
                $count = count($_SESSION['panier']);
            }
             // Compter le nombre d'éléments dans le panier
            
            if($count > 0) 
            { // Vérifier si le panier contient des éléments
                $panier = implode(', ', $_SESSION['panier']); // Convertir le tableau en une chaîne de caractères
                echo "<h1>Votre panier contient : </h1> <br /> <h1>$panier</h1>"; // Afficher le résultat dans un élément h1
            } 
            
        }
    
?>


