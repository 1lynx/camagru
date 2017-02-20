<?php
    if($_POST['login'] != NULL AND $_POST['password'] != NULL AND $_POST['password_confirm'] != NULL  AND  $_POST['password'] == $_POST['password_confirm'])
    {
        $login = $_POST['login'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $cle = md5(microtime(TRUE)*100000);
        try
        {
            $res = $db->query('INSERT INTO users (login, cle, email, password) VALUES(:login, :cle, :email, :password)', array(
            ':login' => $login,
            ':password'=> $password,
            ':email'=> $email,
            ':cle' => $cle));
            $destinataire = $email;
            $sujet = "Activer votre compte" ;
            $entete = "From: camagru@gmail.com" ;

            // Le lien d'activation est composé du login(log) et de la clé(cle)
            $message = 'Bienvenue sur Camagru,
 
Pour activer votre compte, veuillez cliquer sur le lien ci dessous
ou copier/coller dans votre navigateur internet.
 
http://localhost:8888/POO/public/index.php?p=validation&log='.$login.'&cle='.$cle.'
 
 
---------------
Ceci est un mail automatique, Merci de ne pas y répondre.';

            var_dump(mail($destinataire, $sujet, $message, $entete));
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
