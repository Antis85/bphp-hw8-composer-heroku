<?php
declare(strict_types=1);

session_start();

//echo '<pre>';
//echo PHP_EOL . 'Session login:' . PHP_EOL;
//print_r($_SESSION['login']) . PHP_EOL;
//echo '</pre>';

if(!empty($_SESSION['login'])) {
    echo <<<END
        <p>Привет, {$_SESSION['login']} !</p>
        <button onclick="window.location.href = 'exit.php';">Выход</button>
        END;
}

if(empty($_SESSION['login'])) {
    include 'form.html';
}
