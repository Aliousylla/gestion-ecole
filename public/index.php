<?php
include_once "../Etudiants/etudiant.classe.php";
include_once "../Absences/absence.classe.php";
$etudiants=etudiants::etudiants_all_di2023();
$nbr_etudiants=etudiants::nbr_etudiants_di2023();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSBT</title>
    <link rel="stylesheet" href="css/style1.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                           
                            <img src="../assets/imgs/Blue Black Modern Simple Design Hotel and Resort Logo - Logos (2).png" alt="" style="width: 100px;height: 100px;object-fit: cover;border-radius: 50%;text-align: center;">
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
                    <a href="../Etudiants/index.php">
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
                    <img src="../assets/imgs/customer01.jpg" alt="">
                </div>
            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">12</div>
                        <div class="cardName">Enseigants</div>
                    </div>

                    <div class="iconBx">
                    <ion-icon name="person"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers"><?=etudiants::nbr_etudiants()?></div>
                        <div class="cardName">Etudiants</div>
                    </div>

                    <div class="iconBx">
                    <ion-icon name="school"></ion-icon>
                    </div>
                </div>

                <div class="card">
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
                        <div class="numbers">2022/2023</div>
                        <div class="cardName">Annee Scolaire</div>
                    </div>

                    <div class="iconBx">
                    <ion-icon name="calendar-clear"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details" >
                <div class="recentOrders"style="background:black;">
                    

                <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers"><?=absences::nbr_absence_tt()?></div>
                        <div class="cardName">Absence</div>
                    </div>

                    <div class="iconBx">
                    <ion-icon name="clipboard"style="color: black;"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers"><?=absences::nbr_absence_oui()?></div>
                        <div class="cardName">Justifiee</div>
                    </div>

                    <div class="iconBx">
                    <ion-icon name="checkmark-circle-outline"style="color: green;"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers"><?=absences::nbr_absence_nn()?></div>
                        <div class="cardName">Non Justifiee</div>
                    </div>

                    <div class="iconBx">
                    <ion-icon name="close-circle"style="color: red;"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers"><?=absences::nbr_filiere()?></div>
                        <div class="cardName">Formations</div>
                    </div>

                    <div class="iconBx">
                    <ion-icon name="book"style="color: green;"></ion-icon>
                    </div>
                </div>
            </div>
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers"><?=absences::nbr_classe()?></div>
                        <div class="cardName">Classes</div>
                    </div>

                    <div class="iconBx">
                    <ion-icon name="browsers"style="color: blue;"></ion-icon>
                    </div>
                </div>

                <a href="" style="text-decoration: none;">
                <div class="card">
                    <div>
                        <div class="numbers"></div>
                        <div class="cardName"> Ajouter absence</div>
                    </div>

                    <div class="iconBx">
                    <ion-icon name="add-circle"style="color: red;"></ion-icon>
                    </div>
                </div>
                </a>

                <a href="../Etudiants/create.php" style="text-decoration: none;">
                <div class="card">
                    <div>
                        <div class="numbers"></div>
                        <div class="cardName">Ajouter etudiant</div>
                    </div>

                    <div class="iconBx">
                    <ion-icon name="person-add" style="color: blue;"></ion-icon>
                    </div>
                </div>
                </a>

                <a href="" style="text-decoration: none;">
                <div class="card">
                    <div>
                        <div class="numbers"></div>
                        <div class="cardName">Carte etudiant</div>
                    </div>

                    <div class="iconBx">
                    <ion-icon name="card"style="color: green;"></ion-icon>
                    </div>
                </div>
                </a>
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