<style type="text/css"> 
a:link
{ 
text-decoration:none; 
font-size: 16px;
color:black;
font: arial;
} 
</style>

<?php

// URL DO SITE
$url = 'http://www.ambientebrasil.com.br/';

// PEGANDO TODO CONTEUDO
$dadosSite = file_get_contents($url);

$var1 = explode('<header class="mh-posts-large-header"',$dadosSite);
$var2 = explode('></header>',$var1[1]);

print "<h1><center>Notícias<br>
".$var2[0]."</center></h1>";

?>