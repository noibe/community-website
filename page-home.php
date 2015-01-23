<?php /*
Template Name: Home
*/ ?>

<?php get_header( 'home' ); ?>
<div class="hero" id="foo">
	<?php if (display_header_text()): ?>
	<div class="wide container">
		<h1 class="site-title"><?php echo parsed_site_title(); ?></h1>
		<?php site_description() ?>
	</div>		
	<?php endif; ?>
	<div class="scroll-container">
		<a href="#" id="js-scroll-services" class="scroll">

			<span class="scroll-btn">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="-30 -300 1792 1792" version="1.1">
					<g transform="matrix(1,0,0,-1,288.54238,1255.0508)">
						<path
							d="m 1075,800 q 0,-13 -10,-23 L 599,311 q -10,-10 -23,-10 -13,0 -23,10 L 87,777 q -10,10 -10,23 0,13 10,23 l 50,50 q 10,10 23,10 13,0 23,-10 L 576,480 969,873 q 10,10 23,10 13,0 23,-10 l 50,-50 q 10,-10 10,-23 z"></path>
					</g>
				</svg>
			</span>
		</a>
	</div>
</div>

<div id="contenthome" class="block services grey-100 font-grey-900">

	<div class="container">
		<div class="about nextevent">
			<img src="<?php echo get_template_directory_uri(); ?>/img/cpbr.png">
			<h1>Estaremos na CPBR8!</h1>
			<p class="lead">A Campus Party Brasil é o principal acontecimento tecnológico realizado anualmente no Brasil. Nele são tratados os mais diversos temas relacionados à Internet, reunindo um grande número de comunidades e usuários da rede mundial de computadores envolvidos com tecnologia e cultura digital.</p>
		</div>
	</div>

	<div class="wide container">

		<div class="wow">
			<div class="wow-container left">

				<section class="text">
					<h1>Quem Somos</h1>

					<p>Comunidade noibe ou Família Noibe?</p>

					<p>Hmm, difícil escolha... pois a Noibe és uma comunidade em formato de família, mas também és uma família em formato de comunidade!</p>

					<p>Somos amigos da baia ancorada/sólida Noibe da Campus Party Brasil, que se encontras em vários locais ao redor do mundo para mostrar o <b>VALOR</b> da irmandade e da amizade sem fronteiras e sem preconceitos! Somos Nerds, somos gordos, somos negros, somos japoneses, somos alemães, polacos, somos guris, somos gurias, somos.... <b>NOIBE</b>!</p>

					<p>Estamos juntos, para o que tu precisares, somos o que somos, pois temos a <b>SOLIEDARIEDADE</b> e o <b>QPQ</b> (famoso Quid Pro Quo) como principais motos da nossa existência. Tu que estás lendo e que queres participar, sejas bem vindo, pois traga o teu conhecimento e a tua <b>GANA</b> de seres <b>NOIBE</b>, que as portas e os banquinhos <b>SEMPRE</b> estarão abertos para ti! Família Noibe <b>A COMUNIDADE NERD da CAMPUS PARTY and BEYOND</b>...</p>
				</section>

				<section class="img">
					<img src="<?php echo get_template_directory_uri(); ?>/img/about.jpg" alt="Quem Somos"/>
				</section>


			</div>
		</div>

		<div class="wow">
			<div class="wow-container right">

				<section class="text" style="padding:15px 60px 0px 20px;">
					<h1>Como Participar</h1>

					<p>Como participar da Comunidade/Família Noibe?</p>

					<p>Tu que estás vindo para a CPBR pela primeira vez, ou até já és veterano, mas não queres ficar em qualquer "bancada" pois tens medo do vizinho que tas sentado ao teu lado e que tens olhos de vontade de: <i>"És só tu piscares, que este teu mousepad jé eras!"</i></p>

					<p>Tuas tensões terminaram! Pois tu podes ficar em um lugar sólido, ancorado, aonde estás dentro da Campus Party por muitos anos. Os guris e gurias que participam são da tua idade e também fazem aquilo que tu fazes, jogam o que tu jogas e trabalham com o que tu trabalhas.</p>

					<p>Isto és a nossa Família Noibe. O local para que tu possas ficar tranquilo com os teus pertences, podes passar a noite jogando, ou conversando, ou jogando RPG de mesa, ou o que tu quiseres fazer.</p>

					<p>Quanto aos teus pertences principais? É só avisares para os teus vizinhos darem uma olhada enquanto tu fazes as tuas necessidades (não só fisiológicas, please) e quando voltares, encontrarás da mesma forma!</p>

					<p>Estares numa baia ancorada, és algo que podes trazer para ti um conforto durante o ano, pois a Comunidade/Família Noibe participas de vários gigs(eventos) durante o ano, entre eles, o FISL, Flisol, Latinoware.org, Campus Party Recife e também os gigs que tu podes sugerir, como BGS, X5MA, CCXP e afins.</p>

					<p>Se tu quiseres participar da nossa baia, tragas o teu espirito livre de seres tu, o tempo todo, (mas não tragas caixas de som, pois a CPBR NÃO permites isto).</p>

					<p>E sejas bem vindo para a <b>NOSSA COMUNIDADE FAMILIA NOIBE!</b></p>
				</section>

				<section class="img">
					<img src="<?php echo get_template_directory_uri(); ?>/img/join.jpg" alt="Junte-se a nós!"/>
				</section>

			</div>
		</div>

		<div class="wow">
			<div class="wow-container left">

				<section class="text">
					<h1>Contato</h1>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam enim exercitationem modi
						pariatur quaerat rerum similique tempora. Adipisci aliquam culpa facilis, fugit laborum, minus
						molestias neque quidem repellendus, sed sequi?</p>
				</section>

				<section class="img">
					<img src="<?php echo get_template_directory_uri(); ?>/img/contact.jpg" alt="Fale Conosco"/>
				</section>

			</div>
		</div>

	</div>

</div>
<?php get_footer( 'home' ); ?>