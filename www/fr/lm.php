<?php
include '../utils.inc.php';
head("Ozeliurs' Website");
start_page();
include_once 'lm_fr.php';
?>
<a href="/fr/lm_print.php?entreprise=<?php echo $_GET["entreprise"];?>&entreprise_interet=<?php echo $_GET["entreprise_interet"];?>"></a>
<?php
end_page();
?>
