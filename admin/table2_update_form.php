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
<?php
// Récupérer l'ID de l'album à modifier depuis l'URL
$createur_id = $_GET['num'];
// Se connecter à la base de données
$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'policeWW123.');
$mabd->query('SET NAMES utf8;');

// Récupérer les informations de l'album correspondant à l'ID passé dans l'URL
$req_createur = "SELECT * FROM createur WHERE createur_id = " . $createur_id;
$res_createur = $mabd->query($req_createur);
$createur = $res_createur->fetch(PDO::FETCH_ASSOC);

// Récupérer la liste des auteurs pour le menu déroulant
$req_crypto = "SELECT * FROM crypto";
$res_crypto = $mabd->query($req_crypto);

// Afficher le formulaire de modification pré-rempli avec les informations de l'album
?>

<form method="POST" action="../admin/table2_update_valide.php" enctype="multipart/form-data">
    <input type="hidden" name="id_createur" value="<?php echo $createur_id; ?>">
    nom : <input type="text" name="createur_nom" value="<?php echo $createur['createur_nom']; ?>"><br>
    Prenom : <input type="text" name="createur_prenom" value="<?php echo $createur['createur_prenom']; ?>"><br>
    Nationalite : <input type="text" name="createur_nationalite" value="<?php echo $createur['createur_nationalite']; ?>"><br>
    <input type="submit" value="Modifier">
</form>
</body>
</html>
