<?php

$login = $_SESSION['login'];

function base64_to_png($base64, $output_file, $path)
{
    $decoded = base64_decode($base64);
    file_put_contents($path.$output_file, $decoded);
    return( "img/upload/".$output_file );
}

$path = "../img/upload/";

if(!is_dir($path))
    mkdir($path, 0777, true);


define('UPLOAD_DIR', '../img/upload/');
$img = $_POST['data'];
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
$file = UPLOAD_DIR . caca . '.png';
$success = file_put_contents($file, $data);






?>