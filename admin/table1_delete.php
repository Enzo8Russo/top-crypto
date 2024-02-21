<!DOCTYPE html>
<html>
<head>
    <title>Suppression d'une crypto</title>
</head>
<body>
    <a href="../admin/table1_gestion.php">Retour au tableau de bord</a>
    <hr>
    <h1>Gestion de nos cryptos</h1>
    <hr>

    <?php
    // Récupérer dans l'URL l'ID de l'album à supprimer
    $crypto_id = $_GET['num'];

    // Se connecter à la base de données
    $mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'policeWW123.');
        $mabd->query('SET NAMES utf8;');

    // Générer la requête de suppression de l'album dont l'ID est passé dans l'URL
    $req = 'DELETE FROM crypto WHERE crypto_id = ' . $crypto_id;

    // Exécuter la requête de suppression
    $resultat = $mabd->query($req);

    echo '<h2>Vous venez de supprimer la crypto numéro ' . $crypto_id . '</h2><br>';
    echo '<a href="../admin/table1_gestion.php">Retour</a>';
    ?>
</body>
</html>
