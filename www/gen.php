<?php
    include 'utils.inc.php';
    head("Ozeliurs' Website");
    start_page();
?>
        <div class="card" style="margin: 10px auto">
            <form action="/fr/index.php" method="get">
                <input type="text" name="t">
                <input type="submit" value="Générer">
            </form>
        </div>
<?php
    end_page();
?>