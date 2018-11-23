<?php

// URL DO SITE
$url = 'http://www.ambientebrasil.com.br/';

// PEGANDO TODO CONTEUDO
$dadosSite = file_get_contents($url);

// PEGANDO A IMAGEM
$array1 = explode('src="http://noticias.ambientebrasil.com.br/wp-content/uploads/2018/11/"
',$dadosSite);
print "<table>";

foreach ($array1 as $i => $array) {

	if ($i) {
		echo "<tr>
		<td>TÍTULO</td>
		<td>DESCRIÇÃO</td>
		<TR></tr>";

		$logo = explode("><a>", $array);

		$titulo3 = explode('<h3 class="mh-posts-digest-title mh-posts-digest-title-large">', $array);
		$titulo3 = explode('</h3>', $titulo3[1]);

		print("<td width='30'><center>".$titulo3[0]."</center></td>");
	}
	
	$i++;
}

print("</table></center>");

?>