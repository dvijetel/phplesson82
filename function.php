<!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aspernatur beatae dignissimos et fugiat hic ipsa libero maiores maxime obcaecati quasi quis recusandae repellat sequi, soluta temporibus vel vitae voluptatem!200</p>-->
<?php
function textCut($str,$a) {
    $str1=substr($str,0,$a);
   $str2=strrpos($str1," ",-1);
   $str3=substr($str,0,$str2);
    echo $str3;
}

?>

