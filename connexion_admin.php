<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CPME Administration</title>
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form method="post" class="formulaire_admin">
        <h1 class="formulaire_titre">Connectez vous à l'espace d'administration de la CPME Réunion</h1>
        <input name="identifiant" type="text" placeholder="Votre identifiant"></input><input name="mot_de_passe" type="password" placeholder="Votre mot de passe"></input><input name="submit" type="submit" value="Se connecter"></input>
    </form>
    <?php
    if (isset($_POST['submit']) & $_POST['identifiant'] == 'Admin00' & $_POST['mot_de_passe'] == 'Cpme974!') {
        echo '<script>document.location.replace("accueil_admin.php");</script>';
    } ?>
</body>

</html>