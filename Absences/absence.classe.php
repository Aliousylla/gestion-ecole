<?php 
// define("MAX",8000000);
include_once('../public/Utils.php');
class absences{

    public $etudiants_id;
    public $seance_id;
    public $etat;


    function __construct($etudiants_id,$seance_id,$etat)
     {
        $this->etudiants_id = $etudiants_id;

        $this->seance_id = $seance_id;
        $this->etat = $etat;
        

     }    
        
public function creat_absences( )
{

    try {
       $lien = utile::connexion();
        $r = $lien->prepare("INSERT INTO absenter(etudiants_id,seance_id,etat) VALUES(?,?,?)");
        $r->execute([$this->etudiants_id,$this->seance_id,$this->etat]);
    } catch (\Throwable $e) {
        echo $e->getMessage();
    }
}

public static function absences_all()
{
    try {
       $lien=utile::connexion();
        $r = $lien->prepare("SELECT e.absences_id,e.nom,e.prenom,e.absences_id,e.chemin,i.annee_scolaire,n.titre_niveau from absences e,inscriptions i,niveau n
        WHERE e.absences_id=i.absences_id and n.niveau_id=i.niveau_id");
        $r->execute();
        $salle=$r->fetchAll();
        return $salle;
    } catch (\Throwable $e) {
        echo $e->getMessage();
    }
}
public static function nbr_absences()
{
    try {
       $lien=utile::connexion();
        $r = $lien->prepare("SELECT COUNT(*)  from absences");
        $r->execute();
        $nbr_absences=$r->fetchAll();
        return $nbr_absences;
    } catch (\Throwable $e) {
        echo $e->getMessage();
    }
}
public static function absences_DI1()
{
    try {
       $lien=utile::connexion();
        $r = $lien->prepare("select e.*,s.*,COUNT(a.etudiants_id) as nbr FROM etudiants e

        LEFT  JOIN absenter a ON a.etudiants_id= e.etudiants_id
        LEFT JOIN seances s on  a.seance_id=s.seance_id
         WHERE e.filiere ='Développement informatique' AND e.promo='2022-2023'and e.niveau='Bac + 1'
        GROUP BY e.etudiants_id,s.seance_id");
        $r->execute();
        $nbr_absences=$r->fetchAll();
        return $nbr_absences;
    } catch (\Throwable $e) {
        echo $e->getMessage();
    }
}
public static function nbr_absences_DI1()
{
    try {
        $lien = utile::connexion();
        $r = $lien->prepare("SELECT COUNT(*) AS nbr_absences_DI1
            FROM absenter a 
            LEFT JOIN etudiants e ON e.etudiants_id = a.etudiants_id
            LEFT JOIN seances s ON a.seance_id = s.seance_id
            WHERE e.filiere = 'Développement informatique' 
                AND e.promo = '2022-2023' 
                AND e.niveau = 'Bac + 1'
        ");
        $r->execute();
        $result = $r->fetch();
        $nbr_absences = $result['nbr_absences_DI1'];
        return $nbr_absences;
    } catch (\Throwable $e) {
        echo $e->getMessage();
    }
}

public static function nbr_matiere_di()
{
    try {
        $lien = utile::connexion();
        $r = $lien->prepare("SELECT COUNT(c.matiere_id) as nbr_matiere_di FROM  contients c 
        LEFT JOIN matiere m on m.matiere_id=c.matiere_id
        LEFT JOIN filiere f on f.filiere_id=c.filiere_id
        WHERE f.nom_filiere='Développement informatique'
        ");
        $r->execute();
        $result = $r->fetch();
        $nbr_matiere_di = $result['nbr_matiere_di'];
        return $nbr_matiere_di;
    } catch (\Throwable $e) {
        echo $e->getMessage();
    }
}

public static function absence_etudiant($etudiants_id)
{
    try {
        $lien=utile::connexion();
        $r = $lien->prepare("SELECT  e.etudiants_id,e.nom,e.prenom,e.chemin,a.etat,s.* ,m.nom_matiere from etudiants e 
        LEFT JOIN absenter a on e.etudiants_id=a.etudiants_id
        LEFT JOIN seances s on a.seance_id=s.seance_id
        LEFT JOIN matiere m on s.matiere_id=m.matiere_id 
        WHERE e.etudiants_id =? order by s.date_seance desc" );
        $r->execute([$etudiants_id]);
        $etudiant = $r->fetchAll();
        return $etudiant;
    } catch (\Throwable $e) {
        echo $e->getMessage();
    }
}

public static function findas($etudiants_id)
    {
         try {
            $lien=utile::connexion();
            $r = $lien->prepare("select COUNT(*) as justifier from absenter WHERE etat='oui'AND etudiants_id=?" );
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
            $r = $lien->prepare("select COUNT(*) as non_justifier from absenter WHERE etat='non'AND etudiants_id=?" );
            $r->execute([$etudiants_id]);
            $user = $r->fetch();
            return $user;
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
       
    }
    public static function nbr_absence_nn()
    {
        try {
            $lien = utile::connexion();
            $r = $lien->prepare("select COUNT(*) as non_justifier from absenter WHERE etat='non'
            ");
            $r->execute();
            $result = $r->fetch();
            $non_justifier = $result['non_justifier'];
            return $non_justifier;
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
       
    }
    public static function nbr_absence_oui()
    {
        try {
            $lien = utile::connexion();
            $r = $lien->prepare("select COUNT(*) as justifier from absenter WHERE etat='oui'
            ");
            $r->execute();
            $result = $r->fetch();
            $justifier = $result['justifier'];
            return $justifier;
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
       
    }
    public static function nbr_absence_tt()
    {
        try {
            $lien = utile::connexion();
            $r = $lien->prepare("select COUNT(*) as nbr_absence_tt from absenter 
            ");
            $r->execute();
            $result = $r->fetch();
            $nbr_absence_tt = $result['nbr_absence_tt'];
            return $nbr_absence_tt;
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
       
    }
    public static function nbr_classe()
    {
        try {
            $lien = utile::connexion();
            $r = $lien->prepare("SELECT count(*) as nbr_classe FROM  classes 
            ");
            $r->execute();
            $result = $r->fetch();
            $nbr_classe = $result['nbr_classe'];
            return $nbr_classe;
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
       
    }
    public static function nbr_filiere()
    {
        try {
            $lien = utile::connexion();
            $r = $lien->prepare("SELECT count(*) as nbr_filiere FROM  filiere 
            ");
            $r->execute();
            $result = $r->fetch();
            $nbr_filiere = $result['nbr_filiere'];
            return $nbr_filiere;
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
       
    }
    public static function absence_all_di2023()
{
    try {
       $lien=utile::connexion();
        $r = $lien->prepare("SELECT e.etudiants_id,e.nom,e.prenom,e.chemin,a.etat,s.date_seance,s.heur_debut,s.heur_fin,m.nom_matiere 
        from absenter a 
        LEFT JOIN etudiants e on e.etudiants_id=a.etudiants_id 
        LEFT JOIN seances s on a.seance_id=s.seance_id 
        LEFT JOIN matiere m on s.matiere_id=m.matiere_id 
        WHERE filiere ='Développement informatique' 
        AND promo='2022-2023'
        and niveau='Bac + 1' 
        ORDER BY `s`.`date_seance` ASC");
        $r->execute();
        $salle=$r->fetchAll();
        return $salle;
    } catch (\Throwable $e) {
        echo $e->getMessage();
    }
}
}

?>