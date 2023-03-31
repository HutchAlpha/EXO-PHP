<?php
//!Cours N°3 ---------------------------------------------
//* Nous allons voir la derniére propriété :

//*protected (Permet de blocker l'informations comme le privé mais on peux aller chercher l'info en dehors de la classe

//?Nous allons voire la fonction extends qui permet de pouvoir prendre la définition d'une class sans faire de redondances

//? Les ajouts de se cours se mettron en bleue
//!FIN Cours ---------------------------------------------
class Employe 
{
    //!Déclare les paramétres d'une class nommé Employe
    public $nom;
    public $prenom;
    //? changement private à protected pr pouvoir garder la notion de privée ET rechercher cette information en dehors de la class sans être bloquer
    protected $age;

    //!Permet de faire conprendre au logiciel que le nom de la function 
    public function __construct ($prenom, $nom, $age)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this-> setAge($age);
    }
    //!Connexion avec le private $age
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
    //! délivrer l'age que posséde l'employée
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
//! Changement que on voudrait faire de l'age de l'employe1
$Employe1->setAge(50);
//!Demande au code de présenter la premiére ligne d'employe qui sera connecter à la ligne 27
$Employe1->presentation();

//!------------------------------------------------------------

//?Nouvelle classe nommé Patron, il va être extends pour prendre les ifos de la class employe
class Patron extends Employe
{
    //?Nouvelle propriété
    public $voiture;

   
    public function __construct ($prenom, $nom, $age, $voiture)
    {
        //?permet d'appeler les paramétres de la class Employe
        parent::__construct($prenom, $nom, $age);
        $this->voiture = $voiture;
    }

    //?Nouvelle function nommé rouler pour indiquer nom de voiture
    public function rouler() 
    {
        var_dump("Bonjour, je roule avec ma $this->voiture !");
    }
}
$Employe1 = new Employe ("Lior", "Chamla", 32);
$Employe2 = new Employe ("Bernard", "Tapis", 66);

$Employe1->presentation();

//? Nouvelle ligne nommé patron
$Patron = new Patron ("John", "Kerpes", 128, "Renault Tuning")
$Patron->rouler();
