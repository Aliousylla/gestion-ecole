<?php 

    class utile
    {
       public $name;
       public $infos;
       public $chemin;
       public $tmp_name;
       public $datafile;
       public $extension;
       public $taille;

        function __construct($name,$tmp_name,$datafile,$extension,$taille,$chemin,$infos)
        {
            $this->name=$name;
            $this->infos=$infos;
            $this->chemin=$chemin;
            $this->tmp_name=$tmp_name;
            $this->datafile=$datafile;
            $this->extension=$extension;
            $this->taille=$taille;
        }
        static function connexion()
    {
        $lien = new PDO('mysql:host=127.0.0.1;dbname=bdosbt;port=3306', "root", "", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        return $lien;
    }

    public static  function televerser($infos,$dossier="photos")
{
if (!is_dir($dossier)) {
    mkdir($dossier);
}

$name=$infos['name'];
$tmp_name=$infos['tmp_name'];
$newname=md5(time()."_".random_int(0,9999999));
$datafile=pathinfo($name);
$extension=strtolower($datafile['extension']);
// echo $extension;
$newname.=".$extension";
// echo $newname;

$chemin="$dossier/$newname";

$autorises=['png','jpeg','jpg','gif','pdf','webp'];
//on verifie si l'extension du fichier se trouve dans le tableau $autorises
if (! in_array($extension,$autorises)) {
die("Ce n'est pas une image");
}
$taille=filesize($tmp_name);
if ($taille>MAX) {
    die("fichier trop volunineux");
}
move_uploaded_file($tmp_name,$chemin);
return $chemin;
}


    }
    









?>