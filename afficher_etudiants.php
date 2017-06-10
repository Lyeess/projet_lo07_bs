<?php

require_once './include/MyPDO.class.php';
require_once './entite/Etudiant.class.php';
require_once './include/WebPage.class.php';

$webPage = new WebPage();
$webPage->ajouterBody('
        <h1>Etudiant</h1>
            <table class="table table-stripped table-hover">
                <thead>
                    <tr>
                        <th>Numéro étudiant</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Admission</th>
                        <th>Filliere</th>
                    </tr>
                </thead>
                <tbody>
                   ');

foreach (Etudiant::getEtudents() as $etudiant) {
    $webPage->ajouterBody("<tr>
                            <td>{$etudiant->getNumEtu()}</td>
                            <td>{$etudiant->getNom()}</td>
                            <td>{$etudiant->getPrenom()}</td>
                            <td>{$etudiant->getAdmission()}</td>
                            <td>{$etudiant->getFiliere()}</td>
                            </tr>
                         ");
}
$webPage->ajouterBody('
                </tbody>
            </table>');

$webPage->rendu();
