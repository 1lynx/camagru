<br><br><div class='main_box'><center><label>
<?php

$login = $_GET['log'];
$cle = $_GET['cle'];
$datas = $db->query('SELECT * FROM users WHERE 
    (login = :login)',
    ['login' => $login])->fetch();

$cle_db = $datas['cle'];

if ($cle_db == '1')
{
    echo "Your account is already activated";
}
else {
    if ($cle == $cle_db)
    {
        $status = ("UPDATE users SET `cle`='1' WHERE login='$login'");
        $db->simple_query($status);
        echo "Your account has been activated";
    }
    else {
        echo "An error has occured!";
    }
}
?>
</label></center></div>