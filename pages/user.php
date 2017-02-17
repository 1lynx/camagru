<ul>
    <div class="userbox">
    <div class="galery">

        <?php
        $login = $_SESSION['login'];
        $req = ("SELECT * FROM articles WHERE login='$login'");
        foreach($db->query($req) as $post):?>


            <div class="galery_block">
                <a href="index.php?p=post&id=<?= $post->id; ?>">
                    <img id="image" src="<?= $post->photo?>" alt="">
                </a>
            </div>

        <?php endforeach; ?>
    </div></div>
    <div class="settingsbox">
        <img class="circles" src="../img/modify.png">
        <a href='index.php?p=logout'>
                <img class="circles" src="../img/logout.png">
            </a>
    </div>


</ul>









