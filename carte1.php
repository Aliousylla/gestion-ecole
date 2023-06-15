<?php
try {
    $lien = new PDO('mysql:host=127.0.0.1;dbname=carteosbt;port=3306', "root", "", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    $r = $lien->prepare("select * from etudiants");
    $r->execute([]);
    $etudiants = $r->fetchAll();

} catch (\Throwable $e) {
    echo $e->getMessage();
}

?>











<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Etudiants</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
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
                        <span class="title">Etudiants</span>
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
                        <div class="numbers">250</div>
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
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Carte Etudiants</h2>
                        <a href="form.php" class="btn">Nouveau carte</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Nom</td>
                                <td>Prenom</td>
                                <td>Filiere</td>
                                <td>Niveau</td>
                               
                                <td>Action</td>
                            </tr>
                        </thead>

                        <tbody>
                            <?php  foreach ($etudiants as $c => $e) {?>
                <tr>
                    <td><?=$e['nom']?></td>
                    <td><?=$e['prenom']?></td>
                    <td><?=$e['niveau']?></td>
                    <td><?=$e['filiere']?></td>

                    <td>
              <a style="text-decoration: none; background: green; color: wheat; font-size: 1.2rem; border-radius: 10px; padding: 5px 10px ;"href="carte.php?id=<?=$e['id']?>" >Voir la carte</a >
</div>
                    </td>
                </tr>
<?php } ?>
                           

                        </tbody>
                    </table>
                </div>
                <!-- ================= New Customers ================ -->
                
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>