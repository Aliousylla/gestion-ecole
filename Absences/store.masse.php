<?php 
include_once "absence.classe.php";
extract($_POST);//$matiere, $user_id[]
// print_r($user_id);
foreach ($etudiants_id as $u) {
    $absence = new absences($su,$seance_id,'non');
    $absence->creat_absences();
    
}
// header("location:index.php")


?>