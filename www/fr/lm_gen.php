<?php
include '../utils.inc.php';
head("Ozeliurs' Website");
start_page();
?>
    <div class="card" style="margin: 10px auto">
        <form action="/fr/lm.php" method="get">
            <div class="row">
                <label class="col-5" for="entreprise">Nom de l'Entreprise</label>
                <input class="col-7" type="text" name="entreprise">
            </div>
            <div class="row">
                <label class="col-5" for="entreprise_adr1">Num Adresse</label>
                <input class="col-7" type="text" name="entreprise_adr1">
            </div>
            <div class="row">
                <label class="col-5" for="entreprise_adr2">CP Ville, France</label>
                <input class="col-7" type="text" name="entreprise_adr2">
            </div>
            <div class="row">
                <label class="col-5" for="poste">Poste</label>
                <input class="col-7" type="text" name="poste">
            </div>
            <div class="row">
                <label class="col-5" for="poste">Candidature Spontanée ?</label>
                <input class="col-7" type="checkbox" name="isspontane">
            </div>
            <div class="row">
                <label class="col-5" for="qual1">Qualité 1</label>
                <input class="col-7" type="text" name="qual1">
            </div>
            <div class="row">
                <label class="col-5" for="qual2">Qualité 2</label>
                <input class="col-7" type="text" name="qual2">
            </div>
            <div class="row">
                <label class="col-5" for="qual3">Qualité 3</label>
                <input class="col-7" type="text" name="qual3">
            </div>
            <input type="submit" value="Créer">
        </form>
    </div>
<?php
end_page();
?>