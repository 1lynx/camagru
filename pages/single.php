<ul>
<div class="galery">
        <?php
        $id = $_GET['id'];
        $statement = ("SELECT * FROM articles WHERE id='$id'");
        foreach($db->query($statement) as $post): $path = $post->photo ?>

            <div class="single_block">
                    <img id="single_image" src="<?= $post->photo?>" alt="">
            </div>

        <?php endforeach; ?>
        <div class="comment_box">

        </div>
</div>
</ul><br>
<ul>
    <?php
    if (isset($_SESSION['login']))
    {
        ?>
        <div class="effect_box">
            <div class="effecter">
                <a href="index.php?p=effect&pic=<?php echo $path?>&e=contrast&a=more&id=<?php echo $id;?>">
                    <img class="adder" src="../img/plus.png">
                </a>
            <img class="effecticon" src="../img/contrast.png">
                <a href="index.php?p=effect&pic=<?php echo $path?>&e=contrast&a=less&id=<?php echo $id;?>">
                    <img class="adder" src="../img/minus.png">
                </a>
            </div>

            <div class="effecter">
                <a href="index.php?p=effect&pic=<?php echo $path?>&e=bright&a=more&id=<?php echo $id;?>">
                    <img class="adder" src="../img/plus.png">
                </a>
                <img class="effecticon" src="../img/sun.png">
                <a href="index.php?p=effect&pic=<?php echo $path?>&e=bright&a=less&id=<?php echo $id;?>">
                    <img class="adder" src="../img/minus.png">
                </a>
            </div>
            <div class="effecter">
                <a href="index.php?p=effect&pic=<?php echo $path?>&e=blur&id=<?php echo $id;?>">
                <img class="effecticon" src="../img/blur.png"></a>
                <a href="index.php?p=effect&pic=<?php echo $path?>&e=nega&id=<?php echo $id;?>">
                    <img class="effecticon" src="../img/nega.svg"></a>
                <a href="index.php?p=effect&pic=<?php echo $path?>&e=gray&id=<?php echo $id;?>">
                    <img class="effecticon" src="../img/gray.png"></a>
            </div>


        </div>
        <?php
    }
    ?>
</ul>
