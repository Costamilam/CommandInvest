<?php
	include "./include/head.html";
?>
		<script>
			gtag('config', 'UA-126426371-2', {
				'page_title' : 'homepage',
				'page_path': '/home'
			});
		</script>
		<header id="gtco-header" class="gtco-cover gtco-header-home" role="banner">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-12 col-md-offset-0 text-left">
						<div class="display-t">
							<div class="display-tc">
								<div class="row">
									<div class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-0 text-center header-img animate-box">
										<img src="images/cube.png" alt="Logo CommandInvest">
									</div>
									<div class="col-xs-12 col-md-6 copy animate-box">
										<h1>Especialistas em multiplicação de patrimônio.</h1>
										<p>Nós somos a melhor maneira de você garantir seu futuro.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div id="command" class="gtco-services gtco-section">
			<div class="gtco-container">
				<div class="row row-pb-sm">
					<div class="col-md-8 col-md-offset-2 gtco-heading text-justify">
						<h2 class="text-center">Invista seu patrimônio com especialistas</h2>
						<p>A CommandInvest é uma incorporadora e construtora especialista em projetos de diversificação de renda que ajuda você a escolher o melhor destino para seus investimentos.</p>
						<p>Neste momento, indicamos a locação remunerada como a melhor oportunidade de obter altos rendimentos com máxima segurança. Neste modelo você investe em marcas sólidas do ramo hoteleiro, recebendo destas administradoras dividendos proporcionais ao lucro dos empreendimentos, ou seja, você investe, e grandes empresas trabalham por você.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="gtco-client">
			<div class="gtco-container">
				<div class="row">
					<div class="col-xs-6 text-center">
						<a id="linkedinLink" target="_blank" href="https://linkedin.com/company/commandinvestoficial"><i class="ti-linkedin"></i><br>LinkedIn</a>
					</div>
					<div class="col-xs-6 text-center">
						<a id="skypeLink" target="_blank" href="https://join.skype.com/invite/IJoG0amfds68"><i class="ti-skype"></i><br>Skype</a>
					</div>
					<!--div class="col-xs-4 text-center">
						<a id="facebookLink" target="_blank" href="https://pt-br.facebook.com/commandinvest/"><i class="ti-facebook"></i><br>Facebook</a>
					</div-->
				</div>
			</div>
		</div>

		<div class="gtco-section gtco-products">
			<div class="gtco-container">
				<div class="row row-pb-sm">
					<div class="col-md-8 col-md-offset-2 gtco-heading text-justify">
						<h1 class="text-center" id="titulo">Lançamento Hotel Plaza Canela</h1>
						<h2 style="margin-bottom: 20px;" class="text-center">Segurança e rentabilidade</h2>
						<p>Design moderno, praça de entrada imponente e uma fachada que se destaca. Proporcionar tranquilidade e conforto para o dia a dia com infraestrutura completa. Espaços muito bem planejados, funcionais e confortáveis para viver, passear e desfrutar.</p>
					</div>
					<div class="col-md-12 text-center">
						<p id="plazaLink"><a href="http://hotelplazacanela.com" target="_blank" class="btn btn-special">Saiba mais sobre o investimento</a></p>
					</div>
				</div>
				
				<div class="row row-pb-md">
					<div class="col-md-6 col-sm-6">
						<a href="#" class="gtco-item two-row bg-img animate-box" style="background-image: url(images/plaza_canela_1.jpg)">
							<div class="overlay">
								<i class="ti-arrow-top-right"></i>
								<div class="copy">
									<h3>1° hotel da Rede Plaza na serra gaúcha</h3>
								</div>
							</div>
						</a>
						<a href="#" class="gtco-item two-row bg-img animate-box" style="background-image: url(images/plaza_canela_2.jpg)">
							<div class="overlay">
								<i class="ti-arrow-top-right"></i>
								<div class="copy">
									<h3>Melhor localização da turística do país</h3>
								</div>
							</div>
						</a>
					</div>
					
					<div class="col-md-6 col-sm-6">
						<a href="#" class="gtco-item two-row bg-img animate-box" style="background-image: url(images/plaza_canela_3.jpg)">
							<div class="overlay">
								<i class="ti-arrow-top-right"></i>
								<div class="copy">
									<h3>Invista no modelo de locação remunerada</h3>
								</div>
							</div>
						</a>
						<a href="#" class="gtco-item two-row bg-img animate-box" style="background-image: url(images/plaza_canela_4.jpg)">
							<div class="overlay">
								<i class="ti-arrow-top-right"></i>
								<div class="copy">
									<h3>O maior lançamento da serra gaúcha</h3>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>

		<script>
			document.getElementById('plazaLink').addEventListener('click', event => 
				gtag('event', 'redirect', {
					'event_category' : 'intern',
					'event_label': 'Plaza Canela'
				})
			);
			document.getElementById('linkedinLink').addEventListener('click', event => 
				gtag('event', 'redirect', {
					'event_category' : 'social_media',
					'event_label': 'LinkedIn'
				})
			);
			/*document.getElementById('facebookLink').addEventListener('click', event => 
				gtag('event', 'redirect', {
					'event_category' : 'social_media',
					'event_label': 'Facebook'
				})
			);*/
			document.getElementById('skypeLink').addEventListener('click', event => 
				gtag('event', 'redirect', {
					'event_category' : 'social_media',
					'event_label': 'Skype'
				})
			);
		</script>

		<?php
			include "./include/foot.html";
		?>
