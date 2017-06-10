<?php

class Etudiant {

    private $num_etu;
    private $nom;
    private $prenom;
    private $admission;

    public function getNumEtu() {
        return $this->num_etu;
    }

    public function setNumEtu($numEtu) {
        $this->num_etu = $numEtu;
        return $this;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
        return $this;
    }

    public function getAdmission() {
        return $this->admission;
    }

    public function setAdmission($admission) {
        $this->admission = $admission;
        return $this;
    }

    public function getFiliere() {
        return $this->filiere;
    }

    public function setFiliere($filiere) {
        $this->filiere = $filiere;
        return $this;
    }

    public static function getEtudents() {
        $PDOInstance = MyPDO::getInstance();
        $req = $PDOInstance->prepare("SELECT * FROM etudiant");
        $req->execute();
        return $req->fetchAll(PDO::FETCH_CLASS, "Etudiant");
    }

    public static function ajouterEtudiant(Etudiant $etudiant) {
        $PDOInstance = MyPDO::getInstance();
        $req = $PDOInstance->prepare('INSERT INTO etudiant(num_etu, nom, prenom, admission, filiere) VALUES(:num_etu, :nom, :prenom, :admission, :filiere)');
        return $req->execute(
                        [
                            "num_etu" => $etudiant->getNumEtu(),
                            "nom" => $etudiant->getNom(),
                            "prenom" => $etudiant->getPrenom(),
                            "admission" => $etudiant->getAdmission(),
                            "filiere" => $etudiant->getFiliere()
                        ]
        );
    }

}
