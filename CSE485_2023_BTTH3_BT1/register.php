<?php

require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('src');
$twig = new \Twig\Environment($loader);

$template = $twig->load('register.html');
echo $template->render();

?>