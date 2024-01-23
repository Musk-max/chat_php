<?php
class UtilisateurController {
    private $utilisateurDAO;

    public function __construct(UtilisateurDAO $utilisateurDAO) {
        $this->utilisateurDAO= $utilisateurDAO;
    }
    public function index() {
        // Inclure la vue pour afficher le formulaire d'ajout de contact
            include('../views/index.php'); 
        }

    public function connect() {


        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Récupérer les données du formulaire
            $email = $_POST['email'];
            $mdp = $_POST['mdp'];
        

            // Valider les données du formulaire (ajoutez des validations si nécessaire)

            // Créer un nouvel objet ContactModel avec les données du formulaire
            $utilisateur= new UtilisateuModel(0,$email, $mdp);

            // Appeler la méthode du modèle (ContactDAO) pour ajouter le contact
            if ($this->utilisateurDAO->connect($utilisateur)) {
                // Rediriger vers la page d'accueil après l'ajout
                header('Location:chat.php');
                exit();
            } else {
                // Gérer les erreurs d'ajout de contact
                echo "Erreur de connexion";
            }

    }
    }
}

    require_once("../config/config.php");
    require_once("../classes/models/UtilisateurModel.php");
    require_once("../classes/dao/UtilisateurDAO.php");
    $UtilisateurDAO=new UtilisateurDAO($pdo);
    $controller=new UtilisateurController($UtilisateurDAO);
    if(!isset($_POST['button_con'])){
    $controller->index();
    }else{
        $controller->connect();
    }



?>

