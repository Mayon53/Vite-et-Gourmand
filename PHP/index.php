<body>
    <?php
    $pageCSS = '/../CSS/index.css';
    define('HEAD_AUTH_GRANTED', true);
    require_once __DIR__ . '/../PHP_BASE/head.php';
    ?>

    <body>
        <header>
            <?php
            require_once __DIR__ . '/../PHP_BASE/header.php';
            ?>
        </header>
        <main>
            <div class="container-fluid m-0 p-0">
                <div class="row bg-secondary py-0 px-auto align-items-center">
                    <div class="conteneur col-lg-8 p-0 lg-mx-auto">
                        <img class="img-fluid" src="/../Images/BigTitleAccueil.png" alt="">
                    </div>
                    <div class="conteneur col-lg-4">
                        <div class="lg-p-5 fs-1 pt-3 ps-0 mx-auto text-center text-lg-start">
                            <h2 class="titreBT">BIENVENUE</h2>
                        </div>
                        <div class="conteneur  fs-4 text-center text-lg-start px-2">
                            <p>La cuisine de notre chef s'invite directement à votre table. </br>À emporter, chaud et prêt à déguster !</p>
                        </div>
                        <div class="conteneur  fs-4 text-center text-lg-start p-5">
                            <a class="btn btn-primary bg-primary border-0 rounded-0 ps-3 pe-3" href="/PHP/connexion.php">CONNEXION</a>
                        </div>
                    </div>
                </div>
                <div class="presentationrestaurant bg-light">
                    <div class="conteneur  text-center py-5 px-3">
                        <h2 class="titreAccueil fs-1">LE RESTAURANT S'INVITE CHEZ VOUS</h2>
                        <p class="textePR fs-5 pt-4">Depuis 25 ans, nous avons à cœur de faire voyager notre cuisine jusque dans votre salle à manger.
                            Profitez du confort de votre maison, tout en degustant un diner gastronomique
                            Retrouvez toute la fraîcheur et la générosité de nos plats faits maison à emporter !
                        </p>
                    </div>
                </div>
                <div class="container-fluid bg-warning m-0 p-0">
                    <div class="conteneur row align-items-center">
                        <div class="col-lg-6 text-center text-lg-end ps-4">
                            <div class="sous-containeur">
                                <h2 class="titreAccueil fs-1">QUI SOMMES NOUS?</h2>
                            </div>
                            <div class="pBT fs-5">
                                <p>Julie et José, deux amoureux de la gastronomie, vous proposent une cuisine savoureuse et gourmande,
                                    inspirée de notre patrimoine culinaire bordelais.
                                    Tous nos produits sont issus de circuits courts et proviennent de notre belle région.
                                </p>
                            </div>
                        </div>
                        <div class="container-img col-lg-6">
                            <img class="img-fluid" src="/../Images/platsCuisinesAccueil.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="container-fluid bg-light m-0 p-0">
                    <div class="conteneur row align-items-center">
                        <div class="container-img col-lg-6">
                            <img class="img-fluid w-100" src="/../Images/commandeAccueil.JPEG" alt="">
                        </div>
                        <div class="col-lg-6 text-center text-lg-start ps-4 pb-5">
                            <div class="sous-containeur">
                                <h2 class="titreAccueil fs-1">COMMANDEZ VOS MENUS</h2>
                            </div>
                            <div class="pBT fs-5">
                                <p>Sélectionnez votre menu, indiquez le nombre de convives,
                                    et nous cuisinons avec gourmandise votre dîner sur mesure,
                                    livré chez vous et prêt à déguster !
                                </p>
                                <div class="btnBT text-center text-lg-start ">
                                    <a class="btn btn-primary bg-primary border-0 rounded-0 ps-3 pe-3" href="/PHP/formCommande.php">COMMANDER</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="avis">

                </div>
        </main>
        <footer>
            <?php
            require_once __DIR__ . '/../PHP_BASE/footer.php';
            ?>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/js/bootstrap.bundle.min.js" integrity="sha384-WyOxWvTyr1QaMPfiPJSv76iReVthorl5uWlFtZPyK0IEB0hGzo9y5Bp9mYanr8Bu" crossorigin="anonymous"></script>
    </body>
</body>