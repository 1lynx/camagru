<?php

require '../app/Autoloader.php';
App\Autoloader::register();

if(isset($_GET['p'])) {
    $p = $_GET['p'];
}

else {
    $p = 'home';
}

// Init object

$db = new \App\Database('blog');
$user_connect = new \App\User_function();
session_start();

ob_start();
if ($p === 'home')
    require '../pages/home.php';
if ($p === 'logout')
    require '../pages/tools/logout.php';
if ($p === 'connexion')
    require '../pages/connexion.php';
if ($p === 'connexion_post')
    require '../pages/tools/connexion_post.php';
if ($p === 'inscription')
    require '../pages/inscription.php';
if ($p === 'inscription_post')
    require '../pages/tools/inscription_post.php';
if ($p === 'user')
    require '../pages/user.php';
if ($p === 'webcam')
    require '../pages/webcam.php';
if ($p === 'single')
    require '../pages/single.php';
$content = ob_get_clean();
require '../pages/templates/default.php';
