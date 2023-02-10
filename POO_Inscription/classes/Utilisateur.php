<?php
 

 class Utilisateur{

    // Attributs
    private $_pseudo;
    private $_email;
    private $_password;

    // constructeur 
    public function __construct($pseudo, $email, $password){
        $this->_pseudo=$pseudo;
        $this->_email=$email;
        $this->_password=$password;

    }

    // Getter

    public function getPseudo() {
        return $this->_pseudo;
    }

    public function getEmail() {
        return $this->_email;
    }

    public function getPassword() {
        return $this->_password;
    }


    // Setter

    public function setPseudo($pseudo) {
        $this->_pseudo=$pseudo;
    }

    public function setEmail($email) {
        $this->_email=$email;
    }

    public function setPassword($password) {
        $this->_password=$password;
    }


    // Methodes


    public function enregistrer(){

        // connection bdd

        require('src/connection.php');

        // Ajouter un utilisateur
		$req = $bdd->prepare('INSERT INTO utilisateurs(pseudo, email, password) VALUES(?, ?, ?)');
		$req->execute([
            $this->getPseudo(),
            $this->getEmail(), 
            $this->getPassword()
        ]);



    }

    public function creerLesSessions(){

        $_SESSION['connect']=1;
        $_SESSION['pseudo'] = $this->getPseudo();
        $_SESSION['email'] = $this->getEmail();

    }




 }