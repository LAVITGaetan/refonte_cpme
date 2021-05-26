<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre espace d'administration</title>
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>


<body>
    <!-- Inclure le menu admin -->
    <?php
    include('menu_admin.php'); ?>
    <h1 class="titre_page" style="color:#114d61;">Bienvenue sur votre espace d'administration</h1>
    <div class="flex-container">

        <!-- Carte lien vers les différentes pages  -->
        <div class="carte_admin" onclick="document.location.replace('liste_adherents.php');" onmouseover="document.getElementById('carte_adherent').src='images/profile.svg';" onmouseout="document.getElementById('carte_adherent').src='images/adherent.svg';">
            <img id="carte_adherent" class="carte_admin__image" src="images/adherent.svg" alt="Logo d'ajout d'adhérents">
            <span class="carte_admin__titre">Liste des adhérents</span>
            <span class="carte_admin__description">Ajouter, modifier ou supprimer des adhérents de la CPME</span>

        </div>

        <!-- Carte lien vers les différentes pages  -->
        <div class="carte_admin" onclick="document.location.replace('annuaire_adherents.php');" onmouseover="document.getElementById('carte_annuaire').src='images/team-leader_blue.svg';" onmouseout="document.getElementById('carte_annuaire').src='images/team-leader.svg';">
            <img id="carte_annuaire" class="carte_admin__image" src="images/team-leader.svg" alt="Logo de l'annuaire des adhérents">
            <span class="carte_admin__titre">Annuaire des adhérents</span>
            <span class="carte_admin__description">Ajouter, modifier ou supprimer des adhérents de l'annuaire</span>

        </div>

        <!-- Carte lien vers les différentes pages  -->
        <div class="carte_admin" onclick="document.location.replace('liste_articles.php');" onmouseover="document.getElementById('carte_article').src='images/articles_blue.svg';" onmouseout="document.getElementById('carte_article').src='images/articles.svg';">
            <img id="carte_article" class="carte_admin__image" src="images/articles.svg" alt="Logo de l'annuaire des adhérents">
            <span class="carte_admin__titre">Liste des articles</span>
            <span class="carte_admin__description">Ajouter, modifier ou supprimer des articles du site</span>

        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>