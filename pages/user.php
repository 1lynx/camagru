
<div class="userbox">
    <div class="galery">

        <?php
        $requete = "SELECT * FROM articles WHERE login='$login'";
        foreach($db->query($requete) as $obj):
          $nbArt++;
        endforeach;
        echo $nbArt;
        $perPage = 15;
        $nbPage = ceil($nbArt/$perPage);
        if(isset($_GET['e']) && $_GET['e']>0 && $_GET['e']<$nbPage) {
          $cPage = $_GET['e'];
        }
        else {
          $cPage = 1;
        }
        $login = $_SESSION['login'];
        $req = ("SELECT * FROM articles WHERE login='$login' ORDER BY id DESC LIMIT ".(($cPage-1)*$perPage).",$perPage");
        foreach($db->query($req) as $post):?>

            <div class="galery_block">
                <div class="galery_head">
                <a href="index.php?p=delete&pic=<?= $post->photo?>&id=<?= $post->id ?>">
                    <img id="delete" src="../img/delete.png">
                </a></div>
                <a href="index.php?p=single&id=<?= $post->id; ?>">
                    <img id="image_user" src="<?= $post->photo?>" alt="">
                </a>
            </div>

        <?php endforeach; ?>
    </div>
    <?php
    for($i=1;$i<=$nbPage;$i++) {
      if($i==$cPage) {
          echo "$i - ";
      }
      else {
          echo "<a href='index.php?p=user&e=$i'>$i - </a>";
      }
    }

    ?>
  </div>

    <div class="settingsbox">
        <a href="index.php?p=administration"><img class="circles" src="../img/modify.png"></a>
    </div>
