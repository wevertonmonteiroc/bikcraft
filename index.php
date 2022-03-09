<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Bikcraft - Bicicletas Personalizadas</title>
		<meta name="description" content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Retrô e Esporte.">

		<meta property="og:type" content="website"/>
		<meta property="og:title" content="Bikcraft - Bicicletas Personalizadas"/>
		<meta property="og:description" content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Retrô e Esporte."/>
		<meta property="og:url" content="http://bikcraft.com"/>
		<meta property="og:image" content="http://bikcraft.com/img/og-image.png"/>

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" href="favicon.ico">

		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
		<script>document.documentElement.classList.add("js");</script>
	</head>
	<body>

		<header class="header">
			<div class="container">
				<a href="index.html" class="grid-4">
					<img src="img/bikcraft.svg" alt="Bikcraft">
				</a>
				<nav class="grid-12 header_menu">
					<ul>
						<li><a href="sobre.html">Sobre</a></li>
						<li><a href="produtos.html">Produtos</a></li>
						<li><a href="portfolio.html">Portfólio</a></li>
						<li><a href="contato.html">Contato</a></li>
					</ul>
				</nav>
			</div>
		</header>

		<section class="introducao">
			<div class="container">
				<h1 data-anime="400" class="fadeInDown">Bicicletas Feitas a Mão</h1>
				<blockquote data-anime="800" class="fadeInDown quote-externo">
					<p>“não tenha nada em sua casa que você não considere útil ou acredita ser bonito”</p>
					<cite>WILLIAM MORRIS</cite>
				</blockquote>
				<a data-anime="1200" href="produtos.html" class="btn">Orçamento</a>
			</div>
		</section>
		
		<section class="produtos container fadeInDown" data-anime="1600">
			<h2 class="subtitulo">Produtos</h2>
			<ul class="produtos_lista">

				<li class="grid-1-3">
					<div class="produtos_icone">
						<img src="img/produtos/passeio.svg" alt="Bikcraft Passeio">
					</div>
					<h3>Passeio</h3>
					<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação.</p>
				</li>

				<li class="grid-1-3">
					<div class="produtos_icone">
						<img src="img/produtos/esporte.svg" alt="Bikcraft Passeio">
					</div>
					<h3>Esporte</h3>
					<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação.</p>
				</li>

				<li class="grid-1-3">
					<div class="produtos_icone">
						<img src="img/produtos/retro.svg" alt="Bikcraft Passeio">
					</div>
					<h3>Retro</h3>
					<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação.</p>
				</li>

			</ul>

			<div class="call">
				<p>clique aqui e veja os detalhes dos produtos</p>
				<a href="produtos.html" class="btn btn-preto">Produtos</a>
			</div>

		</section>
		<!-- Fecha Produtos -->

		<section class="portfolio">
			<div class="container">
				<h2 class="subtitulo">Portfólio</h2>
				<ul class="portfolio_lista">
					<li class="grid-8"><img src="img/portfolio/retro.jpg" alt="Bicicleta Retro"></li>
					<li class="grid-8"><img src="img/portfolio/passeio.jpg" alt="Bicicleta Passeio"></li>
					<li class="grid-16"><img src="img/portfolio/esporte.jpg" alt="Bicicleta Esporte"></li>
				</ul>
				<div class="call">
					<p>conheça mais o nosso portfólio</p>
					<a href="portfolio.html" class="btn">Portfólio</a>
				</div>
			</div>
		</section>

		<section class="qualidade container">
			<h2 class="subtitulo">Qualidade</h2>
			<img src="img/bikcraft-qualidade.svg" alt="Bikcraft">
			<ul class="qualidade_lista">
				<li class="grid-1-3">
					<h3>Durabilidade</h3>
					<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação renovação renovação</p>
				</li>
				<li class="grid-1-3">
					<h3>Design</h3>
					<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação renovação renovação</p>
				</li>
				<li class="grid-1-3">
					<h3>Sustentabilidade</h3>
					<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação renovação renovação</p>
				</li>
			</ul>
			<div class="call">
				<p>conheça mais a nossa história</p>
				<a href="sobre.html" class="btn btn-preto">Sobre</a>
			</div>
		</section>

		<section class="quebra">
			<blockquote class="quote-externo container">
				<p>“o verdadeiro segredo da felicidade está em ter um genuíno interesse por todos os detalhes da vida cotidiana.”</p>
				<cite>WILLIAM MORRIS</cite>
			</blockquote>
		</section>

		<footer>
			<div class="footer">
				<div class="container">

					<div class="grid-8 footer_historia">
						<h3>Nossa História</h3>
						<p>O verdadeiro segredo da felicidade está em ter um genuíno interesse por todos os detalhes da vida cotidiana cotidiana. interesse por todos os detalhes da vida cotidiana cotidiana.</p>
					</div>

					<div class="grid-4 footer_contato">
						<h3>Contato</h3>
						<ul>
							<li>- 21 23232-4343</li>
							<li>- contato@bikcraft.com</li>
							<li>- Botafago - RJ</li>
						</ul>
					</div>

					<div class="grid-4 footer_redes">
						<h3>Contato</h3>
						<ul>
							<li><a href="http://facebook.com" target="_blank"><img src="img/redes-sociais/facebook.svg" alt="Facebook Bikcraft"></a></li>
							<li><a href="http://instagram.com" target="_blank"><img src="img/redes-sociais/instagram.svg" alt="Instagram Bikcraft"></a></li>
							<li><a href="http://twitter.com" target="_blank"><img src="img/redes-sociais/twitter.svg" alt="Twitter Bikcraft"></a></li>
						</ul>
					</div>

				</div>
			</div>

			<div class="copy">
				<div class="container">
					<p class="grid-16">Bikcraft 2019 - Alguns direitos reservados.</p>
				</div>
			</div>
		</footer>

	<!-- JavaScript -->
	<script src="./js/simple-anime.js"></script>
  <script src="./js/script.js"></script>
	<!-- JavaScript -->

	</body>
</html>