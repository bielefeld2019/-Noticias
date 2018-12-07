<!DOCTYPE html>
<html>
<head>
	<title></title>

<style type="text/css"> 

a:-webkit-any-link {
    color: black;
    margin-bottom: 14px;
    text-decoration: none;
    font-size: unset;
    font-family: arial;
    font-weight: bold;

}

p {
	color: black;
    cursor: pointer;
    text-decoration: none;
    font-size: 22px;
    font-family: arial;
    }

h3 {
	font-color: black;
    font-family: arial;
    font-weight: bold;
    font-size: 40px;
    margin-bottom: 14px;

}

body{
	  background-color: #900;
	  color: #900;
	  border: 10%;
	  background-size: 70%
}
img{
	margin-top: 10px;
    width: 720px;
    height: 480px;
}
</style>

</head>

<body>

 
<?php

$url = 'http://www.ambientebrasil.com.br';

$dadosSite = file_get_contents($url);

$tit2 = explode('<a class="mh-thumb-icon mh-thumb-icon-small-mobile">', $dadosSite);
$titu2 = explode('</a>', $tit2[0]);

$img2 = explode('<a class="mh-tuhmb-icon mh-thumb-icon-small-mobile"
', $dadosSite);
$imgm2 = explode('></a>', $img2[0]);

$not2 = array($imgm2[2],$imgm2[3]);
echo '<div id="caixa">';
foreach ($not2 as $noticia2) {	
	
	echo $noticia2;
	
}

?>

</body>
</html>