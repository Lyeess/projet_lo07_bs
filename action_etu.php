<?php
// on se connecte à la bdd
try
{
$bdd = new PDO('mysql:host=localhost;dbname=projet_lo07;charset=utf8', 'root', '');
echo 'Connexion à la BDD réussie';
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
/*
// On ajoute une entrée dans la table etudiant
$bdd->exec('INSERT INTO etudiant(num_etu,nom,prenom,admission,filiere
) '
        . 'VALUES(12345, \'Croissile\', \'Eric\', \'TC\',\'MPL\')');


*/
var_dump($_POST);
$req = $bdd->prepare('INSERT INTO etudiant(num_etu,nom,prenom,admission,filiere)'
        . ' VALUES(:num_etu, :nom, :prenom, :admission, :filiere)');
$req->execute(array(
	'num_etu'=> $_POST['numero'],
        'nom'=> $_POST['nom'],
        'prenom'=> $_POST['prenom'],
        'admission'=> $_POST['admission'],
        'filiere'=> $_POST['filiere'],
	));

?>