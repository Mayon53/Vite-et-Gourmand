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
            <div class="container-img w-70 p-0 m-0">
                <img class="img-fluid" src="/../Images/BigTitleAccueil.png" alt="">
            </div>
            <div class="container d-flex flex-column justify-content-center bg-secondary ps-4">
                <div class="p-5 fs-1 ps-0">
                    <h2 class="titreBT">CREER VOTRE COMPTE</h2>
                </div>
                <div class="pBT fs-4">
                    <p>Créer votre espace pour commander nos menus,</br>
                        voir l’état de vos commandes.</br>
                        Découvrez nos nouveaux plats en exclusivité.</p>
                </div>
                <div class="btnBT mt-4">
                    <a class="btn btn-primary bg-primary border-0 rounded-0 ps-3 pe-3" href="#">CONNEXION</a>
                </div>
            </div>
        </div>
        <div class="cadreForm d-flex flex-column">
            <div class="titreForm w-50 mx-auto text-center my-5">
                <h1>
                    CREEZ VOTRE COMPTE
                </h1>
            </div>
            <div class="formulaire bg-warning w-50 mx-auto py-4 px-4 mb-5 shadow p-3 mb-5 bg-body-dark">
                <form class="px-4 py-4">
                    <div class="subTitreForm">
                        <h2 class="welcome fs-2">VOS INFORMATIONS</h2>
                    </div>
                    <div class="mb-3 py-0 row">
                        <div class="col">
                            <label for="exampleInputName1" class="form-label">Nom</label>
                            <input type="text" class="form-control rounded-0 border-dark" id="exampleInputName1" aria-describedby="nameHelp" placeholder="Nom" value="Nom">
                        </div>
                        <div class="col">
                            <label for="exampleInputFirstName1" class="form-label">Prénom</label>
                            <input type="text" class="form-control rounded-0 border-dark" id="exampleInputFirstName1" placeholder="Prénom">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="basic-phone" class="form-label">Téléphone</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon3">+ 33</span>
                            <input type="text" class="form-control rounded-0 border-dark" id="basic-phone" aria-describedby="basic-addon3 basic-addon4" placeholder="5 01 23 45 67">
                        </div>
                        <div class="form-text" id="basic-addon4">Example help text goes outside the input group.</div>
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
                        <div class="col">
                            <label for="exampleInputPostal1" class="form-label">Code Postal</label>
                            <input type="text" class="form-control rounded-0 border-dark" id="exampleInputPostal1" placeholder="Code">
                        </div>
                        <div class="col">
                            <label for="exampleInputCity1" class="form-label">Ville</label>
                            <input type="text" class="form-control rounded-0 border-dark" id="exampleInputCity1" placeholder="Numéro et Rue">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mot de Passe</label>
                        <input type="password" class="form-control rounded-0 border-dark" id="exampleInputPassword1" placeholder="Votre mot de Passe">
                        <p class="mdpRules">10 caractère minimum constitué au minima d’un caractère spécial, une majuscule, une minuscule, un chiffre</p>
                    </div>
                    <div class="bouton d-flex justify-content-center my-5">
                        <button type="submit" class="btn btn-primary bg-primary border-0 rounded-0">CREER VOTRE COMPTE</button>
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

</body>