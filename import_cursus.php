<?php

require_once './include/MyPDO.class.php';
require_once './entite/Etudiant.class.php';
require_once './entite/Cursus.class.php';
require_once './include/WebPage.class.php';

$webPage = new WebPage();
//$webPage->ajouterBody();

$etudiant = new Etudiant();

$repertoireCSVEtudiant = $_FILES["cursus_etudiant"]["tmp_name"];
if (($handle = fopen($repertoireCSVEtudiant, "r")) !== false) {
    if (($data = fgetcsv($handle, 0, ";")) !== false) {
        $etudiant->setNumEtu($data[1]);
    }
    if (($data = fgetcsv($handle, 0, ";")) !== false) {
        $etudiant->setNom($data[1]);
    }
    if (($data = fgetcsv($handle, 0, ";")) !== false) {
        $etudiant->setPrenom($data[1]);
    }
    if (($data = fgetcsv($handle, 0, ";")) !== false) {
        $etudiant->setAdmission($data[1]);
    }
    if (($data = fgetcsv($handle, 0, ";")) !== false) {
        $etudiant->setFiliere($data[1]);
    }
    if (($data = fgetcsv($handle, 0, ";")) !== false) {
    }

    Etudiant::ajouterEtudiant($etudiant);

    $tabCursus = [];
    while (($data = fgetcsv($handle, 0, ";")) !== false) {
        $cursus = new Cursus();
        $cursus
            ->setNumEtu($etudiant->getNumEtu())
            ->setNumSem($data[1])
            ->setNomSem($data[2])
            ->setNomUe($data[3])
            ->setCatUe($data[4])
            ->setAffect($data[5])
            ->setSemUtt($data[6] === "Y" ? "Oui" : "Non")
            ->setProfil($data[7] === "Y" ? "Oui" : "Non")
            ->setCreditUe($data[8])
            ->setResultUE($data[9]);
        $tabCursus[] = $cursus;
    }
    fclose($handle);

    foreach ($tabCursus as $cursus){
        Cursus::ajouterCursus($cursus);
    }
}
header("Location: afficher_liste_cursus.php?num_etu={$etudiant->getNumEtu()}");