<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des adhérents</title>
    <!-- CSS et JQUERY-->
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <!-- Inclure le menu admin -->

    <?php include('menu_admin.php'); ?>
    <h1 class="titre_page">Les dossiers</h1>
    <div class="flex-container">
        <div class="carte-dossier">
            <div class="carte-dossier_left">
                <div class="carte-dossier_image"><img id="carte-dossier_image" src="images/ancrage.svg" alt="Logo d'ancrage territorial"></div>
                <div class="carte-dossier_titre">Ancrage Territorial</div>
            </div>
            <div class="carte-dossier_right">
                <p class="carte-dossier_texte">La CPME Réunion mène des actions en faveur d'un modèle de développement économique ancré sur le territoire réunionnais.</p>
            </div>
        </div>
        <div class="carte-dossier">
            <div class="carte-dossier_left">
                <div class="carte-dossier_image"><img id="carte-dossier_image" src="images/plant-leaves-button (1).svg" alt="Logo d'ancrage territorial"></div>
                <div class="carte-dossier_titre">Responsabilité Sociétal de l'Entreprise</div>
            </div>
            <div class="carte-dossier_right">
                <p class="carte-dossier_texte">Dans un contexte où l’environnement économique et environnemental de nos entreprises ne cesse d’évoluer, la notion de RSE (Responsabilité Sociétale de l’Entreprise) est devenue incontournable.</p>
            </div>
        </div>
        <div class="carte-dossier">
            <div class="carte-dossier_left">
                <div class="carte-dossier_image"><img id="carte-dossier_image" src="images/guide_des_aides.svg" alt="Logo d'ancrage territorial"></div>
                <div class="carte-dossier_titre">Guide des Aides</div>
            </div>
            <div class="carte-dossier_right">
                <p class="carte-dossier_texte">A La Réunion, il existe un nombre important de mesures permettant à l'entreprise de se développer et de faire face aux difficultés économiques si besoin.</p>
            </div>
        </div>
        <div class="carte-dossier">
            <div class="carte-dossier_left">
                <div class="carte-dossier_image"><img id="carte-dossier_image" src="images/trophee.svg" alt="Logo d'ancrage territorial"></div>
                <div class="carte-dossier_titre">Throphée et Entreprise</div>
            </div>
            <div class="carte-dossier_right">
                <p class="carte-dossier_texte">Le trophée qui récompense l’entreprise engagé pour le territoire réunionnais.</p>
            </div>
        </div>
    </div>
</body>

</html>