<?php 
// define("MAX",8000000);
include_once('../public/Utils.php');
class Commentaire{

    public $etudiants_id;
    public $detais;
    public $date_commentaire;


    function __construct($etudiants_id,$detais,$date_commentaire)
     {
        $this->etudiants_id = $etudiants_id;

        $this->detais = $detais;
        $this->date_commentaire = $date_commentaire;
        

     }    
        
public function creat_commentaire( )
{

    try {
       $lien = utile::connexion();
        $r = $lien->prepare("INSERT INTO commentaires(etudiants_id,detais,date_commentaire) VALUES(?,?,?)");
        $r->execute([$this->etudiants_id,$this->detais,$this->date_commentaire]);
    } catch (\Throwable $e) {
        echo $e->getMessage();
    }
}
public static function commentaire_all($etudiants_id)
    {
         try {
            $lien=utile::connexion();
            $r = $lien->prepare("SELECT e.nom,e.prenom,e.chemin, c.date_commentaire,c.details FROM etudiants e 
            LEFT JOIN commentaires c ON e.etudiants_id=c.etudiants_id
            WHERE e.etudiants_id =?" );
            $r->execute([$etudiants_id]);
            $commentaires = $r->fetch();
            return $commentaires;
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
       
    }
    public static function commentaire_etudiant($etudiants_id)
    {
        try {
            $lien=utile::connexion();
            $r = $lien->prepare("SELECT e.*,c.*FROM  commentaires c
            LEFT JOIN etudiants e ON e.etudiants_id=c.etudiants_id
            WHERE e.etudiants_id =? order by c.date_commentaire desc" );
            $r->execute([$etudiants_id]);
            $commentaire_etudiant = $r->fetchAll();
            return $commentaire_etudiant;
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
    }
public static function find()
{
    try {
       $lien=utile::connexion();
        $r = $lien->prepare("SELECT  COUNT(etudiants_id) FROM commentaires c WHERE etudiants_id =?");
        $r->execute();
        $nbr_commentaire=$r->fetchAll();
        return $nbr_commentaire;
    } catch (\Throwable $e) {
        echo $e->getMessage();
    }
}


public static function nbr_commentaire($etudiants_id)
    {
         try {
            $lien=utile::connexion();
            $r = $lien->prepare("SELECT  COUNT(etudiants_id) as nbr_commentaire FROM commentaires c WHERE etudiants_id =?" );
            $r->execute([$etudiants_id]);
            $user = $r->fetch();
            return $user;
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
       
    }
    public static function findnj($etudiants_id)
    {
         try {
            $lien=utile::connexion();
            $r = $lien->prepare("select COUNT(*) as non_justifier from absenter WHERE date_commentaire='non'AND etudiants_id=?" );
            $r->execute([$etudiants_id]);
            $user = $r->fetch();
            return $user;
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
       
    }

}

?>