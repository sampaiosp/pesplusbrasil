<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>PES Plus Brasil - Painel de Extras da Master League</title>

	<link type="text/css" rel="stylesheet" media="screen" href="estilos.css" />
	<?php include_once ("site/wwwroot/usuario/webcup/ranking/CSTcampeoes.php");?>
</head>
<body>
	<div id="site">
	<nav>
	<ul class="menu">
	<li><a href="http://pesplusbrasil.com.br/">Ir ao Painel</a></li>
		<li><a href="#">Gerenciar Jogos</a>
			<ul>
			<li><a href="http://pesplusbrasil.com.br/insere_jgs.php" id="ins_placar">Inserir Placar</a></li>
			<li><a href="#footer">Partidas Pendentes</a></li>
			<li><a href="#resultados2">Resultados</a></li>
        	</ul>
		</li>
	<li><a href="https://chat.whatsapp.com/CYS7z08Sgad1tGfzKUt5t0">WhatsApp</a></li>	
	</ul>
	</nav>
	</br>
	</br>
	<section id="resultados">
	<header>
	Aqui estarão os resultados das partidas
	</header>
	<article>
	<?php rst_partidas();?>
	</article>
	<footer>Teste de rodapé</footer>
	</section>
		<section id="resultados2">
	<header>
	Aqui tem um outro teste
	</header>
	<article>
	teste pq essa porra não funciona
	</article>
	</section>
	</div>
</body>
</html>