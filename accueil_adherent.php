<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre espace adhérent</title>
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>


<body>
    
    <h1 class="titre_page" style="color:#114d61;">Bienvenue sur votre espace adhérent</h1>
    <div class="flex-container">

        <!-- Carte lien vers les différentes pages  -->
        <div class="carte_admin" onclick="document.location.replace('adherents.php');" onmouseover="document.getElementById('carte1_adherent').src='images/team-leader_blue.svg';" onmouseout="document.getElementById('carte1_adherent').src='images/team-leader.svg';">
            <img id="carte1_adherent" class="carte_admin__image" src="images/team-leader.svg" alt="Logo de l'annuaire des adhérents">
            <span class="carte_admin__titre">Annuaire des adhérents</span>
            <span class="carte_admin__description">Consultez la liste de nos adhérents afin d'entrer en contact avec eux</span>

        </div>

        <!-- Carte lien vers les différentes pages  -->
        <div class="carte_admin" onclick="document.location.replace('annuaire_adherents.php');" onmouseover="document.getElementById('carte2_adherent').src='images/annuaire.svg';" onmouseout="document.getElementById('carte2_adherent').src='images/annuaire_white.svg';">
            <img id="carte2_adherent" class="carte_admin__image" src="images/annuaire_white.svg" alt="Logo de l'annuaire des adhérents">
            <span class="carte_admin__titre">Annuaire des mandats</span>
            <span class="carte_admin__description">Consultez la liste des différentes instances mandataires de la CPME</span>

        </div>

        <!-- Carte lien vers les différentes pages  -->
        <div class="carte_admin" onclick="document.location.replace('liste_articles.php');" onmouseover="document.getElementById('carte3_adherent').src='images/file.svg';" onmouseout="document.getElementById('carte3_adherent').src='images/file_white.svg';">
            <img id="carte3_adherent" class="carte_admin__image" src="images/file_white.svg" alt="Logo de l'annuaire des adhérents">
            <span class="carte_admin__titre">Documents utiles</span>
            <span class="carte_admin__description">Consultez la liste des documents mis à votre disposition par la CPME</span>

        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>