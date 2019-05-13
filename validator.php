<?php
$news = file("news.txt");
$btn=$_REQUEST["page"];

include_once "header.php";
include "function.php";
?>

<?php
    foreach ($news as $elem) :
        $head = explode(":", $elem)[0];
        $date = explode(":", $elem)[1];
        $author = explode(":", $elem)[2];
        $image = explode(":", $elem)[3];
        $text = explode(":", $elem)[4];

        if ($btn == $head) {?>
            <div class="media">
  <img src="images/<?= $image?>" class="mr-3" alt="...">
  <div class="media-body">
    <h5 class="mt-0"><?= $head?></h5>
      <?=$text?>
      <?=$date?>
      <?=$author?>
   </div>
</div>
<?php

 }
    endforeach;?>
<br>

<button type="button" class="btn btn-outline-secondary"><a href="post.php">К списку статей</a></button>

</body>
</html>