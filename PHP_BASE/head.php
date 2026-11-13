<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vite & Gourmand</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-yEPZ7jP9S0QKiUQ0m3jjsO4ProIW7wvR9gXkI7JOGa2XVsw53Yke2bsdkBbjmmiX" crossorigin="anonymous">
    <link href="../CSS/globalStyle.css" rel="stylesheet">
    <?php
    /* sécurise l'acces au head, (protection architecture du site) et empeche l'exécution directe de composants partiels */
    if (!defined('HEAD_AUTH_GRANTED')) {
        die('Page 404');
    }
    ?>
</head>

<body>
    <!-- Choix d'utiliser .php, plutot que le HTML, car cela me permet d'importer du code plus facilement,
     plutôt que de répeter plusieurs fois le meme code (head, header, footer)-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/js/bootstrap.bundle.min.js" integrity="sha384-WyOxWvTyr1QaMPfiPJSv76iReVthorl5uWlFtZPyK0IEB0hGzo9y5Bp9mYanr8Bu" crossorigin="anonymous"></script>
</body>

</html>