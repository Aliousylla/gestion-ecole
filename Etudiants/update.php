<?php 
// extract($_POST);
// $name=$_FILES ['photo']['name'];
// $tmp_name=$_FILES['photo']['tmp_name'];
// $chemin="photos/$name";
// move_uploaded_file($tmp_name,$chemin);
// try {
//     $lien = new PDO('mysql:host=127.0.0.1;dbname=carteosbt;port=3306', "root", "", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
//     $r = $lien->prepare("update etudiants set matricul=?,cp=?,nom=?,prenom=?,nationalite=?,adresse=?,tel=?,niveau=?,filiere=?,anne=?,chemin=?,email=?,datenaissance=?,lieunaissance=? where id=?");
//     $r->execute([$matricul,$cp,$nom,$prenom,$nationalite,$adresse,$tel,$niveau,$filiere,$anne,$chemin,$email,$datenaissance,$lieunaissance,$id]);
//      header("location:etudiants.php?e=yes");
    
// } catch (\Throwable $e) {
//     echo $e->getMessage();
// }
// $chemin= utile::televerser($_FILES['photo'],$dossier="photos");
// $etudiants = new etudiants($nom,$prenom,$matricule,$nationalite,$telephone,$email,$adresse,$date_naissance,$lieu_naissance,$passeport_cin,$chemin,$filiere,$niveau,$promo,$parente,$nom_parent,$prenom_parent,$adresse_parent,$telephone_parent,$email_parent);
// $etudiants-> creat_etudiants('','','','','','','','','','','','','','','','','','','','');
// $etudiants->update_etudiants($etudiants_id);
// include_once('etudiant.classe.php');
// include_once('../public/Utils.php');
// extract($_POST);
// $etudiants_id = $_POST['etudiants_id'];
// $etudiants_id->update_etudiants($etudiants_id);
// header('location:index.php');
include_once 'etudiant.classe.php';

// Vérifier si l'identifiant de l'étudiant a été envoyé dans le formulaire
// if (isset($_POST['etudiants_id'])) {
//     $etudiant=$_POST['etudiants_id'];
//     // Appeler la méthode update_etudiants() ?  
//     $etudiant->update_etudiants($_POST['etudiants_id']);
// }



// require_once 'EtudiantDAO.php';

if (isset($_POST['etudiants_id'])) {
    // Récupérer les nouvelles valeurs des champs du formulaire
    // $nom = $_POST['nom'];
    // $prenom = $_POST['prenom'];
    // $email = $_POST['email'];
    // $adresse = $_POST['adresse'];
    // // ... récupérer les autres champs de formulaire ici ...
    extract($_POST);
    // Mettre à jour les informations de l'étudiant dans la base de données
    $etudiants_id = $_POST['etudiants_id'];
    etudiants::update_etudiants($etudiants_id, );
}
?>