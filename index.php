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
$img1 = explode('class="mh-posts-large-thumb">
',$dadosSite);
$img2 = explode('></figure>',$img1[0]);

// PEGANDO O TÍTULO
$titulo1 = explode('<h3 class="entry-title mh-posts-large-title">
',$dadosSite);
$titulo2 = explode('</h3>',$titulo1[1]);

// PEGANDO A DESCRIÇÃO
$descri1 = explode('<p>',$dadosSite);
$descri2 = explode('</p>',$descri1[1]);

// ---------------------------------------------------- // 

// PEGANDO A IMAGEM
// $img3 = explode('class="mh-posts-large-thumb">
//',$dadosSite);
//$img4 = explode('</figure>',$img3[0]);

// PEGANDO O TÍTULO
$titulo3 = explode('<h3 class="mh-posts-digest-title mh-posts-digest-title-large">
',$dadosSite);
$titulo4 = explode('</h3>',$titulo3[1]);

// PEGANDO O TÍTULO
$titulo5 = explode('<h3 class="mh-posts-digest-title mh-posts-digest-title-large">
',$dadosSite);
$titulo6 = explode('</h3>',$titulo5[1]);

// ---------------------------------------------------- // 

// IMPRIMIR NA TELA
echo "<br><br>";
echo "<table>

  <tr>
  		<td><h3>".$img2[0]."<h3><h2>".$titulo2[0]."</h2><h5>".$descri2[0]."</h5></td>
  		
  	</tr>	
  	<tr>	
  	
  
  	</table>";

 
?>