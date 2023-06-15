<?php 

$id=$_GET['id'];
try {
    $lien = new PDO('mysql:host=127.0.0.1;dbname=carteosbt;port=3306', "root", "", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    $r = $lien->prepare("delete from etudiants where id =?");
    $r->execute([$id]);
      header("location:etudiants.php?e=yes");
  
} catch (\Throwable $e) {
    echo $e->getMessage();
}


?>