<?php 
// extract($_POST);
// $name=$_FILES ['photo']['name'];
// $tmp_name=$_FILES['photo']['tmp_name'];
// $chemin="img/$name";
// move_uploaded_file($tmp_name,$chemin);
//  try {
//     $lien = new PDO('mysql:host=127.0.0.1;dbname=carteosbt;port=3306', "root", "", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
//      $r = $lien->prepare("INSERT INTO etudiants(matricul,np,nom,prenom,nationalite,adresse,tel,niveau,filiere,annee,chemin,email,datenaissance,lieunaissance) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
//      $r->execute([$matricul,$np,$nom,$prenom,$nationalite,$adresse,$tel,$niveau,$filiere,$annee,$chemin,$email,$datenaissance,$lieunaissance]);
//  } catch (\Throwable $e) {
//      die( $e->getMessage());
//  }
extract($_POST);
$name=$_FILES ['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];
$chemin="photos/$name";
move_uploaded_file($tmp_name,$chemin);

try {
    $connection =  new PDO('mysql:host=127.0.0.1;dbname=carteosbt;port=3306', "root", "", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
     $sql = "INSERT INTO etudiants(matricul,cp,nom,prenom,nationalite,adresse,tel,niveau,filiere,anne,chemin,email,datenaissance,lieunaissance) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = $connection->prepare($sql);
    $stmt->execute([$matricul,$cp,$nom,$prenom,$nationalite,$adresse,$tel,$niveau,$filiere,$anne,$chemin,$email,$datenaissance,$lieunaissance]);
    header("location:etudiants.php?e=yes");
} catch (\Throwable $th) {
    die( $th->getMessage()) ;
    
}