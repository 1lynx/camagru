<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="../public/css/style.css.php" rel="stylesheet"/>
  </head>
  <body>
        <div class="menubar">
              <a href="index.php?p=home"><img id="logo" src="../img/logo.png"></a>
              <a href="index.php?p=<?php
              if (!isset($_SESSION['login']))
                  echo 'connexion';
              else
                  echo 'user';
              ?>"><img id="user_logo" src="../img/<?php
              if (!isset($_SESSION['login'])) {
                  if ($_GET['c'] == false)
                  {
                      echo 'user.png';
                  }
                  else {
                      echo 'wrong.png';
                  }

              }
              else {
                      echo 'user.png';
              }
              ?>"></a>
              <a href="index.php?p=webcam"><img id="photo_logo" src="../img/photo.png"></a>
        </div><br><br><br><br><br><br>
    <div class="container">
        <?= $content; ?>
    </div>
    <div class ="footer">

    </div>
  </body>
</html>
