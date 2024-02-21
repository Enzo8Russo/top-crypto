<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="../admin/table1_gestion.php">retour au tableau de bord</a> 	
	<hr>
<h1>gestion de nos cryptos</h1>
<p>ajouter ici une crypto</p>
<hr>
<form action="../admin/table1_new_valide.php" method="POST" enctype="multipart/form-data">
    Nom:<input type="text" name="crypto_nom"><br>
    Année:<input type="text" name="crypto_annee"><br>
    Prix:<input type="text" name="crypto_prix"><br>
    Volume totale:<input type="text" name="crypto_volume_totale"><br>
    Résumé:<input type="text" name="crypto_resumer"><br>
    Créateur:
    <select name="numauteur">
        <?php
        $mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'policeWW123.');
        $mabd->query('SET NAMES utf8;');
        $req = "SELECT * FROM createur";
        $resultat = $mabd->query($req);

    foreach ($resultat as $value) {
        echo '<option value="' . $value['createur_id'] . '">' . $value['createur_nom'] . '</option>';
    }
    ?>
</select><br>
Photo : <input type="file" name="crypto_img" required /><br />
<input type="submit" name="">
</form>

</tbody>
</table>
</body>
</html>