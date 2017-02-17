<?php
$fail = $_GET['c'];
if (isset($_SESSION['login']))
{
  header('Location: index.php?p=user');
}
else {
    echo "<div class='main_box'>";
    $content = $user_connect->get_connexion();
  echo $content;
}


?>
</div>
