<?php 
  class UtilisateurModel {
    private $id;
    private $email;
    private $mdp;

    public function __construct($id,$email, $mdp) {
        $this->id = $id;
        $this->email = $email;
        $this->mdp = $mdp;
    }

    // Getter pour $id
    public function getId() {
        return $this->id;
    }

    // Setter pour $id
    public function setId($id) {
        $this->id = $id;
    }

    // Getter pour $email
    public function getEmail() {
        return $this->email;
    }

    // Setter pour $email
    public function setEmail($email) {
        $this->email = $email;
    }

    // Getter pour $mdp
    public function getMdp() {
        return $this->mdp;
    }

    // Setter pour $mdp
    public function setMdp($mdp) {
        $this->mdp = $mdp;
    }
}
