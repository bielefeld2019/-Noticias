<style type="text/css">
	
	a:-webkit-any-link {
    color: #151515;
    cursor: pointer;
    text-decoration: none;
}


</style>>

<?php

$url = 'http://www.ambientebrasil.com.br/';
$dadosSite = file_get_contents($url);

// Conteúdo principal => CP / cp

$cp = explode('<figure class="mh-posts-large-thumb">', $dadosSite);
$cp1 = explode('</figure>', $cp[1]);

$notCP = array($cp[2], $cp1[0]);

foreach ($notCP as $news1) {
	echo $news1 . "<br />";
}


 ?>