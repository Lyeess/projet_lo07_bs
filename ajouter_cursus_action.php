<?php
require_once './include/MyPDO.class.php';

$PDOInstance = MyPDO::getInstance();


$req = $PDOInstance->prepare('INSERT INTO cursus(num_etu, num_sem, nom_sem, nom_ue, cat_ue, affect, sem_utt, profil, result_ue, credit_ue) VALUES(?,?,?,?,?,?,?,?,?,?)');
$req->execute([
$_GET['numEtu'],
$_GET['numSem'],
$_GET['nomSem'],
$_GET['nomUE'],
$_GET['typeUE'],
$_GET['affect'],
$_GET['semUTT'],
$_GET['profil'],
$_GET['resultat'],
$_GET['credit']]


);


    


/**
$mysqli = new mysqli("localhost", "root", "", "projet_lo07");
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
else 
    echo('Connexion reussi');

$result = $mysqli->query('INSERT INTO cursus(num_etu, num_sem, nom_sem, nom_ue, cat_ue, affect, sem_utt, profil, result_ue, credit_ue) VALUES (\'12345\',\'1\',\'TC4\',\'NF19\',\'TM\',\'TCBR\',\'y\',\'y\',\'C\',\'6\')');
if (!$result) {
    die('Requête invalide : ' . $mysqli->error);
}
else ('Requête réalisée');
?>
 * **/
 