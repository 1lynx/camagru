<div class="main_box">
<?php
if (isset($_SESSION['login'])) {
    header('Location: index.php?p=user');
} else {
    $content = $user_connect->get_connexion();
    echo $content;
}
?>
</div>

