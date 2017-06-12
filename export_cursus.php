<?php

require_once './include/MyPDO.class.php';
require_once './entite/Etudiant.class.php';
require_once './entite/Cursus.class.php';
require_once './include/WebPage.class.php';

$webPage = new WebPage();
//$webPage->ajouterBody();

$etudiant = Etudiant::getEtudiantDepuisNumEtu($_GET["num_etu"]);

echo <<<CSV
ID;{$etudiant->getNumEtu()};;;;;;;;
NO;{$etudiant->getNom()};;;;;;;;
PR;{$etudiant->getPrenom()};;;;;;;;
AD;{$etudiant->getAdmission()};;;;;;;;
FI;MSI;;;;;;;;
==;s_seq;s_label;sigle;categorie;affectation;utt;profil;credit;resultat

CSV;

$tabCursus = Cursus::getCursusPourEtudiant($etudiant);
foreach ($tabCursus as $cursus){
    /** @var Cursus $cursus **/
    $utt = $cursus->getSemUtt() == "Oui" ? "Y" : "N";
    $profil = $cursus->getProfil() == "Oui" ? "Y" : "N";
    echo <<<CSV
EL;{$cursus->getNumSem()};{$cursus->getNomSem()};{$cursus->getNomUe()};{$cursus->getCatUe()};{$cursus->getAffect()};{$utt},{$profil};{$cursus->getResultUE()};{$cursus->getCreditUe()}

CSV;

}

header("Content-type: text/csv");
header("Content-Disposition: attachment; filename={$etudiant->getPrenom()}{$etudiant->getNom()}.csv");