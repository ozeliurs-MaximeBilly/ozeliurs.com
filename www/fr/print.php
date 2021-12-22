<?php
    include '../utils.inc.php';
    head("Ozeliurs' Website");
    print_page();
    if (isset($_GET['t'])) {
        title($_GET['t']);
    }
    include_once 'cv_fr.php';
    end_page();
?>