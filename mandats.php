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
    <div style="margin-bottom:40px;height:200px;display: flex;justify-content:center;align-items:center; background: url(images/head.jpg);background-size:cover;background-position:center;">
        <h1 class="titre_page">Militez en faveur des Petites et Moyennes Entreprises !</h1>
    </div>


    <div class="flex-container">
        <div class="carte-info_mandats"><span class="carte-info_mandats__titre">Qu'est-ce qu'un mandat ?</span>
            <p class="carte-info_mandats__texte">Selon l’article 1984 du Code civil« Le mandat ou procuration est un acte par lequel une personne donne à une autre le pouvoir de faire quelque chose pour le mandant et en son nom ». La CPME Réunion assure une mission de représentation et de défense des Petites et Moyennes Entreprises à travers la participation aux instances de concertation officielle.</p>
        </div>
        <div class="carte-info_mandats"><span class="carte-info_mandats__titre">Quel est le rôle du mandataire ?</span>
            <p class="carte-info_mandats__texte">Les mandataires de la CPME sont des entrepreneurs qui s’engagent pour défendre l’esprit d’entreprendre et pour représenter localement les Petites et Moyennes Entreprises dans les différentes instances de la société civile. Nous devons proposer et agir pour les entreprises, contrôler et participer à l’organisation des structures que nos entreprises financent.</p>
        </div>
    </div>
    <h1 class="titre_page">Cartographie de l'ensemble des mandats</h1>
    <div class="container-blue">
        <div class="select_organismes">

            <div onclick="afficherMandats1();" class="select_organisme">Emploi, Formation et Jeunnesse</div>
            <div onclick="afficherMandats2();" class="select_organisme">Social</div>
            <div onclick="afficherMandats3();" class="select_organisme">Perspectives Economiques et Ancrage Territorial</div>
        </div>
        <div class="organisme_content">
            <div id="organisme0">Veuillez choisir une catégorie</div>
            <div id="organisme1">
                <div class="organisme_container"> <span class="organisme_sigle">AFDET</span><span class="organisme_definition">Caisse d'Allocation Familiales</span></div>
                <div class="organisme_container"> <span class="organisme_sigle">CEN</span><span class="organisme_definition">Centre Départementale des Impôts</span></div>
                <div class="organisme_container"> <span class="organisme_sigle">COFIP</span><span class="organisme_definition">Caisse Générale de Sécurité Sociale</span></div>
                <div class="organisme_container"> <span class="organisme_sigle">CENTHOR</span><span class="organisme_definition">Caisse Réunionnaise Complémentaire</span></div>
                <div class="organisme_container"> <span class="organisme_sigle">CPIR</span><span class="organisme_definition">Caisse Régional de Retraite</span></div>
                <div class="organisme_container"> <span class="organisme_sigle">CREFOP</span><span class="organisme_definition">Comité Territorial Action Logement</span></div>
                <div class="organisme_container"> <span class="organisme_sigle">D2ER</span><span class="organisme_definition">Direction de l'Economie, de l'Emploi, du Travail et des Solidarités</span></div>
                <div class="organisme_container"> <span class="organisme_sigle">IAE</span><span class="organisme_definition">Instance Régionale de Protection Sociale des Travailleurs Indépendants</span></div>
                <div class="organisme_container"> <span class="organisme_sigle">MDEN</span><span class="organisme_definition">Maison Départementale des Personnes Handicapées</span></div>
                <div class="organisme_container"> <span class="organisme_sigle">MIO</span><span class="organisme_definition">Société d'Habitations à Loyer Modéré de La Réunion</span></div>
                <div class="organisme_container"> <span class="organisme_sigle">MLN</span><span class="organisme_definition">Tribunal Mixte de Commerce</span></div>
                <div class="organisme_container"> <span class="organisme_sigle">MLS</span><span class="organisme_definition">Société d'Habitations à Loyer Modéré de La Réunion</span></div>
                <div class="organisme_container"> <span class="organisme_sigle">PRODIJ</span><span class="organisme_definition">Tribunal Mixte de Commerce</span></div>
            </div>

            <div id="organisme2">
                <div class="organisme_container"> <span class="organisme_sigle"></span><span class="organisme_definition">Caisse d'Allocation Familiales</span></div>
                <div class="organisme_container"> <span class="organisme_sigle">CDI</span><span class="organisme_definition">Centre Départementale des Impôts</span></div>
                <div class="organisme_container"> <span class="organisme_sigle">CGSS</span><span class="organisme_definition">Caisse Générale de Sécurité Sociale</span></div>
                <div class="organisme_container"> <span class="organisme_sigle">CRC</span><span class="organisme_definition">Caisse Réunionnaise Complémentaire</span></div>
                <div class="organisme_container"> <span class="organisme_sigle">CRR</span><span class="organisme_definition">Caisse Régional de Retraite</span></div>
                <div class="organisme_container"> <span class="organisme_sigle">CTAL</span><span class="organisme_definition">Comité Territorial Action Logement</span></div>
                <div class="organisme_container"> <span class="organisme_sigle">DEETS</span><span class="organisme_definition">Direction de l'Economie, de l'Emploi, du Travail et des Solidarités</span></div>
                <div class="organisme_container"> <span class="organisme_sigle">IRPSTI</span><span class="organisme_definition">Instance Régionale de Protection Sociale des Travailleurs Indépendants</span></div>
                <div class="organisme_container"> <span class="organisme_sigle">MDPH</span><span class="organisme_definition">Maison Départementale des Personnes Handicapées</span></div>
                <div class="organisme_container"> <span class="organisme_sigle">SHLMR</span><span class="organisme_definition">Société d'Habitations à Loyer Modéré de La Réunion</span></div>
                <div class="organisme_container"> <span class="organisme_sigle">TMC</span><span class="organisme_definition">Tribunal Mixte de Commerce</span></div>

            </div>
            <div id="organisme3">
                <div class="organisme_container"> <span class="organisme_sigle">ADSTR</span><span class="organisme_definition">Caisse d'Allocation Familiales</span></div>
                <div class="organisme_container"> <span class="organisme_sigle">ARIBEV</span><span class="organisme_definition">Centre Départementale des Impôts</span></div>
                <div class="organisme_container"> <span class="organisme_sigle">ARIV</span><span class="organisme_definition">Caisse Générale de Sécurité Sociale</span></div>
                <div class="organisme_container"> <span class="organisme_sigle">ARS OI</span><span class="organisme_definition">Caisse Réunionnaise Complémentaire</span></div>
                <div class="organisme_container"> <span class="organisme_sigle">ARACT</span><span class="organisme_definition">Caisse Régional de Retraite</span></div>
                <div class="organisme_container"> <span class="organisme_sigle">CESER</span><span class="organisme_definition">Comité Territorial Action Logement</span></div>
                <div class="organisme_container"> <span class="organisme_sigle">CDVLLP</span><span class="organisme_definition">Direction de l'Economie, de l'Emploi, du Travail et des Solidarités</span></div>
                <div class="organisme_container"> <span class="organisme_sigle">CCESPPGD</span><span class="organisme_definition">Instance Régionale de Protection Sociale des Travailleurs Indépendants</span></div>
                <div class="organisme_container"> <span class="organisme_sigle">CRIESR</span><span class="organisme_definition">Maison Départementale des Personnes Handicapées</span></div>
                <div class="organisme_container"> <span class="organisme_sigle">FEDOM</span><span class="organisme_definition">Société d'Habitations à Loyer Modéré de La Réunion</span></div>
                <div class="organisme_container"> <span class="organisme_sigle">HCCP</span><span class="organisme_definition">Tribunal Mixte de Commerce</span></div>
                <div class="organisme_container"> <span class="organisme_sigle">IDEOM</span><span class="organisme_definition">Tribunal Mixte de Commerce</span></div>
                <div class="organisme_container"> <span class="organisme_sigle">OECP</span><span class="organisme_definition">Tribunal Mixte de Commerce</span></div>
                <div class="organisme_container"> <span class="organisme_sigle">OPMR</span><span class="organisme_definition">Tribunal Mixte de Commerce</span></div>

            </div>
        </div>
    </div>
    <script>
        function afficherMandats1() {
            var organisme0 = document.getElementById("organisme0");
            var organisme1 = document.getElementById("organisme1");
            var organisme2 = document.getElementById("organisme2");
            var organisme3 = document.getElementById("organisme3");
            organisme1.style.display = "block";
            organisme0.style.display = "none";
            organisme2.style.display = "none";
            organisme3.style.display = "none";
        }

        function afficherMandats2() {
            var organisme0 = document.getElementById("organisme0");
            var organisme1 = document.getElementById("organisme1");
            var organisme2 = document.getElementById("organisme2");
            var organisme3 = document.getElementById("organisme3");
            organisme1.style.display = "none";
            organisme0.style.display = "none";
            organisme2.style.display = "block";
            organisme3.style.display = "none";
        }

        function afficherMandats3() {
            var organisme0 = document.getElementById("organisme0");
            var organisme1 = document.getElementById("organisme1");
            var organisme2 = document.getElementById("organisme2");
            var organisme3 = document.getElementById("organisme3");
            organisme1.style.display = "none";
            organisme0.style.display = "none";
            organisme2.style.display = "none";
            organisme3.style.display = "block";
        }
    </script>
</body>

</html>