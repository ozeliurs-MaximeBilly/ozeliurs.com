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
    echo '</head>'.PHP_EOL;
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
    echo '    <div class="container">'.PHP_EOL;
}

function end_page()
{
    echo '    </div>'.PHP_EOL;
    echo '</body>'.PHP_EOL;
    echo '</html>'.PHP_EOL;
}

?>
