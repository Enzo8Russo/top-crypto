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
<p>Vous venez de modifier une crypto</p>
<?php
// Récupérer les données du formulaire
// Récupérer les données du formulaire
$id_crypto = $_POST['id_crypto'];
$crypto_nom = $_POST['crypto_nom'];
$crypto_prix = $_POST['crypto_prix'];
$crypto_volume_totale = $_POST['crypto_volume_totale'];
$numauteur = $_POST['numauteur'];
// Se connecter à la base de données
    $mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'policeWW123.');
        $mabd->query('SET NAMES utf8;');

$imageName = $_FILES["photo"]["name"];
if ($imageName != "") {
    // Vérification du format de l'image téléchargée
    $imageType = $_FILES["photo"]["type"];
    if (($imageType != "image/png") && ($imageType != "image/jpg") && ($imageType != "image/jpeg")) {
        echo '<p>Désolé, le type d\'image n\'est pas reconnu !';
        echo 'Seuls les formats PNG et JPEG sont autorisés.</p>'."\n";
        die();
    }
    
    // Création d'un nouveau nom pour cette image téléchargée
    // pour éviter d'avoir 2 fichiers avec le même nom
    $nouvelleImage = date("Y_m_d_H_i_s")."---".$_FILES["photo"]["name"];

    // Dépôt du fichier téléchargé dans le dossier /var/www/sae203/images/uploads
    if (is_uploaded_file($_FILES["photo"]["tmp_name"])) {
        if (!move_uploaded_file($_FILES["photo"]["tmp_name"], "../images/uploads/".$nouvelleImage)) {
            echo '<p>Problème avec la sauvegarde de l\'image, désolé...</p>'."\n";
            die();
        }
    } else {
        echo '<p>Problème : image non chargée...</p>'."\n";
        die();
    }
    
    $req = "UPDATE crypto SET crypto_nom = '$crypto_nom', crypto_prix = $crypto_prix, crypto_img = '$nouvelleImage' WHERE crypto_id = $numauteur";
} else {
    $req = "UPDATE crypto SET crypto_nom = '$crypto_nom', crypto_prix = $crypto_prix WHERE crypto_id = $numauteur";
}

$resultat = $mabd->query($req);

echo "La Crypto a bien été modifié.<br>";
echo '<a href="../admin/table1_gestion.php">Recommencer</a>';
?>

</body>
</html>
