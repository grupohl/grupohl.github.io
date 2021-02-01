<?php
	require_once('../view/footer.php');
	require_once('../view/header.php');
	$hTags[] = <<<HTML
<link rel="stylesheet" type="text/css" href="https://s3.amazonaws.com/gallery-css/gallery.min.css">
<link rel="stylesheet" type="text/css" href="https://s3.amazonaws.com/gallery-css/gallery.theme.css">
<link rel="stylesheet" type="text/css" href="../assets/css/negociosDigitais/style.css">
HTML;
	$content = <<<HTML
<main>
	<section id="section-carousel-container">
		<div class="gallery autoplay items-3">
			<div id="item-1" class="control-operator"></div>
			<div id="item-2" class="control-operator"></div>
			<div id="item-3" class="control-operator"></div>

			<figure class="item">
			  	<h1>
			  		<img src="https://static.wixstatic.com/media/8ce7c3_28f3c78c23d542b4a2d741a1637fb4a1~mv2.png/v1/fill/w_1349,h_558,al_c,q_90,usm_0.66_1.00_0.01/8ce7c3_28f3c78c23d542b4a2d741a1637fb4a1~mv2.webp">
			  	</h1>
			</figure>

			<figure class="item">
			   	<h1>
			   		<img src="https://static.wixstatic.com/media/8ce7c3_c50c05d5a6c348e6ae06f2afa7b884f5~mv2.png/v1/fill/w_1349,h_558,al_c,q_90,usm_0.66_1.00_0.01/8ce7c3_c50c05d5a6c348e6ae06f2afa7b884f5~mv2.webp">
				</h1>
			</figure>

			<figure class="item">
			   	<h1>
			   		<img src="https://static.wixstatic.com/media/8ce7c3_63e842a2d29a43aface20903f67871f0~mv2.png/v1/fill/w_1349,h_558,al_c,q_90,usm_0.66_1.00_0.01/8ce7c3_63e842a2d29a43aface20903f67871f0~mv2.webp">
			   	</h1>
			</figure>

			<div class="controls">
			   	<a href="#item-1" class="control-button">.</a>
			   	<a href="#item-2" class="control-button">.</a>
			   	<a href="#item-3" class="control-button">.</a>
			   	<button onclick="slideReturn()">
			   		<span class="material-icons">
						navigate_before
					</span>
				</button>
			   	<button onclick="slideJump()">
			   		<span class="material-icons">
			   			navigate_next
			   		</span>
			   	</button>
			</div>
	</div>
