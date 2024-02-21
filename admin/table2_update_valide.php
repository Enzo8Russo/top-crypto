<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="../admin/table2_gestion.php">Retour au tableau de bord</a> 	
	<hr>
<h1>Gestion de nos createurs</h1>
<p>Modification d'un createur</p>
<hr>
<p>Vous venez de modifier un createur</p>
<?php
// Récupérer les données du formulaire
// Récupérer les données du formulaire
$id_createur = $_POST['id_createur'];
$createur_nom = $_POST['createur_nom'];
$createur_prenom = $_POST['createur_prenom'];
$createur_nationalite = $_POST['createur_nationalite'];
// Se connecter à la base de données
    $mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'policeWW123.');
        $mabd->query('SET NAMES utf8;');

    $req = "UPDATE createur SET createur_nom = '$createur_nom', createur_prenom = '$createur_prenom', createur_nationalite = '$createur_nationalite' WHERE createur_id = $id_createur";

$resultat = $mabd->query($req);

echo "Le Createur a bien été modifié.<br>";
echo '<a href="../admin/table2_gestion.php">Recommencer</a>';
?>

</body>
</html>
