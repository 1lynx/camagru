<ul>
<div class="home">
<?php foreach($db->query('SELECT * FROM articles ORDER BY id DESC') as $post): ?>
    <div class="photobox">
    <div class="img_block">
        <a href="index.php?p=single&id=<?= $post->id; ?>">
          <img id="image" src="<?= $post->photo?>" alt="">
        </a>
    </div>
    <?php $com_req = ("SELECT * FROM comment WHERE photo_id='$post->id' ORDER BY date_creation DESC");
    if ($db->query($com_req) != null) {
    ?>
    <div class="comment_box_home">
        <?php
        foreach($db->query($com_req) as $com):?>
            <div class="commentaire">
                    <div class="talker">De <?= $com->user_login ?> <br>le <?= $com->date_creation?></div>
                    <div class="message"><p class="mess"><?= $com->content ?></p>
                        </div>
                <?php if ($_SESSION['login'] === $com->user_login) {
                    $user_login = $com->user_login;
                    ?>
                    <a href="index.php?p=delete_com&id=<?= $com->com_id?>">
                        <img id="delete_com" src="../img/delete.png">
                    </a>
                    <?php
                }
                ?>
            </div>
        <?php endforeach; ?>

    </div>
    <?php } ?>
    <?php if (isset($_SESSION['login'])) { ?>

    <div class="messenger_home"><center>
            <form id="post_comment"action="?p=comment&id=<?php echo $post->id ?>" method="POST">
                <textarea class="inputcom" rowz = "10" cols = "50" name="comment"></textarea><br>
                <button class="button_send" type="submit" value="Send!"><h2 class="send">SEND</h2></button><br>
            </form></center>
    </div>
    <?php } ?>
    </div>
<?php endforeach; ?>

<br><br>
</div>
</ul>
