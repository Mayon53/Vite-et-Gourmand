<body>
    <?php
    $pageCSS = '/../CSS/menu.css';
    define('HEAD_AUTH_GRANTED', true);
    require_once __DIR__ . '/../PHP_BASE/head.php';
    ?>
    <header>
        <?php
        require_once __DIR__ . '/../PHP_BASE/header.php';
        ?>
    </header>
    <main>
        <div class="container-fluid m-0 p-0">
            <div class="row bg-secondary py-0 px-auto align-items-center">
                <div class="col-lg-8 p-0 lg-mx-auto">
                    <img class="img-fluid" src="/../Images/BigTitleAccueil.png" alt="">
                </div>
                <div class="col-lg-4">
                    <div class="lg-p-5 fs-1 pt-3 ps-0 mx- auto text-center text-lg-start">
                        <h2 class="titreBT">MENUS</h2>
                    </div>
                    <div class="pBT fs-4 text-center text-lg-start px-2">
                        <p>Dégustez nos menus de saison,
                            </br>élaborés avec des produits choisis avec soin,
                            </br>respectant un circuit court et provenant de notre belle région.</p>
                    </div>
                    <div class="pBT fs-4 text-center text-lg-start p-5">
                        <a class="btn btn-primary bg-primary border-0 rounded-0 ps-3 pe-3" href="/PHP/connexion.php">CONNEXION</a>
                    </div>
                </div>
            </div>
            <div class="container-Menu1 bg-light pb-3">
                <div class="conteneur row pt-5 px-auto lg-ms-3 lg-pb-0 align-items-center">
                    <div class="col-lg-6 text-center text-lg-start px-2">
                        <div class="sous-containeur pt-5 text-center text-lg-start">
                            <h2 class="titreMenu fs-1">L'INCONTOURNABLE BORDELAIS</h2>
                        </div>
                        <div class="pBT fs-5 text-center text-lg-start px-2">
                            <p>Redécouvrez les plats traditionnels de notre belle région, cuisinés maison à partir des meilleurs produits locaux.
                            </p>
                        </div>
                        <div class="pBT fs-5">
                            <p>
                                PERSONNE MIN : 2
                            </p>
                        </div>
                        <div class="pBT fs-5">
                            <p>
                                35,00 TTC/PERSONNE
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid" src="/../Images/MenuIncontournable.png" alt="">
                    </div>
                </div>
                <div class="bouton text-center py-5">
                    <a class="btn btn-primary bg-primary border-0 rounded-0 ps-3 pe-3 mx-auto" href="#">VOIR LE MENU</a>
                </div>
            </div>
            <div class="container-Menu2 bg-warning pb-3">
                <div class="conteneur row pt-5 px-auto lg-ms-3 align-items-center">
                    <div class="col-lg-6 text-center text-lg-start px-2">
                        <div class="sous-containeur pt-5 text-center text-lg-start">
                            <h2 class="titreMenu fs-1">LE JARDIN DE BORDEAUX</h2>
                        </div>
                        <div class="pBT fs-5 text-center text-lg-start px-2">
                            <p>Une cuisine végétarienne gourmande et de saison, qui met à l'honneur les légumes et récoltes de nos producteurs locaux.
                            </p>
                        </div>
                        <div class="pBT fs-5">
                            <p>
                                PERSONNE MIN : 2
                            </p>
                        </div>
                        <div class="pBT fs-5">
                            <p>
                                35,00 TTC/PERSONNE
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid" src="/../Images/Menu2Vegge.png" alt="">
                    </div>
                </div>
                <div class="bouton text-center py-5">
                    <a class="btn btn-primary bg-primary border-0 rounded-0 ps-3 pe-3 mx-auto" href="#">VOIR LE MENU</a>
                </div>
            </div>
            <div class="container-Menu3 bg-light pb-3">
                <div class="conteneur row pt-5 px-auto lg-ms-3 align-items-center">
                    <div class="col-lg-6 text-center text-lg-start px-2">
                        <div class="sous-containeur pt-5 text-center text-lg-start">
                            <h2 class="titreMenu fs-1">LE BANQUET DES CHARTRONS</h2>
                        </div>
                        <div class="pBT fs-5 text-center text-lg-start px-2">
                            <p>Un menu festif et généreux qui met à l'honneur tout le savoir-faire et les saveurs d'exception de notre gastronomie bordelaise.
                            </p>
                        </div>
                        <div class="pBT fs-5">
                            <p>
                                PERSONNE MIN : 2
                            </p>
                        </div>
                        <div class="pBT fs-5">
                            <p>
                                55,00 TTC/PERSONNE
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid" src="/../Images/Menu3.png" alt="">
                    </div>
                </div>
                <div class="bouton text-center py-5">
                    <a class="btn btn-primary bg-primary border-0 rounded-0 ps-3 pe-3 mx-auto" href="#">VOIR LE MENU</a>
                </div>
            </div>
            <div class="container-Menu4 bg-warning pb-3">
                <div class="conteneur row pt-5 px-auto lg-ms-3 align-items-center">
                    <div class="col-lg-6 text-center text-lg-start px-2">
                        <div class="sous-containeur pt-5 text-center text-lg-start">
                            <h2 class="titreMenu fs-1">LES TRESORS DU BASSIN</h2>
                        </div>
                        <div class="pBT fs-5 text-center text-lg-start px-2">
                            <p>Une invitation iodée et raffinée mettant à l'honneur les poissons et produits frais de notre littoral.
                            </p>
                        </div>
                        <div class="pBT fs-5">
                            <p>
                                PERSONNE MIN : 2
                            </p>
                        </div>
                        <div class="pBT fs-5">
                            <p>
                                40,00 TTC/PERSONNE
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid" src="/../Images/Menu4.png" alt="">
                    </div>
                </div>
                <div class="bouton text-center py-5">
                    <a class="btn btn-primary bg-primary border-0 rounded-0 ps-3 pe-3 mx-auto" href="#">VOIR LE MENU</a>
                </div>
            </div>
            <footer>
                <?php
                require_once __DIR__ . '/../PHP_BASE/footer.php';
                ?>
            </footer>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/js/bootstrap.bundle.min.js" integrity="sha384-WyOxWvTyr1QaMPfiPJSv76iReVthorl5uWlFtZPyK0IEB0hGzo9y5Bp9mYanr8Bu" crossorigin="anonymous"></script>

            <body>