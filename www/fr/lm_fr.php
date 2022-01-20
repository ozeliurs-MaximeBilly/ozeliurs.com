<?php $month_name=array("","Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre"); ?>
<section class="card" style="margin: 10px auto">
    <p class="is-marginless">Maxime BILLY</p>
    <p class="is-marginless">56 chemin de l’adrech</p>
    <p class="is-marginless">06530 Saint Cézaire sur Siagne</p>
    <p class="is-marginless">Tél : 06.95.92.32.10</p>
    <p class="is-marginless">Email : maxime.billy@etu.univ-amu.fr</p>
    <p class="text-right is-marginless"><?php echo $_GET["entreprise"]; ?></p>
    <p>Saint Aix en Provence le <?php echo date('d', time()).' '.$month_name[(int)date('m', time())].' '.date('Y', time()); ?></p>
    <h3>Objet : Demande de Stage</h3>
    <p>Madame, Monsieur,</p>
    <!-- OK UP -->
    <p>Actuellement étudiant en deuxième année de DUT Informatique à l’Université d’Aix-Marseille, je suis à la recherche d'un stage conventionné au sein d’une entreprise comme entreprise pendant une durée de 3 mois à compter du 11 avril 2022.</p>

    <p>Étant intéressé par interet, je me suis tourné vers entreprise dont le secteur d’activité correspond à l'intitulé de mon stage.</p>

    <p>Travailler au sein de votre entreprise me permettra de me professionnaliser. Ma motivation est à la fois de participer au développement d’une entreprise tout en y mettant en application mes connaissances.</p>

    <p>Curieux, dynamique et sérieux, je serai heureux de mettre mes compétences à votre disposition le temps d’un stage.</p>

    <p>Je vous remercie vivement de l’attention que vous porterez à cette demande de stage. Je me tiens à votre disposition pour un entretien.</p>

    <p>Dans l’attente de votre réponse, je vous prie d’agréer, Madame, Monsieur, l'expression de mes salutations distinguées.</p>

    <h5>Maxime BILLY</h5>
</section>