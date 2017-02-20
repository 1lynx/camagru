<?php

$login = $_GET['log'];
$cle = $_GET['cle'];
$datas = $db->query('SELECT * FROM users WHERE 
    (login = :login)',
    ['login' => $login])->fetch();

$cle_db = $datas['cle'];

if ($cle_db == '1')
{
    echo "Votre compte est deja actif!";
}
else {
    if ($cle == $cle_db)
    {
        $status = ("UPDATE users SET `cle`='1' WHERE login='$login'");
        $db->simple_query($status);
        header('Location: index.php?p=user&c=success');
    }
    else {
        echo "Votre compte n'a pas pu etre activé";
    }
}
?>