<style type="text/css"> 

a:-webkit-any-link {
    color: #151515;
    margin-right: 40%;
    text-decoration: none;
    font-size: 20px;
    font-family: arial;
}

p {
	 color: #1C1C1C;
    cursor: pointer;
    text-decoration: none;
    font-size: 18px;
    font-family: arial;
    margin-bottom: 3px;
    
}


h3 {
    
    font-size: 20;
    font-weight: bold;
    margin-bottom: 3px;
}

</style>


<?php

$url = 'http://www.ambientebrasil.com.br/';

$dadosSite = file_get_contents($url);

// ============================= //

//	$tit1 = explode('<header class="mh-posts-large-header">
//', $dadosSite);
//	$titu1 = explode('</header>', $tit1[1]);
//
//	$not1 = array($tit1[0], $titu1[1]);
//
//	foreach ($not1 as $noticia1) {
//	 echo $noticia1 . "<br />";
//	}


// ============================= //

$tit2 = explode('<a class="mh-thumb-icon mh-thumb-icon-small-mobile">', $dadosSite);
$titu2 = explode('</a>', $tit2[0]);

$img2 = explode('<a class="mh-tuhmb-icon mh-thumb-icon-small-mobile"
', $dadosSite);
$imgm2 = explode('></a>', $img2[0]);

$not2 = array($imgm2[2],$imgm2[3]);

foreach ($not2 as $noticia2) {
	echo $noticia2 . "<br />";

}

?>
