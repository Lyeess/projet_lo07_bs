<?php
require_once './include/MyPDO.class.php';
require_once './entite/Cursus.class.php';

$PDOInstance = MyPDO::getInstance();

$cursus = Cursus::getCursusDepuisNumCursus($_GET["num_cursus"]);
Cursus::supprimerCursus($cursus);

header("Location: afficher_liste_cursus.php?num_etu={$cursus->getNumEtu()}");