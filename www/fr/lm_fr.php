<?php $loc = setlocale( LC_TIME, ""); ?>
<section class="card" style="margin: 10px auto">
    <p class="is-marginless">Maxime BILLY</p>
    <p class="is-marginless">56 chemin de l’adrech</p>
    <p class="is-marginless">06530 Saint Cézaire sur Siagne</p>
    <p class="is-marginless">Tél : 06.95.92.32.10</p>
    <p class="is-marginless">Email : maxime.billy@etu.univ-amu.fr</p>
    <p class="text-right is-marginless"><?php echo $_GET["entreprise"]; ?></p>
    <p class="text-right is-marginless"><?php echo $_GET["entreprise_adr1"]; ?></p>
    <p class="text-right is-marginless"><?php echo $_GET["entreprise_adr2"]; ?></p>
    <p>Saint Cézaire le <?php echo strftime("%d %B %Y"); ?></p>
    <h3>Objet : Demande de Stage</h3>
    <p>Madame, Monsieur,</p>
    <!-- OK UP -->
    <?php
        if (isset($_GET["isspontane"]) && $_GET["isspontane"] == "on") {
    ?>
    <p>Je fais suite à votre offre de stage pour le poste de <?php echo $_GET["poste"]; ?>.</p>
    <?php
    } else {
    ?>
    <p>Je suis à la recherche d'un stage pour le poste de <?php echo $_GET["poste"]; ?>.</p>
    <?php } ?>
    <p>Je suis actuellement étudiant en DUT Informatique à Aix en Provence depuis Septembre 2020, mes compétences sont en adéquation avec le poste de <?php echo $_GET["poste"]; ?>.</p>
    <p>Dans le cadre de ma formation je dois effectuer un stage à partir du 11 avril 2022 de durée minimale de 329 heures.</p>
    <p>Travailler au sein de votre entreprise me permettra de me professionnaliser. Ma motivation est à la fois de participer au développement d’une entreprise tout en y mettant en application mes connaissances.</p>
    <p>J’ai acquis un niveau avancé en anglais grâce à une préparation au TOEIC et des cours de langues au DUT et je serais très heureux de mettre <?php echo $_GET["qual1"]; ?>, <?php echo $_GET["qual2"]; ?> et <?php echo $_GET["qual3"]; ?> au service de votre entreprise.</p>
    <p>Vous trouverez en pièce jointe mon CV et je reste à votre disposition pour vous recontrer.</p>
    <!-- OK DOWN -->
    <p>En espérant que ma candidature aura retenu toute votre attention, je vous prie d'agréer, Madame, Monsieur, mes salutations distinguées.</p>
    <p style="margin-bottom: 5px">Cordialement</p>
    <h5>Maxime BILLY</h5>
</section>

Je suis actuellement étudiant en première année de DUT Informatique à l’IUT d’Aix-Marseille. Je recherche un stage conventionné de 3 mois pour la période du 11 avril au 17 juin 2022.

Ce stage me permettra de découvrir le milieu professionnel, d’appliquer les compétences acquises durant ma formation et de développer mes capacités d’adaptation, de réactivité et d’autonomie.

Ce sera également l’occasion de mettre en œuvre mes qualités de communication, de gestion des priorités et d’organisation.

Le domaine informatique m’intéresse particulièrement et je souhaite travailler dans une entreprise spécialisée dans ce secteur. Je suis motivé, dynamique, sérieux et rigoureux.

Vous remerciant par avance de l’attention que vous porterez à ma candidature, je reste à votre disposition pour toute information complémentaire.


Maxime BILLY
