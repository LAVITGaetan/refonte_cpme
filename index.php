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
<body>
    <style>
 
        .titre_index {
            color: #114d61;
            text-align: center;
            margin: 50px;
        }
        a{
            color: #114d61;
text-decoration: underline;
font-weight: bold;
        }
        li{
            margin-bottom: 15px;
            text-align: center;
        }
        .indisponible{
            color: #a11815;
            font-style: italic;
            font-weight: normal;
            text-decoration: none;
        }
        .indisponible:hover{
cursor: not-allowed;
        }
    </style>
    <h1 class="titre_page">Refonte graphique de la CPME</h1>

    <div class="visiteur">
        <h3 class="titre_index">Pages a destination des visiteurs du site</h3>
        <ul>
            <li><a class="indisponible" href="accueil.php">Page d'accueil</a></li>
            <li><a class="indisponible" href="about.php">Qui sommes-nous?</a></li>
            <li><a class="indisponible" href="actualites.php">Actualités</a></li>
            <li><a href="mandats.php">Nos mandats</a></li>
            <li><a class="indisponible" href="partenaires.php">Nos partenaires</a></li>
            <li><a href="dossiers.php">Les dossiers</a></li>
            <li><a href="dossier.php">Exemple de dossier</a></li>
            <li><a class="indisponible" href="article.php">Exemple d'article</a></li>
        </ul>
    </div>

    <div class="adherent">
        <h3 class="titre_index">Pages a destination des adhérents de la CPME</h3>

        <ul>
            <li><a class="indisponible" href="connexion_adherent.php">Connexion adhérent</a></li>
            <li><a href="accueil_adherent.php">Accueil adhérent</a></li>
            <li><a href="annuaire_adherents.php">Annuaire des adhérents</a></li>
            <li><a href="annuaire_mandats.php">Annuaire des Mandats</a></li>
            <li><a class="indisponible" href="documents_utile.php">Documents utiles</a></li>
        </ul>
    </div>

    <div class="admin">
        <h3 class="titre_index">Pages a destination des administrateurs du site</h3>

        <ul>
            <li><a href="connexion_admin.php">Connexion admin</li>
            <li><a href="accueil_admin.php">Accueil admin</li>
            <li><a href="liste_adherents.php">Liste des adhérents (gestion)</li>
            <li><a href="annuaire_adherents_admin.php">Annuaire des adhérents (gestion)</li>
            <li><a href="annuaire_mandats_admin.php">Annuaire des Mandats (gestion)</li>
            <li><a class="indisponible" href="documents_utile_admin.php">Liste des documents utiles (gestion)</li>
            <li><a class="indisponible" href="liste_articles_admin.php">Liste des articles (gestion)</li>
        </ul>
    </div>
</body>

</html>