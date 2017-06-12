<?php

require_once './include/MyPDO.class.php';
require_once './entite/Etudiant.class.php';
require_once './include/WebPage.class.php';

$webPage = new WebPage();
$webPage->ajouterBody(
    <<<HTML
        <h1>Liste des étudiants</h1>
        <form action="import_cursus.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
            <input type="file" name="cursus_etudiant">
            <input class="btn btn-success btn-xs" type="submit">
        </form>
        <table class="table table-stripped table-hover">
            <thead>
                <tr>
                    <th>Numéro étudiant</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Admission</th>
                    <th>Filliere</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
HTML
);

foreach (Etudiant::getEtudents() as $etudiant) {
    $webPage->ajouterBody(
        <<<HTML
    <tr>
        <td>{$etudiant->getNumEtu()}</td>
        <td>{$etudiant->getNom()}</td>
        <td>{$etudiant->getPrenom()}</td>
        <td>{$etudiant->getAdmission()}</td>
        <td>{$etudiant->getFiliere()}</td>
        <td>
            <a class="btn btn-info btn-xs" href="afficher_liste_cursus.php?num_etu={$etudiant->getNumEtu()}">Afficher les cursus</a>
            <a class="btn btn-success btn-xs" href="export_cursus.php?num_etu={$etudiant->getNumEtu()}">Exporter les cursus</a>
        </td>
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
