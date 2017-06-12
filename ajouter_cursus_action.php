<?php
require_once './include/MyPDO.class.php';
require_once './entite/Cursus.class.php';

$PDOInstance = MyPDO::getInstance();

$cursus = new Cursus();
$cursus
    ->setNumEtu($_POST['num_etu'])
    ->setNumSem($_POST['num_sem'])
    ->setNomSem($_POST['nom_sem'])
    ->setNomUe($_POST['nom_ue'])
    ->setCatUe($_POST['cat_ue'])
    ->setAffect($_POST['affect'])
    ->setSemUtt($_POST['sem_utt'])
    ->setProfil($_POST['profil'])
    ->setResultUE($_POST['resultat'])
    ->setCreditUE($_POST['credit']);

Cursus::ajouterCursus($cursus);

header("Location: afficher_liste_cursus.php?num_etu={$cursus->getNumEtu()}");