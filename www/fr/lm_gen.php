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
                <label class="col-5" for="entreprise_interet">Interet</label>
                <input class="col-7" type="text" name="entreprise_interet">
            </div>
            <input type="submit" value="Créer">
        </form>
    </div>
<?php
end_page();
?>