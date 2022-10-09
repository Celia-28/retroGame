<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="pragma" content="no-cache" />
</head>
<body>

</body>
</html>

<?php include('parties/header.php'); ?>

        <!-- Barre de recherche -->
        <section class="game-search">
            <div class="container">
            <div class="logo">
                <img src="../images/RetroGame.png" class="img-logo">
                </div>

            <form action="">
                <input type="search" name="search" placeholder="Rechercher des jeux...">
                <input type="submit" name="submit" value="Rechercher" class="btn btn-search">
            </form>

            </div>

        </section>


        <!-- Main content Section Starts-->
        <div class="main-content">
            <div class="wrapper">
                <h2 class="Categories">Categories</h2>
                <br><br>
                <?php
                    if(isset($_SESSION['login']))
                    {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                    } 
                ?>
                <br><br>

                <div class="box-3 float-container">
                    <img src="../images/imgCat.webp" class="img-responsive img-curve">
                    <li><a href="manage-retroGaming.php">Rétro-Gaming</a></li>
                </div>

                <div class="box-3 float container">
                    <img src="../images/imgCat2.jpg" class="img-responsive img-curve">
                    <li><a href="manage-jeux.php">Jeux</a></li>
                </div>

                <div class="clearfix"></div>

            </div>
        </div>
        <!-- Main content section Ends-->

        <!-- Actualités Section Stars -->

        <section class="actu-menu">
            <div class="container">
                <h2 class="text-center">Les derniers jeux ajoutés</h2>

                <div class="actu-menu-box">
                    <div class="actu-menu-img">
                        <img src="../images/dbd.ico" alt="" class="img-actu img-curve">
                    </div>

                    <div class="actu-menu-desc">
                        <h4>Dead by Daylight</h4>
                        <p class="game-price">19.99€</p>
                        <p class="game-detail">
                            Jeu d'horreur d'action et de survie en ligne (4vs1) dans lequel un joueur joue le rôle du tueur et les autres jouent les survivants.
                        </p>
                        <br>
                        <a href="#" class="btn btn-primary">Commander</a>
                    </div>

                </div>

                <div class="actu-menu-box">
                    <div class="actu-menu-img">
                        <img src="../images/LIS.jpg" alt="" class="img-actu img-curve">
                    </div>

                    <div class="actu-menu-desc">
                        <h4>Life is Strange</h4>
                        <p class="game-price">19.99€</p>
                        <p class="game-detail">
                            Retracez l’histoire de Max Caulfield, qui découvre, en sauvant la vie de sa meilleure amie, Chloe Price, qu’elle peut remonter dans le temps...
                        </p>
                        <br>
                        <a href="#" class="btn btn-primary">Commander</a>
                    </div>

                </div>

                <div class="clearfix"></div>

            </div>
        </section>

        <!-- Actualités Section Ends -->

        
<?php include('parties/footer.php'); ?>
