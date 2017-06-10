<?php

require_once './include/MyPDO.class.php';
require_once './include/WebPage.class.php';
require_once './entite/Etudiant.class.php';

$PDOInstance = MyPDO::getInstance();

$etudiant = new Etudiant();
$etudiant
        ->setNumEtu($_POST["num_etu"])
        ->setNom($_POST["nom"])
        ->setPrenom($_POST["prenom"])
        ->setAdmission($_POST["admission"])
        ->setFiliere($_POST["filiere"]);

$erreur = Etudiant::ajouterEtudiant($etudiant);

$webPage = new WebPage();
$webPage->ajouterBody("<h4>" . ($erreur ? "Un étudiant à bien été ajouté." : "Un erreur s'est produite."));
$webPage->rendu();
