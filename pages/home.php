<ul>
<div class="galery">

<?php foreach($db->query('SELECT * FROM articles') as $post): ?>

    <div class="galery_block">
        <a href="index.php?p=post&id=<?= $post->id; ?>">
          <img id="image" src="<?= $post->photo?>" alt="">
        </a>
    </div>

<?php endforeach; ?>

</div>
</ul>
