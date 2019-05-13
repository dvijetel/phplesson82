<?php
include "header.php";
?>
<h2>Added news</h2>
<?php
$news=$_REQUEST["news"];
$date=$_REQUEST["date"];
$author=$_REQUEST["author"];
$text=$_REQUEST["text"];
$avatar=$_FILES["avatar"];
if(!isset($_REQUEST["sub"])) { ?>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="news" placeholder="Заголовок"><br><br>
        <input type="text" name="date" placeholder="дату публикации"><br><br>
        <input type="text" name="author" placeholder="введите имя автора"><br><br>
        <input type="file" name="avatar"><br><br>
        <textarea name="text" id="" cols="30" rows="5" placeholder="текст статьи"></textarea><br><br>
        <input type="submit" name="sub" value="опубликовать" >
    </form>
<?php }
elseif ($news=="" or $date=="" or $author=="" or $text=="") {
    echo "Все поля должны быть заполнены";
}   else {
    $handle = fopen("news.txt", "a+");
    fwrite($handle, $news . ":" . $date . ":" . $author . ":" . $avatar["name"] . ":" . $text . PHP_EOL);
    fclose($handle);
    if ($avatar["error"] !== 0) {
        echo "error code:" . $avatar["error"];
        exit();
    } elseif (is_uploaded_file($avatar["tmp_name"])) {
        move_uploaded_file($avatar["tmp_name"], "./images/" . $avatar["name"]);
        echo "Статья добавлена";
    };
    } ?>
<br>
<button type="button" class="btn btn-outline-secondary"><a href="post.php">К списку статей</a></button>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>