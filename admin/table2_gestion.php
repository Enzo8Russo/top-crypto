<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="../admin/">retour au site</a> 	
	<hr>
<h1>gestion de nos createurs</h1>
<p>pensez a proteger le dossier admin avec un htaccess :-) (C'est fait !)</p>
<hr>
<a href="../admin/table2_new_form.php">ajouter un createur</a>
<table border=1>
	<thead>
		<tr><td>Nom</td><td>prenom</td><td>nationalite</td><td>supprimer</td><td>modifier</td></tr>
	</thead>
	<tbody>
<?php
$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'policeWW123.');
$mabd->query('SET NAMES utf8;');
$req = "SELECT * FROM createur";
$resultat = $mabd->query($req);

foreach ($resultat as $value) {
    echo '<tr>' ;
    echo '<td>'.$value['createur_nom'] . '</td>';
    echo '<td>' . $value['createur_prenom'] . '</td>';
    echo '<td>' . $value['createur_nationalite'] . '</td>';
    echo '<td><a href="../admin/table2_delete.php?num=' . $value['createur_id'] . '">supprimer</a></td>';
    echo '<td> <a href="../admin/table2_update_form.php?num=' . $value['createur_id'] . '" > modifier </a> </td>';

    echo '</tr>';
}
?>
</tbody>
</table>
</body>
</html>