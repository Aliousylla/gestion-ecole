<?php 
// define("MAX",8000000);
include_once('../public/Utils.php');
class Incident{

    public $etudiants_id;
    public $detais;
    public $date_incident;


    function __construct($etudiants_id,$detais,$date_incident)
     {
        $this->etudiants_id = $etudiants_id;

        $this->detais = $detais;
        $this->date_incident = $date_incident;
        

     }    
        
public function creat_incident( )
{

    try {
       $lien = utile::connexion();
        $r = $lien->prepare("INSERT INTO incidents(etudiants_id,detais,date_incident) VALUES(?,?,?)");
        $r->execute([$this->etudiants_id,$this->detais,$this->date_incident]);
    } catch (\Throwable $e) {
        echo $e->getMessage();
    }
}

public static function incident_all()
{
    try {
       $lien=utile::connexion();
        $r = $lien->prepare("SELECT  * FROM incidents  WHERE etudiants_id =?");
        $r->execute();
        $salle=$r->fetchAll();
        return $salle;
    } catch (\Throwable $e) {
        echo $e->getMessage();
    }
}
public static function find()
{
    try {
       $lien=utile::connexion();
        $r = $lien->prepare("SELECT  COUNT(etudiants_id) FROM incidents c WHERE etudiants_id =?");
        $r->execute();
        $nbr_incident=$r->fetchAll();
        return $nbr_incident;
    } catch (\Throwable $e) {
        echo $e->getMessage();
    }
}


public static function nbr_incident($etudiants_id)
    {
         try {
            $lien=utile::connexion();
            $r = $lien->prepare("SELECT  COUNT(etudiants_id) as nbr_incident FROM incidents c WHERE etudiants_id =?" );
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
            $r = $lien->prepare("select COUNT(*) as non_justifier from absenter WHERE date_incident='non'AND etudiants_id=?" );
            $r->execute([$etudiants_id]);
            $user = $r->fetch();
            return $user;
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
       
    }

}

?>