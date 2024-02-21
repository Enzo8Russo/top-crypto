<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<a href="../admin/table1_gestion.php">Retour au tableau de bord</a>     
    <hr>
<h1>Gestion de nos cryptos</h1>
<p>Modification d'une crypto</p>
<hr>
<?php
// Récupérer l'ID de l'album à modifier depuis l'URL
$crypto_id = $_GET['num'];
// Se connecter à la base de données
$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'policeWW123.');
$mabd->query('SET NAMES utf8;');

// Récupérer les informations de l'album correspondant à l'ID passé dans l'URL
$req_crypto = "SELECT * FROM crypto WHERE crypto_id = " . $crypto_id;
$res_crypto = $mabd->query($req_crypto);
$crypto = $res_crypto->fetch(PDO::FETCH_ASSOC);

// Récupérer la liste des auteurs pour le menu déroulant
$req_createur = "SELECT * FROM createur";
$res_createur = $mabd->query($req_createur);

// Afficher le formulaire de modification pré-rempli avec les informations de l'album
?>

<form method="POST" action="../admin/table1_update_valide.php" enctype="multipart/form-data">
    <input type="hidden" name="id_crypto" value="<?php echo $crypto_id; ?>">
    nom : <input type="text" name="crypto_nom" value="<?php echo $crypto['crypto_nom']; ?>"><br>
    Prix : <input type="text" name="crypto_prix" value="<?php echo $crypto['crypto_prix']; ?>"><br>
    Volume Totale : <input type="text" name="crypto_volume_totale" value="<?php echo $crypto['crypto_volume_totale']; ?>"><br>
    Auteur :
    <select name="numauteur">
        <?php while ($createur = $res_createur->fetch(PDO::FETCH_ASSOC)) {
            $selected = ($createur['createur_id'] == $crypto['_auteur_id']) ? "selected" : "";
            echo "<option value=\"" . $createur['createur_id'] . "\" " . $selected . ">" . $createur['createur_nom'] . "</option>";
        } ?>
    </select><br>
    Photo : <input type="file" name="photo" required /><br />
    <input type="submit" value="Modifier">
</form>
</body>
</html>
