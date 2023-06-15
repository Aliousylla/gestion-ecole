<?php
include_once "etudiant.classe.php";
include_once "../Absences/absence.classe.php";
include_once "../commentaires/commentaire_classe.php";
include_once "../Incidents/incident_classe.php";
$etudiants_id=null;
if(isset($_GET['etudiants_id'])){
    $etudiants_id=$_GET['etudiants_id'];
}
// $users=User::finds($etudiants_id);
$etudiant=absences::findas($etudiants_id);
$etudiants=etudiants::find($etudiants_id);
$etudiantsnj=absences::findnj($etudiants_id);
$paiement=etudiants::paiement($etudiants_id);
$nbr_commentaire=Commentaire::nbr_commentaire($etudiants_id);
$nbr_incident=incident::nbr_incident($etudiants_id);
?>









<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Etudiants</title>
    <link rel="stylesheet" href="../public/css/style1.css">
    <link rel="stylesheet" href="../public/css/button.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container ">
        <div class="navigation d-print-none">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                           
                        <img src="../assets//imgs/Blue Black Modern Simple Design Hotel and Resort Logo - Logos (2).png" alt="" style="width: 100%;border-radius: 50%;height: 100%; object-fit: cover;">
                        </span>
                        
                    </a>
                </li>
<br>
                <li>
                    <a href="../public/index.php">
                        <span class="icon">
                        <ion-icon name="home"></ion-icon>
                        </span>
                        <span class="title">Tableau de Bord</span>
                    </a>
                </li>

                <li>
                    <a href="index.php">
                        <span class="icon">
                        <ion-icon name="school"></ion-icon>
                        </span>
                        <span class="title">Etudiants</span>
                    </a>
                </li>

                <li>
                    <a href="../Absences/index.php">
                        <span class="icon">
                        
                        <ion-icon name="checkbox"></ion-icon>
                        </span>
                        <span class="title">Gestion des absences</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                        <ion-icon name="ribbon"></ion-icon>
                        </span>
                        <span class="title"> Bulletins</span>
                    </a>
                </li>

                <li>
                    <a href="carte1.php">
                        <span class="icon">
                        <ion-icon name="card"></ion-icon>
                        </span>
                        <span class="title">Carte Etudiants</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                        <ion-icon name="person"></ion-icon>
                        </span>
                        <span class="title">Enseigants</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                        <ion-icon name="create"></ion-icon>
                        </span>
                        <span class="title">Cahier de text</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Gestion des Matier</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                        <ion-icon name="business"></ion-icon>
                        </span>
                        <span class="title">Gestion des Classe</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                        <ion-icon name="calendar-number"></ion-icon>
                        </span>
                        <span class="title">Emplois du temps</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="today"></ion-icon>
                        </span>
                        <span class="title">Agenda</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main ">
            <div class="topbar d-print-none">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                

                <div class="user ">
                    <img src="../assets/imgs/customer01.jpg" alt="">
                </div>
            </div>

            <!-- ======================= Cards ================== -->
           


            <!-- ================ Order Details List ================= -->
            <div class="details ">
                <div class="recentOrders" >
                    <div class="cardHeader d-print-none " style="padding: 10px;">
                        <h2>Profil</h2>
                        <a href="etudiants_2023.php" class="btn " style="padding: 10px;">Retoure <span class="icon"><ion-icon name=""></ion-icon></a>
                        <a onclick="window.print()" href="" class="btn" style="padding: 10px;"> Imprimer <span class="icon"> <ion-icon name="print"></ion-icon></a></a>
                        <a href="edit.php?etudiants_id=<?=$etudiants['etudiants_id']?>" class="btn" style="padding: 10px;">Modifier <span class="icon"> <ion-icon name="create"></ion-icon></a></a>
                        <a href="form.php" class="btn" style="padding: 10px;">Dossiers Etudiants  <ion-icon name="folder"></ion-icon></a></a>
                        <a href="carte.php?etudiants_id=<?=$etudiants['etudiants_id']?>" class="btn" style="padding: 10px;">Carte Etudiants  <ion-icon name="card"></ion-icon></a></a>
                        
<div class="dropdown btn" >
  <button class="dropbtn btn">Actions <ion-icon name="arrow-dropdown-circle"style="color: red;"></ion-icon></button>
  <div class="dropdown-content ">
    <a href="index.php">Ajouter paiement</a>
    <a href="index.php">Ajouter un incident</a>
    <a href="index.php">Ajouter un Commentaire</a>
    <a href="index.php">Ajouter un dossier</a>
    <a href="index.php">Ajouter Absence</a>
  </div>
