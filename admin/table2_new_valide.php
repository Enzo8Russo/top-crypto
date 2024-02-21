<?php
$nom=$_POST['createur_nom'];
$prenom=$_POST['createur_prenom'];
$nationalite=$_POST['createur_nationalite'];
$numauteur=$_POST['numauteur'];

$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'policeWW123.');
$mabd->query('SET NAMES utf8;');

$req = 'INSERT INTO createur(createur_nom, createur_prenom, createur_nationalite) VALUES("'.$nom.'", "'.$prenom.'","'.$nationalite.'" )';
$resultat = $mabd->query($req);

header('Location: ../admin/table2_gestion.php');
