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
        <div class="container-fluid m-0 p-0">
            <div class="row bg-secondary pt-0 px-auto align-items-center">
                <div class="col-lg-8 p-0 lg-mx-auto">
                    <img class="img-fluid" src="/../Images/BigTitleAccueil.png" alt="">
                </div>
                <div class="col-lg-4">
                    <div class="lg-p-5 fs-1 pt-3 ps-0 mx- auto text-center text-lg-start">
                        <h2 class="titreBT">CREER VOTRE COMPTE</h2>
                    </div>
                    <div class="pBT fs-4 text-center text-lg-start px-2">
                        <p>Créer votre espace pour commander nos menus,</br>
                            voir l’état de vos commandes.</br>
                            Découvrez nos nouveaux plats en exclusivité.</p>
                    </div>
                    <div class="pBT fs-4 text-center text-lg-start p-5">
                        <a class="btn btn-primary bg-primary border-0 rounded-0 ps-3 pe-3" href="#">CONNEXION</a>
                    </div>
                </div>
            </div>
            <div class="cadreForm d-flex flex-column mx-2 lg-mx-auto">
                <div class="titreForm mx-auto text-center my-5">
                    <h1>
                        CREEZ VOTRE COMPTE
                    </h1>
                </div>
                <div class="formulaire bg-warning mx-auto py-4 px-4 mb-5 shadow p-3 mb-5 bg-body-dark">
                    <form class="lg-px-4 lg-py-4" method="POST">
                        <div class="subTitreForm">
                            <h2 class="welcome fs-2">VOS INFORMATIONS</h2>
                        </div>
                        <div class="mb-3 py-0 row">
                            <div class="col-12 col-md-6 mb-3 mb-md-0">
                                <label for="exampleInputName1" class="form-label">Nom</label>
                                <input type="text" class="form-control rounded-0 border-dark" name="name" id="exampleInputName1" aria-describedby="nameHelp" placeholder="Nom">
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="exampleInputFirstName1" class="form-label">Prénom</label>
                                <input type="text" class="form-control rounded-0 border-dark" name="firstName" id="exampleInputFirstName1" placeholder="Prénom">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="basic-phone" class="form-label">Téléphone</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon3">+ 33</span>
                                <input type="text" class="form-control rounded-0 border-dark" iname="Téléphone" id="basic-phone" aria-describedby="basic-addon3 basic-addon4" placeholder="5 01 23 45 67">
                            </div>
                            <div class="form-text" id="basic-addon4">Example help text goes outside the input group.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputFirstEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control rounded-0 border-dark" name="Email" id="exampleInputFirstEmail1" placeholder="Saisissez votre e-mail, adress@mail.fr">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputAdress1" class="form-label">Adresse</label>
                            <input type="text" class="form-control rounded-0 border-dark" name="Adress" id="exampleInputAdress1" placeholder="Numéro et Rue">
                        </div>
                        <div class="mb-3 py-0 row">
                            <div class="col-12 col-md-6 mb-3 mb-md-0">
                                <label for="exampleInputPostal1" class="form-label">Code Postal</label>
                                <input type="text" class="form-control rounded-0 border-dark" name="Postal" id="exampleInputPostal1" placeholder="Code">
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="exampleInputCity1" class="form-label">Ville</label>
                                <input type="text" class="form-control rounded-0 border-dark" name="Ville" id="exampleInputCity1" placeholder="Ville">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Mot de Passe</label>
                            <input type="password" class="form-control rounded-0 border-dark" name="Password" id="exampleInputPassword1" placeholder="Votre mot de Passe">
                            <p class="mdpRules">10 caractère minimum constitué au minima d’un caractère spécial, une majuscule, une minuscule, un chiffre</p>
                        </div>
                        <div class="bouton d-flex justify-content-center my-5">
                            <button type="submit" class="btn btn-primary bg-primary border-0 rounded-0">CREER VOTRE COMPTE</button>
                        </div>
                    </form>
                </div>
            </div>
    </main>
    <?php
    // On vérifie si le formulaire a été soumis
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // On récupère la valeur et on la sécurise contre les failles XSS
        $name = htmlspecialchars($_POST['name'] ?? '');

        echo "<h3>Résultat reçu :</h3>";
        echo "<p>Bonjour <strong>" . $name . "</strong> !</p>";
    }
    ?>
    <footer>
        <?php
        require_once __DIR__ . '/../PHP_BASE/footer.php';
        ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/js/bootstrap.bundle.min.js" integrity="sha384-WyOxWvTyr1QaMPfiPJSv76iReVthorl5uWlFtZPyK0IEB0hGzo9y5Bp9mYanr8Bu" crossorigin="anonymous"></script>
</body>