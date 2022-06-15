<?php
declare(strict_types=1);

session_start();
$_SESSION['login'] = $_POST['login'];

//echo '<pre>';
//echo PHP_EOL . 'Login:' . PHP_EOL;
//print_r($_POST['login']) . PHP_EOL;
//echo PHP_EOL . 'Session login:' . PHP_EOL;
//print_r($_SESSION['login']) . PHP_EOL;
//echo '</pre>';

header('Location: /');
