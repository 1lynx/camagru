<?php
session_start();
$login = $_SESSION['login'];

$path = "../../img/upload/";

if(!is_dir($path))
    mkdir($path, 0777, true);


$img = $_POST['data'];
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
$file = $path . uniqid() . '.png';
$base_name = substr($file, 3);
$success = file_put_contents($file, $data);
$im = imagecreatefrompng($file);
imagefilter($im, IMG_FILTER_CONTRAST, -15);
imageflip($im, IMG_FLIP_HORIZONTAL);

$name = "../../img/stickers/01.png";
$filtre = imagecreatefrompng($name);
$largeur_source = imagesx($filtre);
$hauteur_source = imagesy($filtre);
$largeur_destination = imagesx($im);
$hauteur_destination = imagesy($im);

imagecopy($im, $filtre, 0, 0, 0, 0, $largeur_source, $hauteur_source);
imagepng($im, $file);
imagedestroy($im);


$pdo = new PDO('mysql:host=localhost', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$requete = "INSERT INTO blog.articles (photo, login, nb_like) VALUES('$base_name', '$login', 0);";

$pdo->prepare($requete)->execute();

?>