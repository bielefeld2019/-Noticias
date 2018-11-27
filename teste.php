<?php
$url = 'http://www.ambientebrasil.com.br/';

$dadosSite = file_get_contents($url);

$titulo1 = ('<h3 class="entry-title mh-posts-large-title">
</h3>');

$titulo3 = ('<h3 class="mh-posts-digest-title mh-posts-digest-title-large">
</h3>');


$not1 = array($titulo1, $titulo3, '7' );

//foreach ($not1 as $noticia) {

//echo $noticia;  

if (in_array($titulo1, $not1)) {
	echo "Valor valido";
}
else{

	echo "Valor nao encontrado";
}
//}


?>