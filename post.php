<?php
include "header.php";
include "function.php";
?>

<h3>Список статей</h3>
<?php
$news = file("news.txt");

foreach ($news as $elem) :
    $header = explode(":", $elem)[0];
    $text = explode(":", $elem)[4];
    $date = explode(":", $elem)[1];
    $author = explode(":", $elem)[2];
    $image = explode(":", $elem)[3];
    if ($btn == $head) {?>
   <div class="media">
  <img src="images/<?= $image?>" class="mr-3" alt="...">
  <div class="media-body">
    <h5 class="mt-0"><?= $head?></h5>
      <?php echo textCut($text,20)?><a href="validator.php?page=<?= $header?>"  role="button" aria-pressed="true">(показать всю статью)</a><br>
      <?=$date?><br>
      <?=$author?>
   </div>
</div>
<?php

 }
    endforeach;?>
<br>
<button type="button" class="btn btn-outline-secondary"><a href="index.php">Добавить статью</a></button>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>