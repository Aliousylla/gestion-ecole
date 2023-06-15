<?php 
define("MAX",8000000);
function connecter()
{
    $lien = new PDO('mysql:host=127.0.0.1;dbname=carteosbt;port=3306', "root", "", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    return $lien;
}

function ajouter_etudiant($matricul,$np,$nom,$prenom,$nationalite,$adresse,$tel,$niveau,$filiere,$annee,$chemin,$email,$datenaissance,$lieunaissance)
{

    try {
       $lien= connecter();
        $r = $lien->prepare("INSERT INTO etudiants(matricul,np,nom,prenom,nationalite,adresse,tel,niveau,filiere,annee,chemin,email,datenaissance,lieunaissance) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $r->execute([$matricul,$np,$nom,$prenom,$nationalite,$adresse,$tel,$niveau,$filiere,$annee,$chemin,$email,$datenaissance,$lieunaissance]);
    } catch (\Throwable $e) {
        echo $e->getMessage();
    }
}


function televerser($chemin,$dossier="photos")
{
if (!is_dir($dossier)) {
    mkdir($dossier);
}

$name=$_FILES['chemin']['name'];
$tmp_name=$_FILES['chemin']['tmp_name'];
$newname=md5(time()."_".random_int(0,9999999));
$datafile=pathinfo($name);
$extesion=strtolower($datafile['extension']);
// echo $extesion;
$newname.=".$extesion";
// echo $newname;

$chemin="$dossier/$newname";

$autorises=['png','jpeg','jpg','gif','pdf'];
//on verifie si l'extension du fichier se trouve dans le tableau $autorises
if (! in_array($extesion,$autorises)) {
die("Ce n'est pas une image");
}
$taille=filesize($tmp_name);
echo "la taille du fichier est $taille";
if ($taille>MAX) {
    die("fichier trop volunineux");
}
move_uploaded_file($tmp_name,$chemin);
return $chemin;
}

function all($table)
{
    try {
       $lien= connecter();
        $r = $lien->prepare("select * from $table");
        $r->execute();
        $etudiants=$r->fetchAll();
        return $etudiants;
    } catch (\Throwable $e) {
        echo $e->getMessage();
    }
}