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
imagefilter($im, IMG_FILTER_CONTRAST, -5);
imageflip($im, IMG_FLIP_HORIZONTAL);
$result = imagepng($im, $file);
imagedestroy($im);


$pdo = new PDO('mysql:host=localhost', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$requete = "INSERT INTO blog.articles (photo, login) VALUES('$base_name', '$login');";

$pdo->prepare($requete)->execute();

?>