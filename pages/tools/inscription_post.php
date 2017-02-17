<?php
    if($_POST['login'] != NULL AND $_POST['password'] != NULL AND $_POST['password_confirm'] != NULL  AND  $_POST['password'] == $_POST['password_confirm'])
    {
        $login = $_POST['login'];
        $password = $_POST['password'];
        try
        {
            $res = $db->query('INSERT INTO users (login, password) VALUES(:login, :password)', array(
            ':login' => $login,
            ':password'=> md5($password)));

            echo "<h1>Account created</h1>";
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    }

    if($_POST['login'] == NULL)
    {
        echo 'Vous devez entrer un login';
    }
    if($_POST['password'] == NULL)
    {
        echo 'Vous devez entrer un mot de passe';
    }
    if($_POST['password_confirm'] == NULL)
    {
        echo 'Vous devez confirmer votre mot de passe';
    }
    if($_POST['password'] != $_POST['password_confirm'])
    {
        echo 'Les deux mots de passe doivent être identiques';
    }
?>
