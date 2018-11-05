<?php
	include "./include/head.html";
?>
		<script>
			gtag('config', 'UA-126426371-2', {
				'page_title' : 'contactpage',
				'page_path': '/con'
			});
		</script>
		<header id="gtco-header" class="gtco-cover gtco-header-contact" role="banner">
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
										<h1>Possui interesse ou dúvidas?</h1>
										<p>Entre em contato por telefone, email ou chat.</p>
										<!--p><a href="#" class="btn btn-white">Entre em contato</a></p-->
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
					<div class="col-md-8 col-md-offset-2 gtco-heading text-center">
						<h2>Contato</h2>
						<p>Ligue para (51) 3328-0083, envie uma mensagem ou fale conosco pelo chat.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<form id="contactForm" action="#" method="post">
							<div class="form-group">
								<label for="name">Nome</label>
								<input type="text" class="form-control" id="name" name="name" required>
							</div>

							<div class="form-group">
								<label for="phone">Telefone</label>
								<input type="text" class="form-control" id="phone" name="phone">
							</div>
							
							<div class="form-group">
								<label for="email">Email</label>
								<input type="mail" class="form-control" id="email" name="email" required>
							</div>
							
							<div class="form-group">
								<label for="message">Mensagem</label>
								<textarea cols="30" rows="10" class="form-control" id="message" name="message" required></textarea>
							</div>
							
							<div class="form-group">
								<input type="submit" class="btn btn btn-special" name="submit" value="Enviar Mensagem">
							</div>
						</form>
					</div>

					<div class="col-md-5 col-md-push-1">
						<div class="gtco-contact-info">
							<ul>
								<li class="address"><a id="mapsLink" href="https://www.google.com/maps/dir//Av.+Carlos+Gomes,+700+-+511+-+Auxiliadora,+Porto+Alegre+-+RS,+90480-001/" target="_blank">Av. Carlos Gomes 700 sala 511</a></li>
								<li class="phone"><a id="foneLink" href="tel://555133280083">(51) 3328-0083</a></li>
								<li class="email"><a id="mailLink" href="mailto://contato@commandinvest.com">contato@commandinvest.com</a></li>
							</ul>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3454.319540422932!2d-51.18334138487249!3d-30.02768928188844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9519778856d305ed%3A0xb486721e38918c41!2sCommandInvest!5e0!3m2!1spt-BR!2sbr!4v1521554735284" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script>
			var form = document.getElementById('contactForm');

			form.addEventListener('submit', function(event) {
				event.preventDefault();

				setTimeout(submitForm, 1000);

				var formSubmitted = false;

				function submitForm() {
					if (!formSubmitted) {
						formSubmitted = true;
						form.submit();
					}
				}

				gtag('event', 'contact', {
					'event_category' : 'message',
					'event_label': 'send',
					'event_callback': () => submitForm()
				});
			});
			document.getElementById('foneLink').addEventListener('click', event => 
				gtag('event', 'contact', {
					'event_category' : 'call',
					'event_label': '(51) 3328-0083'
				})
			);
			document.getElementById('mailLink').addEventListener('click', event => 
				gtag('event', 'contact', {
					'event_category' : 'mail',
					'event_label': 'contato@commandinvest.com'
				})
			);
			document.getElementById('mapsLink').addEventListener('click', event => 
				gtag('event', 'redirect', {
					'event_category' : 'external',
					'event_label': 'Maps'
				})
			);
		</script>

		<?php
			include "./include/foot.html";
			
			use PHPMailer\PHPMailer\PHPMailer;
			use PHPMailer\PHPMailer\Exception;

			require 'PHPMailer/src/Exception.php';
			require 'PHPMailer/src/PHPMailer.php';
			require 'PHPMailer/src/SMTP.php';

			if(isset($_POST["submit"]) && $_POST["submit"] == "Enviar Mensagem")
				if(isset($_POST["name"]) && $_POST["name"] != "" &&
					isset($_POST["email"]) && $_POST["email"] != "" &&
					isset($_POST["message"]) && $_POST["message"] != "") {

					$mail = new PHPMailer;
	     
		    		$mail->isSMTP();
		    		$mail->Host = 'example.com';
					$mail->SMTPDebug = false;
		    		$mail->SMTPAuth = true;
		    		$mail->SMTPSecure = 'ssl';
		    		$mail->Username = 'mail@example.com';
		    		$mail->Password = '***';
                    $mail->Port = 465;
		     
		    		$mail->setFrom('contato@commandinvest.com', 'Contato commandinvest.com');
		    		$mail->addAddress('contato@commandinvest.com');
		     
                    $mail->CharSet = 'UTF-8';
		    		$mail->isHTML(true);

					$phone = "Não informado.";

					if(isset($_POST["phone"]) && $_POST["phone"] != "")
						$phone = $_POST["phone"];

					$mensagem = "
						<strong>Nome</strong>: " . $_POST["name"] . "\n
					 	<strong>Email</strong>: " . $_POST["email"] . "\n
					 	<strong>Telefone</strong>: $phone \n
					 	<strong>Mensagem</strong>:\n" . $_POST["message"] . "\n
                    ";

		    		$mail->Subject = "Contato commandinvest.com";
		    		$mail->Body    = nl2br($mensagem);
		    		$mail->AltBody = nl2br(strip_tags($mensagem));

		    		if(!$mail->send()) {
	         			echo "
	         				<script>
	         					alert('Algum erro ocorreu. Sua mensagem não foi enviada!');
							</script>
						";
		    		} else {
                        echo "
                            <script> 
                                alert('Sua mensagem foi enviada entraremos em contato em breve!');
                            </script>
                        ";
					}
				} else {
                    echo "
                        <script> 
                            alert('Preencha os campos nome, email e mensagem!');
                        </script>
                    ";
				}
			?>
