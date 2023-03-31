<?php
//!Cours N°2 ---------------------------------------------
//* Nous allons voir le 2 types de propriété :

//*private (Permet de blocker l'informations et donc permet d'éviter de le modifier), si vous tenter tt de même de le modifier, alors création d'un Fatal error quand vous voulez lancer le code
//?Si je souhaite modifier tout de même un code privée, il faut mettre en place des Acceseur et Muttateur (get et set)

//? Les ajouts de se cours se mettron en bleue
//!FIN Cours ---------------------------------------------
class Employe 
{
    //!Déclare les paramétres d'une class nommé Employe
    public $nom;
    public $prenom;
    //? changement public à private pr prouver que l'on peux le modifier même en privé
    private $age;

    //!Permet de faire conprendre au logiciel que le nom de la function 
    public function __construct ($prenom, $nom, $age)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this-> setAge($age);
    }
    //?Connexion avec le private $age
    public function  setAge($age)
    {
        if(is_int($age) && $age >=1 && $age <=120) 
            {/*Permet de vérifier si l'age est bien un nombre */
            $this->age = $age;
            }
        else 
            {
            throw new Exception("Tu n'a pas mis de nombre, veuillez recommencer !");
            }
    }
    //? délivrer l'age que posséde l'employée
    public function getAge()
    {
        return $this->age;
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
//? Changement que on voudrait faire de l'age de l'employe1
$Employe1->setAge(50);
//!Demande au code de présenter la premiére ligne d'employe qui sera connecter à la ligne 27
$Employe1->presentation();