</div>
                    </div>
                    <div style="display: flex; gap: 5px;">
                    <div class="container image" style=" background: blanchedalmond;text-align: center;border-radius: 20px;padding: 10px;">
                        <img src="../Etudiants/<?=$etudiants['chemin']?>" alt="" style="width: 300px;height: 300px;object-fit: cover;border-radius: 50%;">
                   <h1 style="padding: 10px;color: blue;"><?=$etudiants['prenom']?> <?=$etudiants['nom']?></h1>
                   <h3 style="padding: 10px;">Matricule : <?=$etudiants['matricule']?></h3>
                   <h3 style="padding: 10px;"><?=$etudiants['filiere']?></h3>
                   <h3 style="text-align: start; padding: 10px;padding: 10px; "><span style="font-size: 1.5rem; color: blue;">Classe</span> : <?=$etudiants['niveau']?><span style="font-size: 1.5rem; color: blue;">Promo : </span> <?=$etudiants['promo']?></h3>
                   <h3 style="text-align: start; padding: 10px;"><span style="font-size: 1.5rem; color: blue;">Nationalite</span> : <?=$etudiants['nationalite']?></h3>
                   <h3 style="text-align: start; padding: 10px;"><span style="font-size: 1.5rem; color: blue;">Date de Naissance</span>  : <?=$etudiants['date_naissance']?> </h3>
                   <h3 style="text-align: start; padding: 10px;"><span style="font-size: 1.5rem; color: blue;">Lieu de Naissance </span>: <?=$etudiants['lieu_naissance']?></h3>
                   <h3 style="text-align: start; padding: 10px;"><span style="font-size: 1.5rem; color: blue;">Passeport</span> : <?=$etudiants['passeport_cin']?></h3>
                   <h3 style="text-align: start; padding: 10px;"><span style="font-size: 1.5rem; color: blue;">Adresse</span>  : <?=$etudiants['adresse']?></h3>
                   <h3 style="text-align: start; padding: 10px;"><span style="font-size: 1.5rem; color: blue;">Email</span> : <?=$etudiants['email']?></h3>
                   <h3 style="text-align: start; padding: 10px;"><span style="font-size: 1.5rem; color: blue;">Telephone</span> : <?=$etudiants['telephone']?></h3>
                   <h2 style="text-align: start; padding: 10px;"><span style="font-size: 1.5rem; color: black;">Information tuteur ou tutrice</h2>
                   
                   <h3 style="text-align: start; padding: 10px;"><span style="font-size: 1.5rem; color: blue;">tuteur ou tutrice</span>  : <?=$etudiants['parente']?> </h3>
                   <h3 style="text-align: start; padding: 10px;"><span style="font-size: 1.5rem; color: blue;">Prenom Nom </span>: <?=$etudiants['prenom_parent']?>  <?=$etudiants['nom_parent']?></h3>
                   <h3 style="text-align: start; padding: 10px;"><span style="font-size: 1.5rem; color: blue;">Adresse</span> : <?=$etudiants['adresse_parent']?></h3>
                   <h3 style="text-align: start; padding: 10px;"><span style="font-size: 1.5rem; color: blue;">Email</span> : <?=$etudiants['email_parent']?></h3>
                   <h3 style="text-align: start; padding: 10px;"><span style="font-size: 1.5rem; color: blue;">Telephone</span> : <?=$etudiants['telephone_parent']?></h3>
                </div>
                
                    <div class="container info " style=" background:blanchedalmond ;text-align: center;border-radius: 20px;padding: 10px;  justify-content:space-between;" >
                    <h1 style="padding: 10px;">Absences    &emsp;&emsp;&emsp;&emsp;&emsp;              
                       <a href="../Absences/historique.php?etudiants_id=<?=$etudiants['etudiants_id']?>" class="btn" style="padding: 4px;font-size: 0.8rem;background: blue;color: white;border-radius: 10px;text-decoration: none;"> Historiques <span class="icon"> <ion-icon name="print"></ion-icon></a></a>
</h1>

                    <div style="display: flex;justify-content:space-between;">
                        
                    <div class="iteme" style="background:green; border-radius: 10px;width: 100px;height: 100px; color: white; "> <h3> <br><?=$etudiants['nbr']?><br> Absences</h3></div>
                        <div class="iteme" style="background:blue; border-radius: 10px;width: 100px;height: 100px;color: white"> <h3><br><?=$etudiant['justifier']?> <br> Justifier</h3></div>
                        <div class="iteme"style="background:red; border-radius: 10px;width: 100px;height: 100px;color: white"> <h3><br><?=$etudiantsnj['non_justifier']?> <br> Non Justifier</h3></div>
                    </div>
                        <div style="display: block; padding: 10px;"><h1>note conduit: <span style="font-size: 1.5rem; color: blue;"><?=$etudiants['conduit']?></span></h1></div>
                         <div style="display: block; padding: 10px;"><h1>Etat de paiement</h1>
                         <h3>Comtabilise : <span style="font-size: 1.5rem; color: green;"><?=$paiement['paiements']?>DHS</span></h3>
                        </div>
                        <h3 style="text-align: start; padding: 10px;"><span style="font-size: 1.5rem; color: blue;">Incidents</span>:   <?=$nbr_incident['nbr_incident']?><a href="form.php" class="btn" style="padding: 10px; text-decoration: none;">Voirs</a></h3>
                   <h3 style="text-align: start; padding: 10px;"><span style="font-size: 1.5rem; color: blue;">Commentaires </span>: <?=$nbr_commentaire['nbr_commentaire']?> <a href="../commentaires/index.php?etudiants_id=<?=$etudiants['etudiants_id']?>" class="btn" style="padding: 10px; text-decoration: none;">Voirs</a></h3>
                  
                </div>

                    </div>
                    

                </div>
                <!-- ================= New Customers ================ -->
                
</div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="../assets/js/main.js"></script>
    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>