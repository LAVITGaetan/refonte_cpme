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
    <!-- Inclure le menu -->
    <?php include("menu_admin.php"); ?>

    <!-- Inclure le menu -->
    <h1 class="titre_page">Ajouter un adhérent à la CPME</h1>

    <!-- Formulaire d'ajout d'adhérent -->
    <form class="add-form_adherent" method="post">
        <div class="add-form_div">
            <label>Nom</label><br>
            <input class="add-form_input" type="text" name="nom">
        </div>
        <div class="add-form_div">
            <label>Prenom</label><br>
            <input class="add-form_input" type="text" name="prenom">
        </div>
        <div class="add-form_div">
            <label>Teléphone</label><br>
            <input class="add-form_input" type="text" name="telephone">
        </div>
        <div class="add-form_div">
            <label>Email</label><br>
            <input class="add-form_input" type="text" name="mail">
        </div>
        <div class="add-form_div">
            <label>Section</label><br>
            <select class="add-form_input" name="section">
                <option disabled value="null">Selectionnez une section</option>
                <option value="artisanat">Artisanat</option>
                <option value="btp/industrie">BTP/Industrie</option>
                <option value="commerce">Commerce</option>
                <option value="services">Services</option>
            </select>
        </div>
        <div class="add-form_div">
            <label>Entreprise</label><br>
            <input class="add-form_input" type="text" name="entreprise">
        </div>
        <div class="add-form_div">
            <label>Adresse</label><br>
            <input class="add-form_input" type="text" name="adresse">
        </div>
        <div class="add-form_div">
            <label>Secteur</label><br>
            <select class="add-form_input" name="secteur">
                <option disabled value="null">Selectionnez un secteur</option>
                <option value="nord">Nord</option>
                <option value="ouest">Ouest</option>
                <option value="sud">Sud</option>
                <option value="est">Est</option>
            </select>
        </div>
        <div class="add-form_div">
            <label>Ville</label><br>
            <input class="add-form_input" type="text" name="ville">
        </div>
        <div class="add-form_div">
            <label>Salariés</label><br>
            <input class="add-form_input" type="number" name="nombre_salaries">
        </div>
        <div class="submit_div">
            <input class="submit" type="submit" value="ajouter un adhérent" name="ajouter">
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
        echo '<script>alert("L\'adhérent a bien été ajouté");
        document.location.replace("ajouter_adherents.php");</script>';
    }
    ?>
</body>

</html>