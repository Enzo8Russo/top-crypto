<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="../admin/">retour au site</a> 	
	<hr>
<h1>gestion de nos cryptos</h1>
<p>pensez a proteger le dossier admin avec un htaccess :-) (c'est fait normalement...)</p>
<hr>
<a href="../admin/table1_new_form.php">ajouter une crypto</a>
<table border=1>
	<thead>
		<tr><td>Nom</td><td>Annee</td><td>Prix</td><td>Image</td><td>Volume Totale</td><td>Resumer</td><td>supprimer</td><td>modifier</td></tr>
	</thead>
	<tbody>
<?php
$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'policeWW123.');
$mabd->query('SET NAMES utf8;');
$req = "SELECT * FROM crypto";
$resultat = $mabd->query($req);

foreach ($resultat as $value) {
    echo '<tr>' ;
    echo '<td>'.$value['crypto_nom'] . '</td>';
    echo '<td>' . $value['crypto_annee'] . '</td>';
    echo '<td>' . $value['crypto_prix'] . ' €</td>';
    echo '<td><img src="../images/uploads/' . $value['crypto_img'] . '"width="75"></td>';
    echo '<td>' . $value['crypto_volume_totale'] . '</td>';
    echo '<td>' . $value['crypto_resumer'] . '</td>';
    echo '<td><a href="../admin/table1_delete.php?num=' . $value['crypto_id'] . '">supprimer</a></td>';
    echo '<td> <a href="../admin/table1_update_form.php?num=' . $value['crypto_id'] . '" > modifier </a> </td>';

    echo '</tr>';
}
?>
</tbody>
</table>
</body>
</html>