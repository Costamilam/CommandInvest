<?php
	include "./include/head.html";
?>
		<script>
			gtag('config', 'UA-126426371-2', {
				'page_title' : 'jobpage',
				'page_path': '/job'
			});
		</script>
		<header id="gtco-header" class="gtco-cover gtco-header-job" role="banner">
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
										<h1 class="no-margin">Trabalhe Conosco</h1>
										<p>Faça parte do time CommandInvest.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="gtco-section">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-6 col-xs-12">
						<h2 class="text-center">Trabalhe Conosco</h2>
						<p>
				      	Nós da CommandInvest buscamos talentos que caminhem conosco com os mesmos objetivos: superar metas, vencer os desafios e aproveitar todas as oportunidades!
				     	</p>
						<p>
				      	Estamos em constante inovação e evolução para atender nossos clientes, sempre buscando uma solução de Investimentos de diversificação de renda em que o cliente esteja satisfeito.
				      </p>
						<p>
				      	Se o seu perfil é dinâmico e com foco em resultado venha fazer a diferença junto com a CommandInvest.
				      </p>
						<p>
				      	Envie um e-mail para: <a id="mailLink" href="mailto://curriculo@commandinvest.com"><em><strong>curriculo@commandinvest.com</strong></em></a>.
				      </p>
					</div>
					<div class="col-md-5 col-md-offset-1 col-xs-12 col-xs-offset-0">
    					<img width="100%" src="https://cdn.pixabay.com/photo/2018/02/20/10/28/business-3167295__340.jpg" alt="Trabalhe Conosco" title="Trabalhe Conosco">
					</div>
				</div>
			</div>
		</div>

		<script>
			document.getElementById('mailLink').addEventListener('click', event => 
				gtag('event', 'contact', {
					'event_category' : 'mail',
					'event_label': 'curriculo@commandinvest.com'
				})
			);
		</script>

		<?php
			include "./include/foot.html";
		?>