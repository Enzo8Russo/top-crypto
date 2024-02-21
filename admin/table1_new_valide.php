<?php
$nom=$_POST['crypto_nom'];
$annee=$_POST['crypto_annee'];
$prix=$_POST['crypto_prix'];
$volume_totale=$_POST['crypto_volume_totale'];
$resumer=$_POST['crypto_resumer'];
$numauteur=$_POST['numauteur'];

$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'policeWW123.');
$mabd->query('SET NAMES utf8;');

//vérification du format de l'image téléchargée
$imageType=$_FILES["crypto_img"]["type"];
if ( ($imageType != "image/png") &&
    ($imageType != "image/jpg") &&
    ($imageType != "image/jpeg") ) {
        echo '<p>Désolé, le type d\'image n\'est pas reconnu !';
        echo 'Seuls les formats PNG et JPEG sont autorisés.</p>'."\n";
        die();
}

//creation d'un nouveau nom pour cette image téléchargée
// pour éviter d'avoir 2 fichiers avec le même nom
$nouvelleImage = date("Y_m_d_H_i_s")."---".$_FILES["crypto_img"]["name"];

// dépot du fichier téléchargé dans le dossier /var/www/sae203/images/uploads
if(is_uploaded_file($_FILES["crypto_img"]["tmp_name"])) {
    if(!move_uploaded_file($_FILES["crypto_img"]["tmp_name"], 
    "../images/uploads/".$nouvelleImage)) {
        echo '<p>Problème avec la sauvegarde de l\'image, désolé...</p>'."\n";
        die();
    }
} else {
    echo '<p>Problème : image non chargée...</p>'."\n";
    die();
}

$req = 'INSERT INTO crypto(crypto_nom, crypto_annee, crypto_prix, crypto_img, crypto_volume_totale, crypto_resumer, _auteur_id) VALUES("'.$nom.'", "'.$annee.'","'.$prix.'", "'. $nouvelleImage .'", "'.$volume_totale.'", "'.$resumer.'", '.$numauteur.' )';
$resultat = $mabd->query($req);

header('Location: ../admin/table1_gestion.php');
