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
            <div class="row bg-secondary py-0 px-auto align-items-center">
                <div class="conteneur col-lg-8 p-0 lg-mx-auto">
                    <img class="img-fluid" src="/../Images/BigTitleAccueil.png" alt="">
                </div>
                <div class="conteneur col-lg-4">
                    <div class="lg-p-5 fs-1 pt-3 ps-0 mx-auto text-center text-lg-start">
                        <h2 class="titreBT">CONNEXION</h2>
                    </div>
                    <div class="conteneur  fs-4 text-center text-lg-start px-2">
                        <p>Connectez vous pour commander nos menus,</br>
                            voir l’état de vos commandes.</br>
                            Découvrez nos nouveaux plats en exclusivité.</p>
                    </div>
                    <div class="conteneur  fs-4 text-center text-lg-start p-5">
                        <a class="btn btn-primary bg-primary border-0 rounded-0 ps-3 pe-3" href="#">CONNEXION</a>
                    </div>
                </div>
            </div>
            <div class="cadreForm d-flex flex-column">
                <div class="titreForm w-50 mx-auto text-center my-5">
                    <h1>
                        CONNECTEZ VOUS
                    </h1>
                </div>
                <div class="formulaire bg-warning w-50 mx-auto py-4 px-4 mb-5 shadow p-3 mb-5 bg-body-dark">
                    <form class="px-4 py-4" action="requeteLogin.php" method="POST">
                        <div class="subTitreForm">
                            <h2 class="welcome fs-1">BIENVENUE</h2>
                            <p>Saisissez vos identifiants pour continuer.</p>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">E-mail</label>
                            <input type="email" name="email" class="form-control rounded-0 border-dark" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Saisissez votre email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control rounded-0 border-dark" id="exampleInputPassword1" placeholder="Saississez votre mot de passe">
                        </div>
                        <div class="mb-3 form-check d-flex align-items-center">
                            <input type=" checkbox" class="form-check-input border-dark" id="exampleCheck1">
                            <label class="form-check-label ps-2 " for="exampleCheck1">Se souvenir de moi</label>
                            <a class="forgetMdp ms-auto text-dark" href="#">Mot de passe oublié?</a>
                        </div>
                        <div class="bouton d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary bg-primary border-0 rounded-0">CONNEXION</button>
                        </div>
                        <div class="signup mt-4">
                            <p class="noLogin text-center">Vous n'avez pas encore de compte</p>
                            <div class="linkSignUp text-center mx-auto">
                                <a class="text-dark" href="/PHP/signup.php">Créer un compte</a>
                            </div>
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