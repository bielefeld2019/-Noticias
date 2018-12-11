<!DOCTYPE html>
<html>
<head>
    <title>Notícias</title>

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
      background-color: white;
      color: white;
      border: 8px;
      padding: 12%;
      background-size: 40%;
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

// ============ //
$new = explode('<div id="mh_magazine_posts_large-5"
', $dadosSite);
 $news1 = explode('></div>', $new[0]);

$news2 = explode('<a class="mh-tuhmb-icon mh-thumb-icon-small-mobile"
', $dadosSite);
$news3 = explode('></a>', $news2[0]);
// ============ //

// -- > PARA MOSTRAR O CONTEÚDO ( Notícia Principal )
$not = array($new[1], $news1[3]);
foreach ($not as $noticia) {  
    echo $noticia;
}

// --> PARA MOSTRAR O CONTEÚDO ( Notícias Restantes )
$not2 = array($news3[2],$news3[3]);
foreach ($not2 as $noticia2) {  
    echo $noticia2;
}

// --> PARA MOSTRAR A NOTÍCIA DA REDAÇÃO
    $news4 = explode('<div class="mh-custom-posts-large-inner clearfix">', $dadosSite);
    $news5 = explode('</div>', $news4[1]);

    $not3 = array($news5[0], $news5[2]);
    foreach ($not3 as $noticia3) {
        echo "<br>";
        echo $noticia3;
    }

?>

</body>
</html>