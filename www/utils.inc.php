<?php

function head($title)
{
    echo '<!DOCTYPE html>'.PHP_EOL;
    echo '<html lang="en">'.PHP_EOL;
    echo '<head>'.PHP_EOL;
    echo '    <meta charset="UTF-8">'.PHP_EOL;
    echo '    <title>'.$title.'</title>'.PHP_EOL;
    echo '    <link rel="stylesheet" href="https://unpkg.com/chota@latest">'.PHP_EOL;
    echo '    <!-- https://feathericons.com/ && https://jenil.github.io/chota/ -->'.PHP_EOL;
    echo '</head>';
}

function start_page()
{
    echo '<body style="background-color: rgba(26, 159, 96, 00.2)">'.PHP_EOL;
    echo '    <nav class="nav" style="background-color: white">'.PHP_EOL;
    echo '        <div class="nav-left">'.PHP_EOL;
    echo '            <a href="/" class="brand">Ozeliurs\' Website</a>'.PHP_EOL;
    echo '            <div class="tabs">'.PHP_EOL;
    echo '                <a href="/projects">Projects</a>'.PHP_EOL;
    echo '                <a href="/articles">Articles</a>'.PHP_EOL;
    echo '            </div>'.PHP_EOL;
    echo '        </div>'.PHP_EOL;
    echo '        <div class="nav-right">'.PHP_EOL;
    echo '            <a href="https://github.com/ozeliurs-MaximeBilly" class="button outline">Github</a>'.PHP_EOL;
    echo '        </div>'.PHP_EOL;
    echo '    </nav>'.PHP_EOL;
    echo '    <div class="container">';
}

function print_page()
{
    echo '<body style="font-size: 1rem">'.PHP_EOL;
    echo '    <div>';
}

function title($title)
{
    echo '        <div class="card" style="display: flex; margin: 10px auto">'.PHP_EOL;
    echo '            <h1 style="margin: 10px auto">'.$title.'</h1>'.PHP_EOL;
    echo '        </div>';
}

function end_page()
{
    echo '    </div>'.PHP_EOL;
    echo '</body>'.PHP_EOL;
    echo '</html>';
}

function lang()
{
    session_start();

    if (!isset($_SESSION['lang'])) {
        $_SESSION['lang'] = "fr";
    }

    require 'lang/'.$_SESSION['lang'].'.php';
}

function age($bithdayDate)
{
    $date = new DateTime($bithdayDate);
    $now = new DateTime();
    $interval = $now->diff($date);
    return $interval->y;
}

?>
