<?php
require_once './include/MyPDO.class.php';
require_once './include/WebPage.class.php';
require_once './entite/Cursus.class.php';

$webPage = new WebPage();
$webPage->ajouterBody(
    <<<HTML
<h1> Ajouter un cursus </h1>
<form method="POST" action="ajouter_cursus_action.php">
    <div class="form-group">
        <label> Numéro de semestre UTT </label>
        <input type="text" class="form-control" name="num_sem"/>
    </div>
    <div class="form-group">
        <label> Nom du semestre </label>
        <input type="text" class="form-control" name="nom_sem"/>
    </div>
    <div class="form-group">
        <label> Nom de l'UE</label>
        <input type="text" class="form-control" name="nom_ue"/>
    </div>
    <div class="form-group">
        <label>Catégorie de l'UE </label>
        <select name="cat_ue">
            <option>CS</option>
            <option>TM</option>
            <option>EC</option>
            <option>ME</option>
            <option>CT</option>
            <option>HP</option>
            <option>ST</option>
            <option>NPML</option>
        </select>
    </div>
    <div class="form-group">
        <label> Affectation</label>
        <input type='radio' name="affect" value="TC"> TC
        <input type='radio' name="affect" value="TCBR"> TCBR
        <input type='radio' name="affect" value="FCBR"> FCBR
        <input type='radio' name="affect" value="FCBR"> BR
        <input type='radio' name="affect" value="FCBR"> UTT
    </div>
    <div class="form-group">
        <label> Semestre effectué à l'UTT</label>
        <input type='radio' name="sem_utt" value="oui">Oui
        <input type='radio' name="sem_utt" value="non">Non
    </div>
    <div class="form-group">
        <label>UE correspond au profil</label>
        <input type='radio' name="profil" value="oui">Oui
        <input type='radio' name="profil" value="non">Non
    </div>
    <div class="form-group">
        <label>Résultat obtenu à l'UE </label>
        <select name="resultat">
            <option>A</option>
            <option>B</option>
            <option>C</option>
            <option>D</option>
            <option>E</option>
            <option>F</option>
            <option>FX</option>
            <option>ABS</option>
            <option>ADM</option>
            <option>RES</option>
        </select>

    </div>

    <div class="form-group">
        <label> Crédits obtenus </label>
        <input type="text" name="credit"/>
    </div>
    
    <input type="hidden" name="num_etu" value="{$_GET["num_etu"]}">
    <div class="form-group">
        <input type="submit" class="btn btn-success btn-md">

    </div>
    <div class="form-group">
        <input type="reset" class="btn btn-warning btn-md"/>
    </div>
</form>
HTML
);

$webPage->rendu();
