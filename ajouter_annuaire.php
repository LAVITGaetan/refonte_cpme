<?php
$nom = 'test';
//Récupérer les infos de l'adhérent

include('config.php');
$reponse = $bdd->query('SELECT * FROM adherents WHERE id = "' . $_GET['id'] . '"');
while ($donnees = $reponse->fetch()) {
    $id = $donnees['id'];
    $nom = $donnees['nom'];
    $prenom = $donnees['prenom'];
    $telephone = $donnees['telephone'];
    $mail = $donnees['mail'];
    $section = $donnees['section'];
    $entreprise = $donnees['entreprise'];
    $adresse = $donnees['adresse'];
    $secteur = $donnees['secteur'];
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un adhérent à l'annuaire</title>
    <!-- CSS et JQUERY-->
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <!-- Inclure le menu -->
    <?php include("menu_admin.php"); ?>

    <!-- Titre de la page -->
    <h1 class="titre_page">Ajouter un adhérent à l'annuaire</h1>
    <!-- Formulaire de modification d'adhérent -->
    <form class="add-form_adherent" method="post">
        <div class="add-form_div">
            <label>Nom</label><br>
            <input class="add-form_input" type="text" name="nom" value="<?php echo $nom; ?>">
        </div>
        <div class="add-form_div">
            <label>Prenom</label><br>
            <input class="add-form_input" type="text" name="prenom" value="<?php echo $prenom; ?>">
        </div>
        <div class="add-form_div">
            <label>Rôle</label><br>
            <input class="add-form_input" type="text" name="role">
        </div>
        <div class="add-form_div">
            <label>Teléphone</label><br>
            <input class="add-form_input" type="text" name="telephone" value="<?php echo $telephone; ?>">
        </div>
        <div class="add-form_div">
            <label>Mail</label><br>
            <input class="add-form_input" type="text" name="mail" value="<?php echo $mail; ?>">
        </div>
        <div class="add-form_div">
            <label>LinkedIn</label><br>
            <input class="add-form_input" type="text" name="linkedin">
        </div>

        <div class="add-form_div">
            <label>Nom contact</label><br>
            <input class="add-form_input" type="text" name="nom_contact">
        </div>
        <div class="add-form_div">
            <label>Prenom contact</label><br>
            <input class="add-form_input" type="text" name="prenom_contact">
        </div>
        <div class="add-form_div">
            <label>Rôle contact</label><br>
            <input class="add-form_input" type="text" name="role_contact">
        </div>
        <div class="add-form_div">
            <label>Teléphone contact</label><br>
            <input class="add-form_input" type="text" name="telephone_contact">
        </div>
        <div class="add-form_div">
            <label>Mail contact</label><br>
            <input class="add-form_input" type="text" name="mail_contact">
        </div>
        <div class="add-form_div">
            <label>LinkedIn contact</label><br>
            <input class="add-form_input" type="text" name="linkedin_contact">
        </div>
        <div class="add-form_div">
            <label>Section</label><br>
            <select class="add-form_input" name="section">
                <option <?php if ($section == "artisanat") {
                            echo ' selected ';
                        } ?>value="artisanat">Artisanat</option>
                <option <?php if ($section == "btp/industrie") {
                            echo ' selected ';
                        } ?> value="btp/industrie">BTP/Industrie</option>
                <option <?php if ($section == "commerce") {
                            echo ' selected ';
                        } ?> value="commerce">Commerce</option>
                <option <?php if ($section == "services") {
                            echo ' selected ';
                        } ?> value="services">Services</option>
            </select>
        </div>
        <div class="add-form_div">
            <label>Entreprise</label><br>
            <input class="add-form_input" type="text" name="entreprise" value="<?php echo $entreprise; ?>">
        </div>
        <div class="add-form_div">
            <label>Activité</label><br>
            <input class="add-form_input" type="text" name="activite">
        </div>
        <div class="add-form_div">
            <label>Adresse</label><br>
            <input class="add-form_input" type="text" name="adresse" value="<?php echo $adresse; ?>">
        </div>
        <div class="add-form_div">
            <label>Secteur</label><br>
            <select class="add-form_input" name="secteur">
                <option <?php if ($secteur == "nord") {
                            echo ' selected ';
                        } ?>value="nord">Nord</option>
                <option <?php if ($secteur == "ouest") {
                            echo ' selected ';
                        } ?> value="ouest">Ouest</option>
                <option <?php if ($secteur == "sud") {
                            echo ' selected ';
                        } ?> value="sud">Sud</option>
                <option <?php if ($secteur == "est") {
                            echo ' selected ';
                        } ?> value="est">Est</option>
            </select>
        </div>
        <div class="add-form_div">
            <label>Site web entreprise</label><br>
            <input class="add-form_input" type="text" name="site_entreprise">
        </div>
        <div class="add-form_div">
            <label>LinkedIn entreprise</label><br>
            <input class="add-form_input" type="text" name="linkedin_entreprise">
        </div>
        <div class="add-form_div">
            <label>Facebook entreprise</label><br>
            <input class="add-form_input" type="text" name="facebook_entreprise">
        </div>
        <div class="add-form_div">
            <label>Twitter entreprise</label><br>
            <input class="add-form_input" type="text" name="twitter_entreprise">
        </div>
        <div class="submit_div">
            <input class="submit" type="submit" value="ajouter à l'annuaire" name="ajouter">
        </div>
    </form>
    <!-- Fin du formulaire de modification d'adhérent -->
    <?php
    if (isset($_POST['ajouter']) & !empty($_POST['nom']) & !empty($_POST['prenom']) & !empty($_POST['role']) & !empty($_POST['telephone']) & !empty($_POST['mail']) & !empty($_POST['linkedin']) & !empty($_POST['nom_contact']) & !empty($_POST['prenom_contact']) & !empty($_POST['role_contact']) & !empty($_POST['telephone_contact']) & !empty($_POST['mail_contact']) & !empty($_POST['linkedin_contact']) & !empty($_POST['section']) & !empty($_POST['entreprise']) & !empty($_POST['activite']) & !empty($_POST['adresse']) & !empty($_POST['secteur']) & !empty($_POST['site_entreprise']) & !empty($_POST['linkedin_entreprise']) & !empty($_POST['facebook_entreprise']) & !empty($_POST['twitter_entreprise'])) {
        $requete = 'INSERT INTO annuaire_adherents VALUES(NULL,' . $id . ', "' . $_POST['nom'] . '", "' . $_POST['prenom'] . '", "' . $_POST['role'] . '", "' . $_POST['telephone'] . '", "' . $_POST['mail'] . '", "' . $_POST['linkedin'] . '", "' . $_POST['nom_contact'] . '", "' . $_POST['prenom_contact'] . '", "' . $_POST['role_contact'] . '", "' . $_POST['telephone_contact'] . '", "' . $_POST['mail_contact'] . '", "' . $_POST['linkedin_contact'] . '", "' . $_POST['section'] . '", "' . $_POST['entreprise'] . '", "' . $_POST['activite'] . '", "' . $_POST['adresse'] . '", "' . $_POST['secteur'] . '", "' . $_POST['site_entreprise'] . '", "' . $_POST['linkedin_entreprise'] . '", "' . $_POST['facebook_entreprise'] . '", "' . $_POST['twitter_entreprise'] . '")';
        $resultat = $bdd->query($requete);
        echo '<script>alert("L\'adhérent a bien été ajouté à l\'annuaire");
        document.location.replace("accueil_admin.php");</script>';
    }
    ?>

    <script src="script.js"></script>
</body>

</html>