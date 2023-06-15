<?php 
include_once('etudiant.classe.php');
include_once('../public/Utils.php');
extract($_POST);
$chemin= utile::televerser($_FILES['photo'],$dossier="photos");
$etudiants = new etudiants($nom,$prenom,$matricule,$nationalite,$telephone,$email,$adresse,$date_naissance,$lieu_naissance,$passeport_cin,$chemin,$filiere,$niveau,$promo,$parente,$nom_parent,$prenom_parent,$adresse_parent,$telephone_parent,$email_parent);
$etudiants-> creat_etudiants('','','','','','','','','','','','','','','','','','','','');

header('location:index.php')

?>