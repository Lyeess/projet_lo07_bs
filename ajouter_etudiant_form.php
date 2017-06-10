<?php

require_once './include/WebPage.class.php';
$webPage = new WebPage();
$webPage->ajouterBody(
        <<<HTML
<h1>Ajouter un étudiant</h1>
<form method = "post" action = "ajouter_etudiant_action.php">
    <div class="form-group">
        <label>Numéro de carte d'étudiant</label>
        <input class="form-control" type="text" name="num_etu"/>
    </div>

    <div class="form-group">
        <label>Nom</label>
        <input class="form-control" type="text" name="nom"/>
    </div>

    <div class="form-group">
        <label>Prénom</label>

        <input class="form-control" type="text" name="prenom"/>
    </div>

    <div class="form-group">
        <label>Admission</label>

        <select name='admission'>
            <option>TC</option>
            <option>BR</option>
        </select>
    </div>

    <div class="form-group">
        <label>Filière</label>

        <select name='filiere'>
            <option>?</option>
            <option>MPL</option>
            <option>MSI</option>
            <option>MRI</option>
            <option>LIB</option>
        </select>
    </div>

    <div class="form-group">
        <input type="submit"/>
    </div>
    <div class="form-group">
        <input type="reset"/>
    </div>

</form>
HTML
);
$webPage->rendu();
