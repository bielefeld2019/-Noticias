<style type="text/css"> 
a:link
{ 
text-decoration:none; 
font-size: 24px;
color:black;
font: arial;
} 

</style>

<?php

// URL DO SITE
$url = 'http://www.ambientebrasil.com.br/';

// PEGANDO TODO CONTEUDO
$dadosSite = file_get_contents($url);

// PEGANDO A IMAGEM
$logo = explode('class="mh-posts-large-thumb">
',$dadosSite);
$logo2 = explode('></figure>',$logo[0]);

// PEGANDO A IMAGEM
$img1 = explode('<div class="mh-image-caption mh-posts-large-caption"
>',$dadosSite);
$img2 = explode('</div>',$img1[0]);

// PEGANDO O TÍTULO
$titulo1 = explode('<h3 class="entry-title mh-posts-large-title">
',$dadosSite);
$titulo2 = explode('</h3>',$titulo1[1]);

// PEGANDO A DESCRIÇÃO
$descri1 = explode('<p>',$dadosSite);
$descri2 = explode('</p>',$descri1[1]);

// ---------------------------------------------------- // 

// PEGANDO O TÍTULO ---X--- PERGUNTAR COMO PEGAR AS 2 NOTICIAS COMO ELAS TEM AS MESMAS CLASSES E ETC
$titulo3 = explode('<h3 class="mh-posts-digest-title mh-posts-digest-title-large">
',$dadosSite);
$titulo4 = explode('</h3>', $titulo3[1]);

// PEGANDO O TÍTULO PERGUNTAR COMO PEGAR AS 2 NOTICIAS COMO ELAS TEM AS MESMAS CLASSES E ETC
$titulo5 = explode('<h3 class="mh-posts-digest-title mh-posts-digest-title-small">', $dadosSite);
$titulo6 = explode('</h3>',$titulo5[1]);

// ----- 4
// PEGANDO O TÍTULO ---X---  PERGUNTAR COMO PEGAR AS 2 NOTICIAS COMO ELAS TEM AS MESMAS CLASSES E ETC
$titulo7 = explode('<h3 class="entry-title mh-posts-list-title">
', $dadosSite);
$titulo8 = explode('</h3>',$titulo7[1]);

// PEGANDO A DESCRIÇÃO
$descri7 = explode('<div class="mh-posts-list-excerpt clearfix">
',$dadosSite);
$descri8 = explode('</div>',$descri7[1]);

// PEGANDO A IMAGEM
$img7 = explode('<img width="678" height="381" src="http://noticias.ambientebrasil.com.br/wp-content/uploads/2018>"',$dadosSite);
$img8 = explode('/>',$img7[0]);

// ---------------------------------------------------- // 

// IMPRIMIR NA TELA
echo "<br><br>";
echo "<table width:1000; weigth:700; margin-top:0;>

  <tr>
  		<td>".$logo[0]."<h2><strong>".$titulo2[0]."</strong></h2><h5>".$descri2[0]."</h5><br><h2>".$titulo4[0]."</h2><br><h4>".$titulo6[0]."</h4><br><h4>".$titulo8[0]."</h4><h5>".$descri8[0]."</h5></td>
  		
  	</tr>	

  	</table>";

 
?>