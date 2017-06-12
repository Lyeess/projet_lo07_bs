<?php

require_once './include/MyPDO.class.php';
require_once './entite/Etudiant.class.php';
require_once './entite/Cursus.class.php';
require_once './include/WebPage.class.php';

$etudiant = Etudiant::getEtudiantDepuisNumEtu($_GET["num_etu"]);

$webPage = new WebPage();
$webPage->ajouterBody(
    <<<HTML
        <h1>Liste des éléments de formation de l'étudiant n°{$etudiant->getNumEtu()} {$etudiant->getNom()} {$etudiant->getPrenom()}</h1>
        <a href="ajouter_cursus_form.php?num_etu={$etudiant->getNumEtu()}" class="btn btn-primary btn-sm">Ajouter un cursus</a>
            <table class="table table-stripped table-hover">
                <thead>
                    <tr>
                        <th>Numéro de semestre</th>
                        <th>Nom du semestre</th>
                        <th>Nom de de l'UT</th>
                        <th>Catégorie de l'UE</th>
                        <th>Affectation</th>
                        <th>UE à l'UTT</th>
                        <th>UE profil?</th>
                        <th>Resutat</th>
                        <th>Crédit</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
HTML
);
foreach (Cursus::getCursusPourEtudiant($etudiant) as $cursus) {
    $webPage->ajouterBody(
        <<<HTML
    <tr>
        <td>{$cursus->getNumSem()}</td>
        <td>{$cursus->getNomSem()}</td>
        <td>{$cursus->getNomUE()}</td>
        <td>{$cursus->getCatUe()}</td>
        <td>{$cursus->getAffect()}</td>
        <td>{$cursus->getSemUTT()}</td>
        <td>{$cursus->getProfil()}</td>
        <td>{$cursus->getResultUE()}</td>
        <td>{$cursus->getCreditUE()}</td>
        <td><a class="btn btn-danger btn-xs" href="supprimer_cursus_action.php?num_cursus={$cursus->getNumCursus()}"><i class="fa fa-trash" aria-hidden="true"></i></a> </td>
    </tr>
HTML
    );
}

$webPage->ajouterBody(
    <<<HTML
                </tbody>
            </table>
HTML
);

$webPage->rendu();
