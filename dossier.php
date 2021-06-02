<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dossier</title>
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<!-- Inclure le menu du site -->
<?php
include('menu_admin.php');
?>

<body>
    <div class="dossier_couverture">
        <div class="couverture_logo">
            <img src="images/anchor.svg" alt="Logo de l'ancrage territorial'">
        </div>
        <div class="couverture_texte">
            <h3 class="couverture_titre">Ancrage Territorial</h3>
            <p class="couverture_description">La CPME Réunion mène des actions en faveur d'un modèle de développement économique ancré sur le territoire réunionnais.</p>
        </div>
    </div>
    <!-- Barre de recherche -->
    <div class="barre_options">
        <form class="options_formulaire" method="post">
            <select class="options_select" name="section">
                <option value="null">Section</option>
                <option <?php if (isset($_GET['section']) && $_GET['section'] == 'artisanat') {
                            echo ' selected ';
                        } ?> value="artisanat">Artisanat</option>
                <option <?php if (isset($_GET['section']) && $_GET['section'] == 'btp/industrie') {
                            echo ' selected ';
                        } ?> value="btp/industrie">BTP/Industrie</option>
                <option <?php if (isset($_GET['section']) && $_GET['section'] == 'commerce') {
                            echo ' selected ';
                        } ?> value="commerce">Commerce</option>
                <option <?php if (isset($_GET['section']) && $_GET['section'] == 'services') {
                            echo ' selected ';
                        } ?> value="services">Services</option>
            </select>
            <select class="options_select" name="secteur">
                <option value="null">Secteur</option>
                <option <?php if (isset($_GET['secteur']) && $_GET['secteur'] == 'nord') {
                            echo ' selected ';
                        } ?> value="nord">Nord</option>
                <option <?php if (isset($_GET['secteur']) && $_GET['secteur'] == 'ouest') {
                            echo ' selected ';
                        } ?> value="ouest">Ouest</option>
                <option <?php if (isset($_GET['secteur']) && $_GET['secteur'] == 'sud') {
                            echo ' selected ';
                        } ?> value="sud">Sud</option>
                <option <?php if (isset($_GET['secteur']) && $_GET['secteur'] == 'est') {
                            echo ' selected ';
                        } ?> value="est">Est</option>
            </select>
            <input class="options_submit" type="submit" value="Rechercher" name="rechercher"></input>
        </form>
    </div>
    <div class="flex-container">
        <div class="carte_article">
            <div class="carte_article_image"></div>
            <div class="carte_article_infos">
                <h4 class="carte_article_titre">Statut des salariés en septaine</h4>
                <p class="carte_article_description">
                    Le décret n° 2021-13 du 8 janvier 2021 permet à certaines catégories de salariés se trouvant dans l'impossibilité de travailler en raison de la covid-19 de bénéficier du régime dérogatoire de versement des indemnités de la sécurité sociale et des indemnités complémentaires de l'employeur.</p>
                <input class="carte_article_bouton" type="submit" value="Lire l'article">
                </div>
        </div>
        <div class="carte_article">
            <div class="carte_article_image"></div>
            <div class="carte_article_infos">
                <h4 class="carte_article_titre">Statut des salariés en septaine</h4>
                <p class="carte_article_description">
                    Le décret n° 2021-13 du 8 janvier 2021 permet à certaines catégories de salariés se trouvant dans l'impossibilité de travailler en raison de la covid-19 de bénéficier du régime dérogatoire de versement des indemnités de la sécurité sociale et des indemnités complémentaires de l'employeur.</p>
                <input onclick="document.location.replace('article.php')" class="carte_article_bouton" type="submit" value="Lire l'article">
                </div>
        </div>
        <div class="carte_article">
            <div class="carte_article_image"></div>
            <div class="carte_article_infos">
                <h4 class="carte_article_titre">Statut des salariés en septaine</h4>
                <p class="carte_article_description">
                    Le décret n° 2021-13 du 8 janvier 2021 permet à certaines catégories de salariés se trouvant dans l'impossibilité de travailler en raison de la covid-19 de bénéficier du régime dérogatoire de versement des indemnités de la sécurité sociale et des indemnités complémentaires de l'employeur.</p>
                <input onclick="document.location.replace('article.php')" class="carte_article_bouton" type="submit" value="Lire l'article">
                </div>
        </div>
        <div class="carte_article">
            <div class="carte_article_image"></div>
            <div class="carte_article_infos">
                <h4 class="carte_article_titre">Statut des salariés en septaine</h4>
                <p class="carte_article_description">
                    Le décret n° 2021-13 du 8 janvier 2021 permet à certaines catégories de salariés se trouvant dans l'impossibilité de travailler en raison de la covid-19 de bénéficier du régime dérogatoire de versement des indemnités de la sécurité sociale et des indemnités complémentaires de l'employeur.</p>
                <input onclick="document.location.replace('article.php')" class="carte_article_bouton" type="submit" value="Lire l'article">
                </div>
        </div>
    </div>

</body>

</html>