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


    <!-- Formulaire d'ajout d'adhérent -->
    <form class="add-form_adherent" method="post">
        <h1 class="titre_page">Ajouter un adhérent</h1>
        <div class="entree_container">
            <label>Nom</label>
            <input type="text" name="nom">
        </div>
        <div class="entree_container">
            <label>Prenom</label>
            <input type="text" name="prenom">
        </div>
        <div class="entree_container">
            <label>Teléphone</label>
            <input type="text" name="telephone">
        </div>
        <div class="entree_container">
            <label>Mail</label>
            <input type="text" name="mail">
        </div>
        <div class="entree_container">
            <label>Section</label>
            <input type="text" name="section">
        </div>
        <div class="entree_container">
            <label>Entreprise</label>
            <input type="text" name="entreprise">
        </div>
        <div class="entree_container">
            <label>Adresse</label>
            <input type="text" name="adresse">
        </div>
        <div class="entree_container">
            <label>Secteur</label>
            <input type="text" name="secteur">
        </div>
        <div class="entree_container">
            <label>Ville</label>
            <input type="text" name="ville">
        </div>
        <div class="entree_container">
            <label>Salariés</label>
            <input type="number" name="nombre_salaries">
        </div>
        <div class="bouton_container">
            <input class="bouton" type="submit" value="ajouter un adhérent" name="ajouter">
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
    <!-- Liste adhérents -->
    <?php
    include('config.php');
    $reponse = $bdd->query('SELECT * FROM adherents');
    while ($donnees = $reponse->fetch()) {
        echo '<div>' . $donnees['nom']  . '<div>';
        echo '<div>' . $donnees['prenom']  . '<div>';
        echo '<div>' . $donnees['telephone']  . '<div>';
        echo '<div>' . $donnees['mail']  . '<div>';
        echo '<div>' . $donnees['section']  . '<div>';
        echo '<div>' . $donnees['entreprise']  . '<div>';
        echo '<div>' . $donnees['adresse']  . '<div>';
        echo '<div>' . $donnees['secteur']  . '<div>';
        echo '<div>' . $donnees['ville']  . '<div>';
        echo '<div>' . $donnees['nombre_salaries']  . '<div>';
        echo '<form method="post"><input name="id_adherent" type="hidden" value="' . $donnees['id'] . '">';
        echo '<input name="supprimer" type="submit" value="supprimer">
            </form>';
        echo '<form method="post"><input name="id_adherent" type="hidden" value="' . $donnees['id'] . '">';
        echo '<input name="modifier" type="submit" value="modifier">
            </form>';
        if (isset($_POST['supprimer'])) {
            $requete = 'DELETE FROM adherents WHERE id="' . $_POST['id_adherent'] . '"';
            $reponse = $bdd->query($requete);
            echo '<script>document.location.replace("ajouter_adherents.php");alert("L\'adhérent à bien été supprimé");</script>';
        }
        if (isset($_POST['modifier'])) {
            echo '<script>document.location.replace("modifier_adherents.php?id=' . $_POST['id_adherent'] . '");</script>';
        }
    }
    ?>
</body>

</html>