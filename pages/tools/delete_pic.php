<?php

if(isset($_SESSION['login']))
{
    $path = $_GET['pic'];
    $statement = "DELETE FROM `articles` WHERE `photo`='$path'";
    $db->simple_query($statement);
    unlink($path);
    header('Location: index.php?p=user&c=success');
}
else {
    header('Location: index.php?p=user&c=fail');
}


?>