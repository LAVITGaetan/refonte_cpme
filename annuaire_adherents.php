<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annuaire des adhérents</title>
    <!-- CSS et JQUERY-->
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <!-- Inclure le menu -->
    <?php include("menu_admin.php"); ?>

    <h1 class="titre_page">Annuaire des adhérents</h1>

    <!-- Barre de recherche -->
    <div class="barre_options">
        <form class="options_formulaire" method="post">
            <select class="options_select" name="section">
                <option value="null">Toutes les sections</option>
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
                <option value="null">Tout les secteurs</option>
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

    <!-- Annuaire des adhérents-->
    <div class="flex-container">
        <?php
        include('config.php');
        if (isset($_POST['section']) & isset($_POST['rechercher']) || isset($_POST['secteur']) & isset($_POST['rechercher'])) {
            if ($_POST['secteur'] !== 'null' & $_POST['section'] !== 'null') {
                echo '<script>document.location.replace("annuaire_adherents.php?secteur=' . $_POST['secteur'] . '&section=' . $_POST['section'] . '");</script>';
            } else if ($_POST['section'] !== 'null') {
                echo '<script>document.location.replace("annuaire_adherents.php?section=' . $_POST['section'] . '");</script>';
            } else if ($_POST['secteur'] !== 'null') {
                echo '<script>document.location.replace("annuaire_adherents.php?secteur=' . $_POST['secteur'] . '");</script>';
            }
        }

        if (isset($_GET['secteur']) & isset($_GET['section'])) {
            $reponse = $bdd->query('SELECT * FROM annuaire_adherents WHERE secteur= "' . $_GET['secteur'] . '" AND section= "' . $_GET['section'] . '"');
        } else if (isset($_GET['secteur'])) {
            $reponse = $bdd->query('SELECT * FROM annuaire_adherents WHERE secteur= "' . $_GET['secteur'] . '"');
        } else if (isset($_GET['section'])) {
            $reponse = $bdd->query('SELECT * FROM annuaire_adherents WHERE section= "' . $_GET['section'] . '"');
        } else {
            $reponse = $bdd->query('SELECT * FROM annuaire_adherents');
        }
        while ($donnees = $reponse->fetch()) {
            echo'<div class="carte_annuaire">
            <div class="carte-annuaire_top">
                <div class="carte-annuaire_top__logo">
                    <img id="carte-annuaire_top__logo" src="images/logo_dev.png" alt="">
                </div>
                <div class="carte-annuaire_top__texte">
                    <span class="carte-annuaire_top__nom">' . $donnees['entreprise'] . '</span><br>
                    <span class="carte-annuaire_top__section">Section : ' . $donnees['section'] . '</span><br>
                    <span class="carte-annuaire_top__activite">Activité : ' . $donnees['activite'] . '</span>
                </div>
                
            </div>
            <div class="carte-annuaire_content">
                <div class="carte-annuaire_content__left">
                    
                    <div class="carte-annuaire_content__row"><img class="carte-annuaire_content__icones" src="images/profil.svg"></img>' . $donnees['nom'] . '<br>
                    ' . $donnees['prenom'] . '</div>
                    <div class="carte-annuaire_content__row"><img class="carte-annuaire_content__icones" src="images/role.svg"></img>' . $donnees['role'] . '</div>
                    <div class="carte-annuaire_content__row"><img class="carte-annuaire_content__icones" src="images/telephone.svg"></img>' . $donnees['telephone'] . '</div>
                    <div class="carte-annuaire_content__row"><img class="carte-annuaire_content__icones" src="images/mail.svg"></img>' . $donnees['mail'] . '</div>
                    <div class="carte-annuaire_content__row"><img class="carte-annuaire_content__icones" src="images/linkedin_blue.svg"></img>' . $donnees['linkedin'] . '</div>
                </div>
                <div class="carte-annuaire_content__right">
                    <div class="carte-annuaire_content__row"><img class="carte-annuaire_content__icones" src="images/profil.svg"></img>' . $donnees['nom_contact'] . '<br>
                    ' . $donnees['prenom_contact'] . '</div>
                    <div class="carte-annuaire_content__row"><img class="carte-annuaire_content__icones" src="images/role.svg"></img>' . $donnees['role_contact'] . '</div>
                    <div class="carte-annuaire_content__row"><img class="carte-annuaire_content__icones" src="images/telephone.svg"></img>' . $donnees['telephone_contact'] . '</div>
                    <div class="carte-annuaire_content__row"><img class="carte-annuaire_content__icones" src="images/mail.svg"></img>' . $donnees['mail_contact'] . '</div>
                    <div class="carte-annuaire_content__row"><img class="carte-annuaire_content__icones" src="images/linkedin_blue.svg"></img>' . $donnees['linkedin_contact'] . '</div>

                </div>

            </div>
        </div>';
        }
        ?>
    </div>

</body>

</html>