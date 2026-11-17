<body>
    <?php
    $pageCSS = '/../CSS/connexion.css';
    define('HEAD_AUTH_GRANTED', true);
    require_once __DIR__ . '/../PHP_BASE/head.php';
    ?>
    <header>
        <?php
        require_once __DIR__ . '/../PHP_BASE/header.php';
        ?>
    </header>
    <main>
        <div class="container-BT-fluid d-flex flex-row m-0 p-0 ">
            <div class="container-img w-70 column p-0 m-0">
                <img class="img-fluid" src="/../Images/BigTitleAccueil.png" alt="">
            </div>
            <div class="container d-flex flex-column justify-content-center bg-secondary ps-4">
                <div class="p-5 fs-1 ps-0">
                    <h2 class="titreBT">COMMANDER VOTRE MENU</h2>
                </div>
                <div class="pBT fs-4">
                    <p>Sélectionnez votre menu</br>
                        Indiquez le nombre de convives.</br>
                        Faites vous livrez à la date et à l'heure de votre choix.</p>
                </div>
                <div class="btnBT mt-4">
                    <a class="btn btn-primary bg-primary border-0 rounded-0 ps-3 pe-3" href="#">CONNEXION</a>
                </div>
            </div>
        </div>
        <div class="cadreForm d-flex flex-column">
            <div class="titreForm w-50 mx-auto text-center my-5">
                <h1>
                    PREPAREZ VOTRE COMMANDE
                </h1>
            </div>
            <div class="formulaire bg-warning w-50 mx-auto py-4 px-4 mb-5 shadow p-3 mb-5 bg-body-dark">
                <form class="px-4 py-4">
                    <div class="subTitreForm">
                        <h2 class="welcome fs-2">VOS INFORMATIONS</h2>
                    </div>
                    <div class="mb-3 py-0 row">
                        <div class="col-12 col-md-8 mb-3 mb-md-0">
                            <label for="exampleInputName1" class="form-label">Selectionnez votre menu</label>
                            <select class="form-select rounded-0 border-dark" aria-label="Default select example">
                                <option selected>Choisissez votre menu</option>
                                <option value="1">L'Incontournable Bordelais</option>
                                <option value="2">Le jardin de Bordeaux</option>
                                <option value="3">Le Banquet des Chartrons</option>
                                <option value="3">Les Trésors du Bassin</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-4">
                            <label for="exampleInputNbPers1" class="form-label">Nombre de Personnes</label>
                            <input type="text" class="form-control rounded-0 border-dark" id="exampleInputNbPers1" aria-describedby="nameHelp" placeholder="Nb de personnes">
                            <p class="minPers mb-0">Min 2 personnes</p>

                        </div>
                    </div>
                    <div class="mb-3 py-0 row">
                        <div class="col-12 col-md-6 mb-3 mb-md-0">
                            <label for="exampleInputName1" class="form-label">Nom</label>
                            <input type="text" class="form-control rounded-0 border-dark" id="exampleInputName1" aria-describedby="nameHelp" placeholder="Nom" value="Nom">
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="exampleInputFirstName1" class="form-label">Prénom</label>
                            <input type="text" class="form-control rounded-0 border-dark" id="exampleInputFirstName1" placeholder="Prénom">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputFirstEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control rounded-0 border-dark" id="exampleInputFirstEmail1" placeholder="Saisissez votre e-mail, adress@mail.fr">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputAdress1" class="form-label">Adresse</label>
                        <input type="text" class="form-control rounded-0 border-dark" id="exampleInputAdress1" placeholder="Numéro et Rue">
                    </div>
                    <div class="mb-3 py-0 row">
                        <div class="col-12 col-md-6 mb-3 mb-md-0">
                            <label for="exampleInputPostal1" class="form-label">Code Postal</label>
                            <input type="text" class="form-control rounded-0 border-dark" id="exampleInputPostal1" placeholder="Code">
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="exampleInputCity1" class="form-label">Ville</label>
                            <input type="text" class="form-control rounded-0 border-dark" id="exampleInputCity1" placeholder="Ville">
                        </div>
                    </div>
                    <div class="mb-3 py-0 row">
                        <div class="col">
                            <label for="exampleInputDate1" class="form-label">Date</label>
                            <input type="Date" class="form-control rounded-0 border-dark" id="exampleInputDate1">
                        </div>
                        <div class="col">
                            <label for="exampleInputHour1" class="form-label">Heure</label>
                            <input type="Time" class="form-control rounded-0 border-dark" id="exampleInputHour1">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputDeliveryAdress1" class="form-label">Adresse de Livraison</label>
                        <input type="text" class="form-control rounded-0 border-dark" id="exampleInputDeliveryAdress1" placeholder="Numéro et Rue">
                    </div>
                    <div class="mb-3 py-0 row">
                        <div class="col-12 col-md-6 mb-3 mb-md-0">
                            <label for="exampleInputDeliveryPostal1" class="form-label">Code Postal</label>
                            <input type="text" class="form-control rounded-0 border-dark" id="exampleInputDeliveryPostal1" placeholder="Code">
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="exampleInputDeliveryCity1" class="form-label">Ville</label>
                            <input type="text" class="form-control rounded-0 border-dark" id="exampleInputDeliveryCity1" placeholder="Ville">
                        </div>
                        <p class="delivery mb-0">Frais de livraison : 5€ (majoré de 0,59€/km pour toute livraison en dehors de Bordeaux)</p>
                    </div>
                    <div class="bouton d-flex justify-content-center my-5">
                        <button type="submit" class="btn btn-primary bg-primary border-0 rounded-0">COMMANDER VOTRE MENU</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer>
        <?php
        require_once __DIR__ . '/../PHP_BASE/footer.php';
        ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/js/bootstrap.bundle.min.js" integrity="sha384-WyOxWvTyr1QaMPfiPJSv76iReVthorl5uWlFtZPyK0IEB0hGzo9y5Bp9mYanr8Bu" crossorigin="anonymous"></script>
</body>