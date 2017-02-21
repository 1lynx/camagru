<ul>
<div class="galery">
        <?php
        $id = $_GET['id'];
        $statement = ("SELECT * FROM articles WHERE id='$id'");
        foreach($db->query($statement) as $post): ?>

            <div class="single_block">
                    <img id="single_image" src="<?= $post->photo?>" alt="">
            </div>

        <?php endforeach; ?>
        <div class="comment_box"></div>
</div>
</ul>