</section>

	<div id="div-figures-container">
		<figure id="gereciamento-de-midias">
			<img src="https://static.wixstatic.com/media/8ce7c3_cf1f21f0eefe4ca8bed072d242246f90~mv2.jpg/v1/fill/w_512,h_533,al_c,q_80/8ce7c3_cf1f21f0eefe4ca8bed072d242246f90~mv2.webp">
			<div>
				<h2>Gerenciamento de mídias</h2>
				<section>
					<p>Conjunto de ações que otimiza as suas redes sociais, levando mais conhecimento e planejamento nas suas postagens, com posts trabalhados e que trazem conteúdos chaves para atingir bons resultados.</p>
				</section>
				<button>Conferir<iframe src="../assets/img/svg/whatsapp.svg"></iframe></button>
			</div>
		</figure>
		<figure id="anuncios-patrocinados">
			<img src="https://static.wixstatic.com/media/8ce7c3_c0732596fd964b4c923c715bd4bcaadb~mv2.png/v1/fill/w_419,h_461,al_c,q_85/8ce7c3_c0732596fd964b4c923c715bd4bcaadb~mv2.webp">
			<div>
				<h2>Anúncios Patrocinados</h2>
				<section>
					<p>Realização de campanhas para anúncios pagos. O Anúncio Patrocinado permite que empresas possam divulgar seus produtos ou serviços nas redes sociais e alcançar resultados mais expressivos, com maior alcance e foco em vendas.</p>
				</section>
				<button>Conferir<iframe src="../assets/img/svg/whatsapp.svg"></iframe></button>
			</div>
		</figure>
		<figure id="instagram-shopping">
			<img src="https://static.wixstatic.com/media/8ce7c3_545adcb2f36e4d5680783e9c348b6c57~mv2.png/v1/fill/w_641,h_686,al_c,q_90/8ce7c3_545adcb2f36e4d5680783e9c348b6c57~mv2.webp">
			<div>
				<h2>Instagram Shopping</h2>
				<section>
					<p>Instagram Shopping é o recurso que permite que marcas criem suas próprias lojas dentro da rede social. Por meio dele, é possível cadastrar produtos e criar marcações nas fotos e nos stories, direcionando o usuário para a compra do item de uma forma simples.
						Crie o seu e-commerce agora mesmo!
					</p>
				</section>
				<button>Conferir<iframe src="../assets/img/svg/whatsapp.svg"></iframe></button>
			</div>
		</figure>
		<figure id="google-youtube-ads">
			<img src="https://static.wixstatic.com/media/8ce7c3_a55bd06911dc4a00a96854c4b1085eb5~mv2.jpg/v1/fill/w_675,h_749,al_c,q_85,usm_0.66_1.00_0.01/8ce7c3_a55bd06911dc4a00a96854c4b1085eb5~mv2.webp">
			<div>
				<h2>Google e Youtube ADS</h2>
				<section>
					<p>Nesse serviço, destacamos a importância dessas ferramentas, Google e YouTube ADS, onde trabalharemos com o auxílio delas respectivamente, para criação de anúncios patrocinados  no Google e no Youtube. Dessa forma conseguimos atingir o público alvo da sua empresa de uma forma simples, com um maior planejamento e praticidade.</p>
				</section>
				<button>Conferir<iframe src="../assets/img/svg/whatsapp.svg"></iframe></button>
			</div>
		</figure>
		<figure id="criacao-de-sites">
			<img src="https://static.wixstatic.com/media/8ce7c3_77570c4b2ff946748ae05cefbe0cc728~mv2.png/v1/fill/w_520,h_709,al_c,q_90/8ce7c3_77570c4b2ff946748ae05cefbe0cc728~mv2.webp">
			<div>
				<h2>Criação de Sites</h2>
				<section>
					<p>Nesse serviço, destacamos a importância do Site para a sua empresa, pois o mesmo é uma porta de entrada para o seu negócio na internet. O Site é o principal meio para sua empresa no mundo digital, é nele que ficam armazenadas todas as informações do seu negócio, tais como a missão da sua empresa, serviços e produtos que você trabalha, entre vários outros pontos, que são de acordo com o seu intuito e crescimento.</p>
				</section>
				<button>Conferir<iframe src="../assets/img/svg/whatsapp.svg"></iframe></button>
			</div>
		</figure>
		<figure id="pesquisas-online">
			<img src="https://static.wixstatic.com/media/8ce7c3_d37efcd6ae164d10a867be2b5b487cc9~mv2.jpg/v1/fill/w_416,h_504,al_c,lg_1,q_80/8ce7c3_d37efcd6ae164d10a867be2b5b487cc9~mv2.webp">
			<div>
				<h2>Pesquisa Online</h2>
				<section>
					<p>A pesquisa online é um método de investigação que envolve a coleta de informações com o auxílio da internet. Nesse serviço, você poderá obter informações essenciais de uma forma prática e eficiente, com a agilidade e rapidez que faz a diferença. Nela você encontra o que mais precisa, com toda a segurança e suporte necessário.</p>
				</section>
				<button>Conferir<iframe src="../assets/img/svg/whatsapp.svg"></iframe></button>
			</div>
		</figure>
		
	</div>
	<!--
	<form method="post">
		<legend class="__row-2">
			<input type="text" name="nome" placeholder="NOME">
			<input type="text" name="sobrenome" placeholder="SOBRENOME">
		</legend>
		<legend class="__row-1">
			<input type="email" name="email" placeholder="EMAIL">
		</legend>
		<legend class="__row-1">
			<input type="tel" name="telefone" placeholder="TELEFONE">
		</legend>
		<legend class="__row-2">
			<div>
				<button type="submit">Enviar</button>
				<label for="to-for-1">
					Mensagem customizada
				</label>
				<input id="to-for-1" type="checkbox" name="checkbox-mensagem-customizada">
				<textarea name="mensagem-customizada">Deixe sua mensagem aqui!</textarea>
			</div>
			<div>
				<select>
					<option>Quero um orçamento</option>
				</select>
			</div>
		</legend>
	</form> -->
	
</main>
<script type="text/javascript">
	
</script>
<script type="text/javascript" src="../assets/js/carousel.js"></script>
<script type="text/javascript" src="../assets/js/smoothAnchor.js"></script>


HTML;