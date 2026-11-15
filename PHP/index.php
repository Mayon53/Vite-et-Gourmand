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
            <div class="BigTitle">
                <?php
                require_once __DIR__ . '/../PHP_BASE/bigTitle.php';
                ?>
            </div>

            <div class="presentationrestaurant bg-light">
                <div class="conteneur text-center">
                    <h2 class="titreAccueil fs-1">LE RESTAURANT S'INVITE CHEZ VOUS</h2>
                    <p class="textePR fs-5">Depuis 25 ans, nous avons à cœur de faire voyager notre cuisine jusque dans votre salle à manger.
                        Profitez du confort de votre maison, tout en degustant un diner gastronomique
                        Retrouvez toute la fraîcheur et la générosité de nos plats faits maison à emporter !
                    </p>
                </div>
            </div>
            <div class="container-PP bg-warning">
                <div class="conteneur d-flex flex-row">
                    <div class="conteneur-text w-50 d-flex flex-column justify-content-center ps-4">
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
                    <div class="container-img w-50 p-0 m-0">
                        <img class="img-fluid" src="/../Images/platsCuisinesAccueil.png" alt="">
                    </div>
                </div>
            </div>
            <div class="container-commande bg-light">
                <div class="conteneur d-flex flex-row-reverse">
                    <div class="conteneur-text w-50 d-flex flex-column justify-content-center ps-4">
                        <div class="sous-containeur">
                            <h2 class="titreAccueil fs-1">COMMANDEZ VOS MENUS</h2>
                        </div>
                        <div class="pBT fs-5">
                            <p>Sélectionnez votre menu, indiquez le nombre de convives,
                                et nous cuisinons avec gourmandise votre dîner sur mesure,
                                livré chez vous et prêt à déguster !
                            </p>
                            <div class="btnBT">
                                <a class="btn btn-primary bg-primary border-0 rounded-0 ps-3 pe-3" href="#">COMMANDER</a>
                            </div>
                        </div>
                    </div>
                    <div class="container-img w-50 p-0 m-0">
                        <img class="img-fluid w-100" src="/../Images/commandeAccueil.JPEG" alt="">
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
    </body>
</body>