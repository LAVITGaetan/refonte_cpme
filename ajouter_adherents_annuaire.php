<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un adhérent</title>
    <!-- CSS-->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Ajouter un adhérent</h1>

    <!-- Formulaire d'ajout d'adhérent -->
    <form class="add-form_adherent" method="post">
        <div class="">
            <label>Nom</label>
            <input type="text" name="nom">
        </div>
        <div class="">
            <label>Prenom</label>
            <input type="text" name="prenom">
        </div>
        <div class="">
            <label>Téléphone</label>
            <input type="text" name="telephone">
        </div>
        <div class="">
            <label>Mail</label>
            <input type="text" name="mail">
        </div>
        <div class="">
            <label>Section</label>
            <input type="text" name="section">
        </div>
        <div class="">
            <label>Entreprise</label>
            <input type="text" name="entreprise">
        </div>
        <div class="">
            <label>Adresse</label>
            <input type="text" name="adresse">
        </div>
        <div class="">
            <label>Secteur</label>
            <input type="text" name="secteur">
        </div>
        <div class="">
            <label>Ville</label>
            <input type="text" name="ville">
        </div>
        <div class="">
            <label>Nombre de salariés</label>
            <input type="text" name="nombre_salaries">
        </div>
        <div>
            <input type="submit" value="ajouter un adhérent" name="ajouter">
        </div>
    </form>
    <!-- Fin du formulaire d'ajout d'adhérent -->

    <!-- Requete d'ajout d'adherent -->
    <?php
    if (isset($_POST['ajouter']) & !empty($_POST['nom']) & !empty($_POST['prenom']) & !empty($_POST['telephone']) & !empty($_POST['mail']) & !empty($_POST['section']) & !empty($_POST['entreprise']) & !empty($_POST['adresse']) & !empty($_POST['secteur']) & !empty($_POST['ville']) & !empty($_POST['nombre_salaries'])) {
        include('config.php');
        $reponse = $bdd->query('SELECT * FROM adherents');
        $requete = 'INSERT INTO adherents VALUES(NULL, "' . $_POST['nom'] . '", "' . $_POST['prenom'] . '", "' . $_POST['telephone'] . '", "' . $_POST['mail'] . '", "' . $_POST['section'] . '", "' . $_POST['entreprise'] . '", "' . $_POST['adresse'] . '", "' . $_POST['secteur'] . '", "' . $_POST['ville'] . '", "' . $_POST['nombre_salaries'] . '")';
        $resultat = $bdd->query($requete);
        $bdd = null;
    }
    ?>
    
</body>

</html>