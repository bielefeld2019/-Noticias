<?php

$url = 'http://www.ambientebrasil.com.br/';

$dadosSite = file_get_contents($url);

//------

$tit1 = explode('<h3 class="mh-posts-digest-title mh-posts-digest-title-small">', $dadosSite);
$titu1 = explode('</h3>', $tit1[1]);

$not1 = array($tit1[0], $titu1[1]);

foreach ($not1 as $noticia1) {
	echo $noticia1 . "<br />";
}

// ----------------------------- //

//$tit2 = explode('<div class="mh-row mh-posts-digest-wrap mh-posts-digest-small clearfix">', $dadosSite);
//$titu2 = explode('</div>', $tit2[1]);

//$not2 = array($titu2[1], $titu2[2]);

//foreach ($not2 as $noticia2) {
//	echo $noticia2 . "<br />";
//}

// ----------------------------- //

$tit3 = explode('<a class="mh-thumb-icon mh-thumb-icon-small-mobile">', $dadosSite);
$titu3 = explode('</a>', $tit3[0]);

$img3 = explode('<a class="mh-thumb-icon mh-thumb-icon-small-mobile"
', $dadosSite);
$imgm3 = explode('></a>', $img3[0]);

$not3 = array($imgm3[2],$imgm3[3]);

foreach ($not3 as $noticia3) {
	echo $noticia3 . "<br />";

}


?>