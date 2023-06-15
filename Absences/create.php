<?php
include_once "../etudiants/etudiant.classe.php";

$etudiants=etudiants::etudiants_all_di2023();
$nbr_etudiants=etudiants::nbr_etudiants();
$seance=etudiants::seance();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Etudiants</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/style1.css">
    <link rel="stylesheet" href="../public/css/button.css">

</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="containers">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                           
                            <img src="img/logo_small_2.png" alt="">
                        </span>
                        
                    </a>
                </li>
<br>
                <li>
                    <a href="index.php">
                        <span class="icon">
                        <ion-icon name="home"></ion-icon>
                        </span>
                        <span class="title">Tableau de Bord</span>
                    </a>
                </li>

                <li>
                    <a href="etudiants.php">
                        <span class="icon">
                        <ion-icon name="school"></ion-icon>
                        </span>
                        <span class="title  ">Etudiants</span>
                       
                    </a>
                </li>
                

                <li>
                    <a href="#">
                        <span class="icon">
                        
                        <ion-icon name="checkbox"></ion-icon>
                        </span>
                        <span class="title">Gestion des notes</span>
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
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>

            
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">

                    <div class="cardBox">

              
        <div class="container">
        <form action="store.masse.php" method="post">
        <div class="row">
        Etudiant : <select class="form-select" name="seance_id" id="" >
        <option value="" selected>slectioner une seance</option>
        <?php foreach ($seance as $u) {?>
           
            <option   value="<?=$u['seance_id']?>"><?=$u['nom_matiere']?> : <?=$u['date_seance']?></option>
           
            <?php }?>
    </select> 
 </div>
 <div class="row ">
                <?php foreach ($etudiants as $u) {
                ?>
                    <div class="col-md-3 shadow">
                        <img src="../etudiants/<?=$u['chemin']?>" alt="" class="img-fluid" style="width:100%;height:300px;object-fit: cover;">
                        <h2 class="text-center text-primary"><?=$u['nom']?> </h2>
                        <h3>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" name="etudiants_id[]" value="<?=$u['etudiants_id']?>">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Absent</label>
                            </div>
                        </h3>
                    </div>
                <?php } ?>
            </div>

            <div class="row">
                <div class="col-md-6 mx-auto ">
                    <button class="btn btn-primary col-md-12">Marquer les absences </button>
                </div>
            </div>
        </form>
    </div>
              

                    
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