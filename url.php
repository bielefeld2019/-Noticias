<?php
$url = 'http://www.ambientebrasil.com.br/';

$dadosSite = file_get_contents($url);

// ----------------------------- //
$tit1 = explode('<h3 class="mh-posts-digest-title mh-posts-digest-title-large">
', $dadosSite);
$titu1 = explode('</h3>', $tit1[1]);

$img1 = explode('<figure class="mh-posts-digest-thumb">
', $dadosSite);
$imgm1 = explode('</figure>', $img1[1]);

//------

$tit2 = explode('<h3 class="mh-posts-digest-title mh-posts-digest-title-large">
', $dadosSite);
$titu2 = explode('</h3>', $tit2[1]);

$img2 = explode('<figure class="mh-posts-digest-thumb">
', $dadosSite);
$imgm2 = explode('</figure>', $img2[1]);

//------
$tit3 = explode('<div class="mh-row mh-posts-digest-wrap mh-posts-digest-small clearfix">', $dadosSite);
$titu3 = explode('</div>', $tit3[0]);

//------
$tit4 = explode('<h3 class="mh-posts-digest-title mh-posts-digest-title-small">', $dadosSite);
$titu4 = explode('</h3>', $tit4[0]);



// ----------------------------- //

//$not1 = array($tit1[0], $imgm1[1]);

//$not2 = array($tit2[1], $imgm2[1]);

$not3 = array($tit3[0], $titu3[10]);

//$not4 = array($tit4[0], $titu4[1] );

//foreach ($not1 as $noticia1) {
//	echo $noticia1 . "<br />";
//}
	
//foreach ($not2 as $noticia2) {
//	echo "<center>".$noticia2."</center>" . "<br />";
//}

foreach ($not3 as $noticia3) {
	echo $noticia3 . "<br />";
}

//foreach ($not4 as $noticia4) {
//	echo $noticia4 . "<br />";
//}




?>