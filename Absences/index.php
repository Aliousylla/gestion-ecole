<?php
include_once "../Etudiants/etudiant.classe.php";

$etudiants=etudiants::etudiants_all_di2023();
$nbr_etudiants=etudiants::nbr_etudiants_di2023();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Etudiants</title>
    <link rel="stylesheet" href="../public/css/style1.css">
    <link rel="stylesheet" href="../public//css/button.css">

</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
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
                        <span class="title  ">Etudiants</span>
                       
                    </a>
                </li>
                
<!-- <div class="dropdown  " >
  <button class="dropbtn btn">Actions <ion-icon name="arrow-dropdown-circle"style="color: red;"></ion-icon></button>
  <div class="dropdown-content ">
    <a href="index.php">Ajouter paiement</a>
    <a href="index.php">Ajouter un incident</a>
    <a href="index.php">Ajouter un Commentaire</a>
    <a href="index.php">Ajouter un dossier</a>
    <a href="index.php">Ajouter Absence</a>
  </div>
</div> -->
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
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                       <h1>Les Absences</h1>
                    </label>
                </div>

                <div class="user">
                    <img src="../assets/imgs/customer01.jpg" alt="">
                </div>
            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <!-- <div class="card">
                    <div>
                        <div class="numbers"></div>
                        <div class="cardName">Enseigants</div>
                    </div>

                    <div class="iconBx">
                    <ion-icon name="person"></ion-icon>
                    </div>
                </div> -->

                <!-- <div class="card">
                    <div>
                        <div class="numbers">250</div>
                        <div class="cardName">Etudiants inscrit</div>
                    </div>

                    <div class="iconBx">
                    <ion-icon name="school"></ion-icon>
                    </div>
                </div> -->

                <!-- <div class="card">
                    <div>
                        <div class="numbers">23</div>
                        <div class="cardName">Sall de Classe</div>
                    </div>

                    <div class="iconBx">
                    <ion-icon name="business"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">269</div>
                        <div class="cardName">Etudiants</div>
                    </div>

                    <div class="iconBx">
                    <ion-icon name="calendar-clear"></ion-icon>
                    </div>
                </div> -->
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">

                    <div class="cardBox">

                    <a href="" style="text-decoration: none;">
                <div class="card" style="background:n;" >
                    <div>
                        <div class="numbers"><?=etudiants::nbr_etudiants_ci1()?></div>
                        <div class="cardName">CI1</div>
                        
                    </div>

                    <div class="iconBx">
                    <ion-icon name="globe"></ion-icon>
                    </div>
                </div>
                </a>
                <a href="" style="text-decoration: none;">
                <div class="card" style="background: n;" >
                    <div>
                        <div class="numbers"><?=etudiants::nbr_etudiants_ci2()?></div>
                        <div class="cardName">CI2</div>
                       
                    </div>

                    <div class="iconBx">
                    <ion-icon name="globe"></ion-icon>
                    </div>
                </div>
                </a>

                <a href="" style="text-decoration: none;color: white;">
                <div class="card" style="background: green;" >
                    <div>
                        <div class="numbers"><?=etudiants::nbr_etudiants_ge1()?></div>
                        <div class="cardName">GE1</div>
                        
                    </div>

                    <div class="iconBx">
                     <ion-icon name="logo-buffer"></ion-icon>
                    </div>
                </div>
                </a>
                <a href="" style="text-decoration: none;color: white;">
                <div class="card" style="background: green;" >
                    <div>
                        <div class="numbers"><?=etudiants::nbr_etudiants_ge2()?></div>
                        <div class="cardName">GE2</div>
                       
                    </div>

                    <div class="iconBx">
                     <ion-icon name="logo-buffer"></ion-icon>
                    </div>
                </div>
                </a>
                <a href="" style="text-decoration: none;">
                <div class="card" style="background: black;" >
                    <div>
                        <div class="numbers"><?=etudiants::nbr_etudiants_di2()?></div>
                        <div class="cardName">DI2</div>
                        
                    </div>

                    <div class="iconBx">
                    <ion-icon name="code-working"></ion-icon>
                    </div>
                </div>
                </a>
                <a href="absence_di1.php" style="text-decoration: none;">
                <div class="card" style="background: black;" >
                    <div>
                        <div class="numbers"><?=etudiants::nbr_etudiants_di2023()?></div>
                        <div class="cardName">DI1</div>
                       
                    </div>

                    <div class="iconBx">
                    <ion-icon name="code-working"></ion-icon>
                    </div>
                </div>
                </a>
                <a href="" style="text-decoration: none;">
                <div class="card" style="background: red;" >
                    <div>
                        <div class="numbers"><?=etudiants::nbr_etudiants_dM1()?></div>
                        <div class="cardName">DM1</div>
                        
                    </div>

                    <div class="iconBx">
                    <ion-icon name="aperture"></ion-icon>
                    </div>
                </div>
                </a>
                <a href="" style="text-decoration: none;">
                <div class="card" style="background: red;" >
                    <div>
                        <div class="numbers"><?=etudiants::nbr_etudiants_dm2()?></div>
                        <div class="cardName">DM2</div>
                       
                    </div>

                    <div class="iconBx">
                    <ion-icon name="aperture"></ion-icon>
                    </div>
                </div>
                </a>
                <a href="" style="text-decoration: none;">
                <div class="card" style="background: green;" >
                    <div>
                        <div class="numbers"><?=etudiants::nbr_etudiants_m1()?></div>
                        <div class="cardName">Marketing1</div>
                        
                    </div>

                    <div class="iconBx">
                    <ion-icon name="color-filter"></ion-icon>
                    </div>
                </div>
                </a>
                <a href="" style="text-decoration: none;">
                <div class="card" style="background: green;" >
                    <div>
                        <div class="numbers"><?=etudiants::nbr_etudiants_m2()?></div>
                        <div class="cardName">Marketing2</div>
                       
                    </div>

                    <div class="iconBx">
                    <ion-icon name="color-filter"></ion-icon>
                    </div>
                </div>
                </a>
                <a href="" style="text-decoration: none;">
                <div class="card" style="background: n;" >
                    <div>
                        <div class="numbers"><?=etudiants::nbr_etudiants_if1()?></div>
                        <div class="cardName">Infographie1</div>
                        
                    </div>

                    <div class="iconBx">
                   <ion-icon name="color-palette"></ion-icon>
                    </div>
                </div>
                </a>
                <a href="" style="text-decoration: none;">
                <div class="card" style="background: n;" >
                    <div>
                        <div class="numbers"><?=etudiants::nbr_etudiants_if2()?></div>
                        <div class="cardName">Infographie2</div>
                       
                    </div>

                    <div class="iconBx">
                   <ion-icon name="color-palette"></ion-icon>
                    </div>
                </div>
                </a>
                <a href="" style="text-decoration: none;">
                <div class="card" style="background: red;" >
                    <div>
                        <div class="numbers"><?=etudiants::nbr_etudiants_rh1()?></div>
                        <div class="cardName">RH 1</div>
                        
                    </div>

                    <div class="iconBx">
                    <ion-icon name="people"></ion-icon>
                    </div>
                </div>
                </a>
                <a href="" style="text-decoration: none;">
                <div class="card" style="background: red;" >
                    <div>
                        <div class="numbers"><?=etudiants::nbr_etudiants_rh2()?></div>
                        <div class="cardName">RH 2</div>
                       
                    </div>

                    <div class="iconBx">
                    <ion-icon name="people"></ion-icon>
                    </div>
                </div>
                </a>
                <a href="" style="text-decoration: none;">
                <div class="card" style="background: black;" >
                    <div>
                        <div class="numbers"><?=etudiants::nbr_etudiants_tl1()?></div>
                        <div class="cardName">TL 1</div>
                        
                    </div>

                    <div class="iconBx">
                    <ion-icon name="planet"></ion-icon>
                    </div>
                </div>
                </a>
                <a href="" style="text-decoration: none;">
                <div class="card" style="background: black;" >
                    <div>
                        <div class="numbers"><?=etudiants::nbr_etudiants_tl2()?></div>
                        <div class="cardName">TL 2</div>
                       
                    </div>

                    <div class="iconBx">
                    <ion-icon name="planet"></ion-icon>
                    </div>
                </div>
                </a>

                    
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