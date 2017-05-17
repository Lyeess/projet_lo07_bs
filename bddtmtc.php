<?php
    try
{
$bdd = new PDO('mysql:host=localhost;dbname=projet_LO07;charset=utf8', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
var_dump($_POST);
$req = $bdd->prepare('INSERT INTO cursus(num_etu, num_sem, nom_sem, nom_ue, cat_ue, affect, sem_utt, profil, result_ue, credit_ue) VALUES(:numEtu, :numSem, :nomSem, :nomUE, :typeUE, :affect,:semUTT,:semUTT, :profil, :resultat,:credit)');
$req->execute(array(
'numEtu'=>$_POST['numEtu'],
'numSem'=>$_POST['numSem'],
'nomSem'=>$_POST['nomSem'],
'nomUE'=>$_POST['nomUE'],
'typeUE'=>$_POST['typeUE'],
'affect'=>$_POST['affect'],
'semUTT'=>$_POST['semUTT'],
'profil'=>$_POST['profil'],
'resultat'=>$_POST['resultat'],
'credit'=>$_POST['credit']
));
