<?php 
define("MAX",8000000);
include_once('../public/Utils.php');
class etudiants{
    public $nom;
    public $prenom;
    public $matricule;
    public $nationalite;
    public $telephone;
    public $email;
    public $adresse;
    public $date_naissance;
    public $lieu_naissance;
    public $passeport_cin;
    public $chemin;

    public $filiere;
    public $niveau;
     public $promo;
    public $parente;
    public $nom_parent;
    public $prenom_parent;
    public $adresse_parent;
    public $telephone_parent;
    public $email_parent;

    function __construct($nom,$prenom,$matricule,$nationalite,$telephone,$email,$adresse,$date_naissance,$lieu_naissance,$passeport_cin,$chemin,$filiere,$niveau,$promo,$parente,$nom_parent,$prenom_parent,$adresse_parent,$telephone_parent,$email_parent)
     {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->matricule = $matricule;
        $this->nationalite = $nationalite;
        $this->telephone = $telephone;
        $this->email = $email;
        $this->adresse = $adresse;
        $this->date_naissance = $date_naissance;
        $this->lieu_naissance = $lieu_naissance;
        $this->passeport_cin = $passeport_cin;
        $this->chemin = $chemin;
        $this->filiere = $filiere;
        $this->niveau = $niveau;
        $this->promo = $promo;
        $this->parente = $parente;
        $this->nom_parent = $nom_parent;
        $this->prenom_parent = $prenom_parent;
        $this->adresse_parent = $adresse_parent;
        $this->telephone_parent = $telephone_parent;
        $this->email_parent = $email_parent;
        

     }    
        
public function creat_etudiants($nom,$prenom,$matricule,$nationalite,$telephone,$email,$adresse,$date_naissance,$lieu_naissance,$passeport_cin,$chemin,$filiere,$niveau,$promo,$parente,$nom_parent,$prenom_parent,$adresse_parent,$telephone_parent,$email_parent )
{

    try {
       $lien = utile::connexion();
        $r = $lien->prepare("INSERT INTO etudiants(nom,prenom,matricule,nationalite,telephone,email,adresse,date_naissance,lieu_naissance,passeport_cin,chemin,filiere,niveau,promo,parente,nom_parent,prenom_parent,adresse_parent,telephone_parent,email_parent) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $r->execute([$this->nom,$this->prenom,$this->matricule,$this->nationalite,$this->telephone,$this->email,$this->adresse,$this->date_naissance,$this->lieu_naissance,$this->passeport_cin,$this->chemin,$this->filiere,$this->niveau,$this->promo,$this->parente,$this->nom_parent,$this->prenom_parent,$this->adresse_parent,$this->telephone_parent,$this->email_parent]);
    } catch (\Throwable $e) {
        echo $e->getMessage();
    }
}
public static function nbr_etudiants()
{
    try {
        $lien = utile::connexion();
        $r = $lien->prepare("SELECT COUNT(*) as nbr_etudiants FROM  etudiants 
        ");
        $r->execute();
        $result = $r->fetch();
        $nbr_etudiants = $result['nbr_etudiants'];
        return $nbr_etudiants;
    } catch (\Throwable $e) {
        echo $e->getMessage();
    }
}
public static function seance()
{
    try {
       $lien=utile::connexion();
        $r = $lien->prepare("SELECT s.*,m.nom_matiere FROM seances s, matiere m WHERE s.matiere_id=m.matiere_id");
        $r->execute();
        $salle=$r->fetchAll();
        return $salle;
    } catch (\Throwable $e) {
        echo $e->getMessage();
    }
}
public static function all()
{
    try {
       $lien=utile::connexion();
        $r = $lien->prepare("SELECT * from etudiants");
        $r->execute();
        $salle=$r->fetchAll();
        return $salle;
    } catch (\Throwable $e) {
        echo $e->getMessage();
    }
}
public static function Tous()
{
    try {
       $lien=utile::connexion();
        $r = $lien->prepare("SELECT e.*,i.* from etudiants e,inscriptions i
        WHERE e.etudiants_id=i.etudiants_id  order by e.etudiants_id DESC");
        $r->execute();
        $salle=$r->fetchAll();
        return $salle;
    } catch (\Throwable $e) {
        echo $e->getMessage();
    }
}
public static function etudiants_all_di2023()
{
    try {
       $lien=utile::connexion();
        $r = $lien->prepare("SELECT * FROM `etudiants` WHERE filiere ='Développement informatique' AND promo='2022-2023'and niveau='Bac + 1' order by etudiants_id desc");
        $r->execute();
        $salle=$r->fetchAll();
        return $salle;
    } catch (\Throwable $e) {
        echo $e->getMessage();
    }
}
public static function nbr_etudiants_di2023()
{
    try {
       $lien=utile::connexion();
        $r = $lien->prepare("SELECT COUNT(*) as nbr_etu from etudiants WHERE filiere ='Développement informatique' AND promo='2022-2023'and niveau='Bac + 1'");
        $r->execute();
        $nbr_etudiants = $r->fetch(PDO::FETCH_ASSOC);
        return $nbr_etudiants['nbr_etu'];
    } catch (\Throwable $e) {
        echo $e->getMessage();
    }
}
public static function nbr_etudiants_di2()
{
    try {
       $lien=utile::connexion();
        $r = $lien->prepare("SELECT COUNT(*) as nbr_etu from etudiants WHERE filiere ='Développement informatique' AND promo='2022-2023'and niveau='Bac + 2'");
        $r->execute();
        $nbr_etudiants = $r->fetch(PDO::FETCH_ASSOC);
        return $nbr_etudiants['nbr_etu'];
    } catch (\Throwable $e) {
        echo $e->getMessage();
    }
}
public static function nbr_etudiants_dM2()
{
    try {
       $lien=utile::connexion();
        $r = $lien->prepare("SELECT COUNT(*) as nbr_etu from etudiants WHERE filiere ='Développement Multimedia' AND promo='2022-2023'and niveau='Bac + 2'");
        $r->execute();
        $nbr_etudiants = $r->fetch(PDO::FETCH_ASSOC);
        return $nbr_etudiants['nbr_etu'];
    } catch (\Throwable $e) {
        echo $e->getMessage();
    }
}
public static function nbr_etudiants_dM1()
{
    try {
       $lien=utile::connexion();
        $r = $lien->prepare("SELECT COUNT(*) as nbr_etu from etudiants WHERE filiere ='Développement Multimedia' AND promo='2022-2023'and niveau='Bac + 1'");
        $r->execute();
        $nbr_etudiants = $r->fetch(PDO::FETCH_ASSOC);
        return $nbr_etudiants['nbr_etu'];
    } catch (\Throwable $e) {
        echo $e->getMessage();
    }
}
public static function nbr_etudiants_ci1()
{
    try {
       $lien=utile::connexion();
        $r = $lien->prepare("SELECT COUNT(*) as nbr_etu from etudiants WHERE filiere ='Commerce International' AND promo='2022-2023'and niveau='Bac + 1'");
        $r->execute();
        $nbr_etudiants = $r->fetch(PDO::FETCH_ASSOC);
        return $nbr_etudiants['nbr_etu'];
    } catch (\Throwable $e) {
        echo $e->getMessage();
    }
}
public static function nbr_etudiants_ci2()
{
    try {
       $lien=utile::connexion();
        $r = $lien->prepare("SELECT COUNT(*) as nbr_etu from etudiants WHERE filiere ='Commerce International' AND promo='2022-2023'and niveau='Bac + 2'");
        $r->execute();
        $nbr_etudiants = $r->fetch(PDO::FETCH_ASSOC);
        return $nbr_etudiants['nbr_etu'];
    } catch (\Throwable $e) {
        echo $e->getMessage();
    }
}
public static function nbr_etudiants_ge1()
{
    try {
       $lien=utile::connexion();
        $r = $lien->prepare("SELECT COUNT(*) as nbr_etu from etudiants WHERE filiere ='Gestion des entreprises' AND promo='2022-2023'and niveau='Bac + 1'");
        $r->execute();
        $nbr_etudiants = $r->fetch(PDO::FETCH_ASSOC);
        return $nbr_etudiants['nbr_etu'];
    } catch (\Throwable $e) {
        echo $e->getMessage();
    }
}
public static function nbr_etudiants_ge2()
{
    try {
       $lien=utile::connexion();
        $r = $lien->prepare("SELECT COUNT(*) as nbr_etu from etudiants WHERE filiere ='Gestion des entreprises' AND promo='2022-2023'and niveau='Bac + 2'");
        $r->execute();
        $nbr_etudiants = $r->fetch(PDO::FETCH_ASSOC);
        return $nbr_etudiants['nbr_etu'];
    } catch (\Throwable $e) {
        echo $e->getMessage();
    }
}
public static function nbr_etudiants_m1()
{
    try {
       $lien=utile::connexion();
        $r = $lien->prepare("SELECT COUNT(*) as nbr_etu from etudiants WHERE filiere ='Marketing' AND promo='2022-2023'and niveau='Bac + 1'");
        $r->execute();
        $nbr_etudiants = $r->fetch(PDO::FETCH_ASSOC);
        return $nbr_etudiants['nbr_etu'];
    } catch (\Throwable $e) {
        echo $e->getMessage();
    }
}
public static function nbr_etudiants_m2()
{
    try {
       $lien=utile::connexion();
        $r = $lien->prepare("SELECT COUNT(*) as nbr_etu from etudiants WHERE filiere ='Marketing' AND promo='2022-2023'and niveau='Bac + 2'");
        $r->execute();
        $nbr_etudiants = $r->fetch(PDO::FETCH_ASSOC);
        return $nbr_etudiants['nbr_etu'];
    } catch (\Throwable $e) {
        echo $e->getMessage();
    }
}
public static function nbr_etudiants_if1()
{
    try {
       $lien=utile::connexion();
        $r = $lien->prepare("SELECT COUNT(*) as nbr_etu from etudiants WHERE filiere ='Infographie' AND promo='2022-2023'and niveau='Bac + 1'");
        $r->execute();
        $nbr_etudiants = $r->fetch(PDO::FETCH_ASSOC);
        return $nbr_etudiants['nbr_etu'];
    } catch (\Throwable $e) {
        echo $e->getMessage();
    }
}
public static function nbr_etudiants_if2()
{
    try {
       $lien=utile::connexion();
        $r = $lien->prepare("SELECT COUNT(*) as nbr_etu from etudiants WHERE filiere ='Infographie' AND promo='2022-2023'and niveau='Bac + 2'");
        $r->execute();
        $nbr_etudiants = $r->fetch(PDO::FETCH_ASSOC);
        return $nbr_etudiants['nbr_etu'];
    } catch (\Throwable $e) {
        echo $e->getMessage();
    }
}
public static function nbr_etudiants_rh1()
{
    try {
       $lien=utile::connexion();
        $r = $lien->prepare("SELECT COUNT(*) as nbr_etu from etudiants WHERE filiere ='Ressources humaines' AND promo='2022-2023'and niveau='Bac + 1'");
        $r->execute();
        $nbr_etudiants = $r->fetch(PDO::FETCH_ASSOC);
        return $nbr_etudiants['nbr_etu'];
    } catch (\Throwable $e) {
        echo $e->getMessage();
    }
}
public static function nbr_etudiants_rh2()
{
    try {
       $lien=utile::connexion();
        $r = $lien->prepare("SELECT COUNT(*) as nbr_etu from etudiants WHERE filiere ='Ressources humaines' AND promo='2022-2023'and niveau='Bac + 2'");
        $r->execute();
        $nbr_etudiants = $r->fetch(PDO::FETCH_ASSOC);
        return $nbr_etudiants['nbr_etu'];
    } catch (\Throwable $e) {
        echo $e->getMessage();
    }
}
public static function nbr_etudiants_tl1()
{
    try {
       $lien=utile::connexion();
        $r = $lien->prepare("SELECT COUNT(*) as nbr_etu from etudiants WHERE filiere ='Transport et Logistique' AND promo='2022-2023'and niveau='Bac + 1'");
        $r->execute();
        $nbr_etudiants = $r->fetch(PDO::FETCH_ASSOC);
        return $nbr_etudiants['nbr_etu'];
    } catch (\Throwable $e) {
        echo $e->getMessage();
    }
}
public static function nbr_etudiants_tl2()
{
    try {
       $lien=utile::connexion();
        $r = $lien->prepare("SELECT COUNT(*) as nbr_etu from etudiants WHERE filiere ='Transport et Logistique' AND promo='2022-2023'and niveau='Bac + 2'");
        $r->execute();
        $nbr_etudiants = $r->fetch(PDO::FETCH_ASSOC);
        return $nbr_etudiants['nbr_etu'];
    } catch (\Throwable $e) {
        echo $e->getMessage();
    }
}
public static function find($etudiants_id)
    {
         try {
            $lien=utile::connexion();
            $r = $lien->prepare("select e.*,s.*,COUNT(a.etudiants_id) as nbr,20-COUNT((a.etudiants_id)*0.5) as conduit FROM etudiants e

            LEFT  JOIN absenter a ON a.etudiants_id= e.etudiants_id
            LEFT JOIN seances s on  a.seance_id=s.seance_id
             WHERE e.etudiants_id =?
            GROUP BY e.etudiants_id,s.seance_id " );
            $r->execute([$etudiants_id]);
            $user = $r->fetch();
            return $user;
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
       
    }
    public static function paiement($etudiants_id)
    {
         try {
            $lien=utile::connexion();
            $r = $lien->prepare("SELECT  COUNT(*)*1000 as paiements FROM paiements WHERE etudiants_id=?" );
            $r->execute([$etudiants_id]);
            $user = $r->fetch();
            return $user;
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
       
    }
    public static function update_etudiants($etudiants_id)
{
    try {
        $lien = utile::connexion();
        $r = $lien->prepare("UPDATE etudiants SET nom=?, prenom=?, matricule=?, nationalite=?, telephone=?, email=?, adresse=?, date_naissance=?, lieu_naissance=?, passeport_cin=?, filiere=?, niveau=?, promo=?, parente=?, nom_parent=?, prenom_parent=?, adresse_parent=?, telephone_parent=?, email_parent=? WHERE etudiants_id=?");
        $r->execute([
           'nom',
           'prenom',
           'matricule',
           'nationalite',
           'telephone',
           'email',
           'adresse',
           'date_naissance',
           'lieu_naissance',
           'passeport_cin',
           'filiere',
           'niveau',
           'promo',
           'parente',
           'nom_parent',
           'prenom_parent',
           'adresse_parent',
           'telephone_parent',
           'email_parent',
            $etudiants_id
        ]);
    } catch (\Throwable $e) {
        echo $e->getMessage();
    }
}

}

?>