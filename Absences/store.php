<?php 
include_once "absence.classe.php";
extract($_POST);
$absence = new absences($seance_id,$etat);
$absence->creat_absences('','');

header("location:index.php")


?>