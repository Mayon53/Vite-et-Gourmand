    <?php
    require_once __DIR__ . '/../config.php';

    // récuperation données du formulaire d'inscription
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $telephone = $_POST['telephone'];
        $email = $_POST['email'];
        $adress = $_POST['adress'];
        $codePostal = $_POST['codePostal'];
        $ville = $_POST['ville'];
        $password = $_POST['password'];

        try {
            // 3. Prépareration de la requête SQL 
            $sql = "INSERT INTO Utilisateur (Nom, Prénom, Téléphone, Email, Adresse, Code_Postal, Ville, Password) VALUES (:nom, :prenom, :telephone, :email, :adress, :codePostal, :ville, :password)";
            $stmt = $pdo->prepare($sql);

            // 4. Exécution de la requête 
            $stmt->execute([
                'nom' => $nom,
                'prenom' => $prenom,
                'telephone' => $telephone,
                'email' => $email,
                'adress' => $adress,
                'codePostal' => $codePostal,
                'ville' => $ville,
                'password' => $password
            ]);
            header('Location: connexion.php');
            exit();
        } catch (\PDOException $e) {
            echo "<div class='alert alert-danger mt-3'>Erreur lors de l'insertion : " . $e->getMessage() . "</div>";
        }
    }
