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

    <h1 class="titre_page">Liste des adhérents</h1>
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


    <!-- Liste adhérents-->
    <div class="container_carte">

        <?php
        include('config.php');

        if (isset($_POST['section']) & isset($_POST['rechercher']) || isset($_POST['secteur']) & isset($_POST['rechercher'])) {
            if ($_POST['secteur'] !== 'null' & $_POST['section'] !== 'null') {
                echo '<script>document.location.replace("liste_adherents.php?secteur=' . $_POST['secteur'] . '&section=' . $_POST['section'] . '");</script>';
                echo $section . $secteur;
            } else if ($_POST['section'] !== 'null') {
                echo '<script>document.location.replace("liste_adherents.php?section=' . $_POST['section'] . '");</script>';
            } else if ($_POST['secteur'] !== 'null') {
                echo '<script>document.location.replace("liste_adherents.php?secteur=' . $_POST['secteur'] . '");</script>';
            }
        }

        if (isset($_GET['secteur']) & isset($_GET['section'])) {
            $reponse = $bdd->query('SELECT * FROM adherents WHERE secteur= "' . $_GET['secteur'] . '" AND section= "' . $_GET['section'] . '"');
        } else if (isset($_GET['secteur'])) {
            $reponse = $bdd->query('SELECT * FROM adherents WHERE secteur= "' . $_GET['secteur'] . '"');
        } else if (isset($_GET['section'])) {
            $reponse = $bdd->query('SELECT * FROM adherents WHERE section= "' . $_GET['section'] . '"');
        } else {
            $reponse = $bdd->query('SELECT * FROM adherents');
        }

        while ($donnees = $reponse->fetch()) {
            echo '<div class="carte-adherent">
            <div class="carte-adherent_top">
                <div class="carte-adherent_top__texte">' . $donnees['nom'] . '<br>' . $donnees['prenom'] . '</div>
                <div class="carte-adherent_top__options">
                    <form method="post"><input name="id_adherent" type="hidden" value="' . $donnees['id'] . '">
                        <input id="modifier" name="modifier" type="submit" value="">
                    </form>
                    <form method="post"><input name="id_adherent" type="hidden" value="' . $donnees['id'] . '">
                        <input id="annuaire" name="annuaire" type="submit" value="">
                    </form>
                    <form method="post">
                        <input name="id_adherent" type="hidden" value="' . $donnees['id'] . '">
                        <input id="supprimer" name="supprimer" type="submit" value="">
                    </form>
                </div>
            </div>
            <div class="carte-adherent_ligne">
                <div class="carte-adherent_icone">
                    <img width="22px" height="22px" src="images/entreprise.svg" alt=""></img>
                </div>
                <div class="carte-adherent_texte">' . $donnees['entreprise'] . '
                </div>
            </div>
            <div class="carte-adherent_ligne">
                <div class="carte-adherent_icone">
                    <img width="22px" height="22px" src="images/section.svg" alt=""></img>
                </div>
                <div class="carte-adherent_texte">' . $donnees['section'] . '
                </div>
            </div>
            <div class="carte-adherent_ligne">
                <div class="carte-adherent_icone">
                    <img width="22px" height="22px" src="images/secteur.svg" alt=""></img>
                </div>
                <div class="carte-adherent_texte">' . $donnees['secteur'] . '
                </div>
            </div>
            <div class="carte-adherent_ligne">
                <div class="carte-adherent_icone">
                    <img width="22px" height="22px" src="images/adresse.svg" alt=""></img>
                </div>
                <div class="carte-adherent_texte">' . $donnees['adresse'] . ', ' . $donnees['ville'] . '
                </div>
            </div>
            <div class="carte-adherent_ligne">
                <div class="carte-adherent_icone">
                    <img width="22px" height="22px" src="images/email.svg" alt=""></img>
                </div>
                <div class="carte-adherent_texte">' . $donnees['mail'] . '</div>
            </div>
            <div class="carte-adherent_ligne">
                <div class="carte-adherent_icone">
                    <img width="22px" height="22px" src="images/telephone.svg" alt=""></img>
                </div>
                <div class="carte-adherent_texte">' . $donnees['telephone'] . '</div>
            </div>
        </div>';

            if (isset($_POST['supprimer'])) {
                $requete = 'DELETE FROM adherents WHERE id="' . $_POST['id_adherent'] . '"';
                $reponse = $bdd->query($requete);
                echo '<script>document.location.replace("liste_adherents.php");alert("L\'adhérent à bien été supprimé");</script>';
            }
            if (isset($_POST['modifier'])) {
                echo '<script>document.location.replace("modifier_adherents.php?id=' . $_POST['id_adherent'] . '");</script>';
            }

            if (isset($_POST['annuaire'])) {
                echo '<script>document.location.replace("ajouter_annuaire.php?id=' . $_POST['id_adherent'] . '");</script>';
            }
        }
        ?>
        <script src="script.js"></script>
</body>

</html>