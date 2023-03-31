<?php
//!Cours N°1 ---------------------------------------------
//* Nous alons voir, une des 3 type de propriété :
//*public (Permet de pouvoir modifier l'info à tout moment dans le doc)

//!FIN Cours ---------------------------------------------
class Employe 
{
    //!Déclare les paramétres d'une class nommé Employe
    public $nom;
    public $prenom;
    public $age;

    //!Permet de faire conprendre au logiciel que le nom de la function 
    public function __construct ($prenom, $nom, $age)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }
    //!va créer un message avec les infos de la ligne 37
    //!Attention! : doit faire la fonction construct pour qu'il puisse faire le liens entre les infos de employe et la class
    public function presentation()
    {
        var_dump("Bonjour, je suis $this->prenom $this->nom et j'ai $this->age ans");
    }
}
//!Données des salariés connecté au __Construct grâce au $this qio va être par " " dans la virgule
$Employe1 = new Employe ("Lior", "Chamla", 32);
$Employe2 = new Employe ("Bernard", "Tapis", 66);

//!Demande au code de présenter la premiére ligne d'employe qui sera connecter à la ligne 27
$Employe1->presentation();
