<?php

$id = $_GET['id'];

if ($_GET['e'] === 'contrast')
{
    if ($_GET['a'] === 'more')
    {
        $im = imagecreatefrompng($_GET['pic']);
        imagefilter($im, IMG_FILTER_CONTRAST, -10);
        $result = imagepng($im, $_GET['pic']);
        imagedestroy($im);
        header ("Location: $_SERVER[HTTP_REFERER]" );
    }
    if ($_GET['a'] === 'less')
    {
        $im = imagecreatefrompng($_GET['pic']);
        imagefilter($im, IMG_FILTER_CONTRAST, 10);
        $result = imagepng($im, $_GET['pic']);
        imagedestroy($im);
        header ("Location: $_SERVER[HTTP_REFERER]" );

    }

}
if ($_GET['e'] === 'bright')
{
    if ($_GET['a'] === 'more')
    {
        $im = imagecreatefrompng($_GET['pic']);
        imagefilter($im, IMG_FILTER_BRIGHTNESS, 10);
        $result = imagepng($im, $_GET['pic']);
        imagedestroy($im);
        header ("Location: $_SERVER[HTTP_REFERER]" );

    }
    if ($_GET['a'] === 'less')
    {
        $im = imagecreatefrompng($_GET['pic']);
        imagefilter($im, IMG_FILTER_BRIGHTNESS, -10);
        $result = imagepng($im, $_GET['pic']);
        imagedestroy($im);
        header ("Location: $_SERVER[HTTP_REFERER]" );

    }
}

if ($_GET['e'] === 'blur')
{
    $im = imagecreatefrompng($_GET['pic']);
    imagefilter($im, IMG_FILTER_SELECTIVE_BLUR);
    $result = imagepng($im, $_GET['pic']);
    imagedestroy($im);
    header ("Location: $_SERVER[HTTP_REFERER]" );
}
if ($_GET['e'] === 'nega')
{
    $im = imagecreatefrompng($_GET['pic']);
    imagefilter($im, IMG_FILTER_NEGATE);
    $result = imagepng($im, $_GET['pic']);
    imagedestroy($im);
    header ("Location: $_SERVER[HTTP_REFERER]" );
}
if ($_GET['e'] === 'gray')
{
    $im = imagecreatefrompng($_GET['pic']);
    imagefilter($im, IMG_FILTER_GRAYSCALE);
    $result = imagepng($im, $_GET['pic']);
    imagedestroy($im);
    header ("Location: $_SERVER[HTTP_REFERER]" );
}











?>