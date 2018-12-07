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
    color: #0E0E0E;
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
      background-size: 60%;
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

$news = explode('class="attachment-mh-magazine-content size-mh-magazine-content wp-post-image"', $dadosSite);
$news1 = explode('</a>', $news[1]);

$news2 = explode('<a class="mh-tuhmb-icon mh-thumb-icon-small-mobile"
', $dadosSite);
$news3 = explode('></a>', $news2[0]);

// -- > PARA MOSTRAR O CONTEÚDO ( Notícia Principal )
$not1 = array($news1[0], $news1[1], $news1[3],$news1[2]);
foreach ($not1 as $noticia1) {  
    echo $noticia1;
}

// --> PARA MOSTRAR O CONTEÚDO ( Notícias Restantes )
$not2 = array($news3[2],$news3[3]);
foreach ($not2 as $noticia2) {  
    
    echo $noticia2;
}

?>

</body>
</html>