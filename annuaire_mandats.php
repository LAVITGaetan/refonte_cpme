<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos mandats - CPME</title>
    <!-- CSS et JQUERY-->
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <!-- Inclure le menu admin -->

    <?php include('menu_admin.php'); ?>
    <h1 class="titre_page">Annuaire des mandataires</h1>
        <!-- Barre de recherche -->
        <div style="display: none;" class="barre_options">
        <form class="options_formulaire" method="post">
            <select class="options_select" name="section">
                <option value="null">Catégorie</option>
                <option value="artisanat">Emploi, Formation et Jeunesse</option>
                <option value="btp/industrie">Social</option>
                <option value="commerce">Perspectives Economiques et Ancrage Territorial</option>
            </select>
            <input class="options_submit" type="submit" value="Rechercher" name="Trier"></input>
        </form>
    </div>
    <div class="flex-container">
        <div class="carte-mandat">
            <div class="carte-mandat_top">
                <div class="mandat_top__presentation">
                    <div class="carte-mandat_image"><img class="carte-mandat_image" src="images/clubexport.jpg" alt=""></div>
                    <div class="carte-mandat_description"><span class="carte-mandat_titre">Le Club Export Réunion</span>

                    </div>
                </div>
            </div>
            <div class="carte-mandat_content">
                <div class="mandat_content__row">
                    <p><span class="bold">Mission : </span>Le Club Export Réunion est une association Loi 1901, créée en 1998, dont l’objet social est de promouvoir l’ouverture la Réunion à l’international et de contribuer au développement du volume des exportations réunionnaises.
                        À l’origine structure d’échanges relativement informelle, le Club Export Réunion a été transformé en association loi 1901 dès 1999, et ce dans un souci de légitimité et de crédibilité vis-à-vis de ses interlocuteurs.</p>
                </div>
                <div class="mandat_content__row">
                    <p><span class="bold">Composition : </span>L'association est régie par un conseil d'administration composé de chefs d'entreprises réunionnaises de toutes tailles et de tous les secteurs existants à l'export. Il fonctionne au quotidien avec 3 salariés permanents à la Réunion et 5 correspondants (VSI) basés à l'île Maurice, à Madagascar, les Seychelles aux Comores et au Mozambique.</p>
                </div>
                <div class="mandat_content__row"><img src="images/group_blue.svg" alt="">
                    <p> <span class="bold">2 membres de la CPME</span> au sein de cette instance</p>
                </div>
                <div class="mandat_content__row"><img src="images/profil.svg" alt="">
                    <p> <span class="bold">LAVIT</span> Gaëtan (titulaire)</p>
                </div>
                <div class="mandat_content__row"><img src="images/timer.svg" alt="">
                    <p>La durée de ce mandat est de <span class="bold">4 ans</span></p>
                </div>
                <div class="mandat_content__row"><img src="images/calendar.svg" alt="">
                    <p>Le renouvellement de ce mandat est prévu pour le <span class="bold">7 mars 2022</span> </p>
                </div>
            </div>
        </div>
        <div class="carte-mandat">
            <div class="carte-mandat_top">
                <div class="mandat_top__presentation">
                    <div class="carte-mandat_image"><img class="carte-mandat_image" src="images/clubexport.jpg" alt=""></div>
                    <div class="carte-mandat_description"><span class="carte-mandat_titre">Le Club Export Réunion</span>

                    </div>
                </div>
            </div>
            <div class="carte-mandat_content">
                <div class="mandat_content__row">
                    <p><span class="bold">Mission : </span>Le Club Export Réunion est une association Loi 1901, créée en 1998, dont l’objet social est de promouvoir l’ouverture la Réunion à l’international et de contribuer au développement du volume des exportations réunionnaises.
                        À l’origine structure d’échanges relativement informelle, le Club Export Réunion a été transformé en association loi 1901 dès 1999, et ce dans un souci de légitimité et de crédibilité vis-à-vis de ses interlocuteurs.</p>
                </div>
                <div class="mandat_content__row">
                    <p><span class="bold">Composition : </span>L'association est régie par un conseil d'administration composé de chefs d'entreprises réunionnaises de toutes tailles et de tous les secteurs existants à l'export. Il fonctionne au quotidien avec 3 salariés permanents à la Réunion et 5 correspondants (VSI) basés à l'île Maurice, à Madagascar, les Seychelles aux Comores et au Mozambique.</p>
                </div>
                <div class="mandat_content__row"><img src="images/group_blue.svg" alt="">
                    <p> <span class="bold">2 membres de la CPME</span> au sein de cette instance</p>
                </div>
                <div class="mandat_content__row"><img src="images/profil.svg" alt="">
                    <p> <span class="bold">LAVIT</span> Gaëtan (titulaire)</p>
                </div>
                <div class="mandat_content__row"><img src="images/timer.svg" alt="">
                    <p>La durée de ce mandat est de <span class="bold">4 ans</span></p>
                </div>
                <div class="mandat_content__row"><img src="images/calendar.svg" alt="">
                    <p>Le renouvellement de ce mandat est prévu pour le <span class="bold">7 mars 2022</span> </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>