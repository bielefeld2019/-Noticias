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

// ----------------------------- //
$not1 = array($tit1[0], $imgm1[1]);

foreach ($not1 as $noticia1) {
	echo $noticia1 . "<br />";
}
	





?>