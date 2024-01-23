<?php 
class UtilisateurDAO{
    private $pdo;
    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }
    public function connect(UtilisateurModel $utilisateur){
       try{
            $stmt=$this->pdo->prepare("SELECT * FROM utilisateurs WHERE email=? AND mdp=?");
            $stmt->execute([$utilisateur->getEmail(),$utilisateur->getMdp()]);
            $row=$stmt->fetch(PDO::FETCH_ASSOC);
            if($row){
               $_SESSION['user']=$utilisateur->getEmail();
               header("location: chat.php");
            }
              return true;
       }catch(PDOException $e){
        return false;
    }
    }
}
