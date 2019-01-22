<!DOCTYPE html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>STRIVE, Sin Rollos</title>

		<!-- CSS -->
		<link rel="stylesheet" href="./styles/semantic.css">
		<link rel="stylesheet" href="./styles/custom.css">

</head>
<body>

	<!-- NAV -->
	<nav class="ui massive fixed borderless menu mobile hidden">
		<div class="ui container">
			<div class="header item">STRIVE</div>
			<a class="item" href="#">Inicio</a>
			<a class="item" href="#contacto">Contactanos</a>
			<a class="item" href="guia.html">Guia 2019</a>
			<a class="item" href="faq.html">FAQ</a>
			<a class="item" href="protips.html">PRO Tips</a>
		</div>
	</nav>
	<!-- END NAV -->

	<!-- MESSAGE -->
	<div class="ui container info message computer only">
		<div class="header">
			El inicio del servicio social esta proximo
		</div>
		<ul class="list">
			<li>Los tramites empiezan el 21 de Enero</li>
			<li>Si necesitas ayuda, checa nuestra guia o contactanos</li>
		</ul>
	</div>
	<!-- END MESSAGE -->

	<!-- ABOVE THE FOLD -->
	<section class="ui grid full-height negative-top-margin">
		<div class="four wide computer or tablet only column">
			<svg width="100%" height="100%" viewBox="0 0 100 100" 
			preserveAspectRatio="xMidYMax slice">
				<polygon points="0,0 50,50 0,100" 
				style="fill:#00304b">
			</svg>
		</div> 
		
		<div class="sixteen wide mobile eight wide tablet eight wide computer column">
			<div class="ui three column full-height grid">
				<div class="middle aligned ten wide centered column">
	
					<h1 class="ui header">TU SERVICIO SOCIAL <span class="highlight striked">SIN ROLLOS</span>
					<p class="sub header">Si te late la idea y eres cool, danos un like.<p/></h1>

						<?php if(isset($_COOKIE["voto"])): ?>

						<div class="ui labeled button">
							<div class="ui medium red button">
								<i class="heart icon"></i> Eres cool!
							</div>
							<a class="ui basic left pointing red label">

							<?php 
							include './scripts/getLikes.php';
							echo getLikeCount();
							?>

							</a>
						</div>

						<?php else: ?>

						<div id="like-container" class="ui labeled button" onclick="incrementLikeCount()">
							<div id="like" class="ui medium button">
								<i class="heart icon"></i> Like
							</div>
							<a id="count" class="ui basic left pointing label">
							
							<?php 
							include './scripts/getLikes.php';
							echo getLikeCount();
							?>

							</a>
						</div>

						<?php endif; ?>
						
						<a class="ui primary button top-margin-1" href="guia.html">Checa la guia</a>
				</div>
			</div>
		</div> 

		<div class="four wide computer or tablet only column">
			<svg width="100%" height="100%" viewBox="0 0 100 100" 
			preserveAspectRatio="xMidYMax slice">
				<polygon points="100,0 50,50 100,100" 
				style="fill:#00304b">
			</svg>
		</div>

		<div class="scroll-down-indicator mobile hidden">
			<p>CONOCE MAS</p>
			<img src="./down-arrow.svg" width="20" alt="">
		</div>
		
	</section>
	<!-- END ABOVE THE FOLD-->

	<!-- DESCRIPTION -->
	<section class="ui grid contrast-background">
		<div class="middle aligned column">
			<h1 class="ui centered header bottom-margin-1">ENFOCADO A TODOS</h1>

			<div class="ui centered cards">

				<div class="card">
					<div class="content height-padding-2">
						<div class="center aligned header">Estudiantes</div>
						<div class="description">
							Realiza los tramites del servicio social en linea y 
							llena los formatos sin tanto rollo.
						</div>
					</div>
					<a href="#estudiantes" class="ui bottom attached primary button">Saber mas</a>
				</div>

				<div class="card">
					<div class="content height-padding-2">
						<div class="center aligned header">Administrativo</div>
						<div class="description">
							Revisa, consulta y asesora alumnos de una manera mas rapida y organizada; evita el estres.
						</div>
					</div>
					<a href="#administrativo" class="ui bottom attached primary button">Saber mas</a>
				</div>

			</div>

		</div>
	</section>
	<!-- END DESCRIPTION -->

	<!-- ESTUDIANTES -->
	<section id="estudiantes" class="ui stackable grid">
		<div class="middle aligned column">
			<h1 class="ui centered header height-margin-1">
				ESTUDIANTES
			</h1>
			<div class="ui stackable three column grid container">

				<div class="center aligned column">
					<i class="massive icon mouse pointer"></i>
					<h2>1. LLENA EN LINEA</h2>
					<p>Preocupate por solo los datos que necesitas proporcionar. </p>
				</div>

				<div class="center aligned column">
					<i class="massive icon envelope"></i>
					<h2>2. ENVIA PARA REVISION</h2>
					<p>Espera y enterate cuando revisen tu formato; Realiza las correciones necesarias.</p>
				</div>

				<div class="center aligned column">
					<i class="massive icon file word"></i>
					<h2>3. IMPRIME Y SELLA</h2>
					<p>Una vez aprovado, imprime y pasa a que solo te sellen tu documento.</p>
				</div>

			</div>
		</div>
	</section>
	<!-- END ESTUDIANTES -->

	<!-- ADMINISTRATIVO -->
	<section id="administrativo" class="ui grid contrast-background">
		<div class="middle aligned column">
			<h1 class="ui centered header height-margin-1">
				ADMINISTRATIVO
			</h1>
			<div class="ui stackable three column grid container">

				<div class="center aligned column">
					<i class="massive icon tasks"></i>
					<h2>REVISA Y ASESORA</h2>
					<p>Recibe los documentos y anota correcciones en linea de manera rapida</p>
				</div>

				<div class="center aligned column">
					<i class="massive icon folder open"></i>
					<h2>ORGANIZA</h2>
					<p>Organiza y busca folios de la manera que quieras</p>
				</div>

				<div class="center aligned column">	
					<i class="massive icon check"></i>
					<h2>SELLA Y LIBERA</h2>
					<p>Recibe en ventanilla unicamente documentos listos para sellar</p>
				</div>

			</div>
		</div>
	</section>
	<!-- END ADMINISTRATIVO -->

	<!-- COLABORADORES / CONTACTO -->
	<section id="contacto" class="ui grid">
		<div class="middle aligned column">
			<h1 class="ui centered header height-margin-1">COLABORADORES</h1>
			<div class="ui stackable four column grid container">

				<div class="column">
					<div class="ui centered card">
						<div class="image">
						<img src="./images/avatar-hector-montero.jpg">
						</div>
						<div class="content">
						<a href="https://www.facebook.com/carmain.estormbreaker" class="header">Hector Montero</a>
						</div>
					</div>
				</div>

				<div class="column">
					<div class="ui centered card">
						<div class="image">
						<img src="./images/avatar-kevin-dominguez.png">
						</div>
						<div class="content">
						<a href="https://www.facebook.com/kevin.dominguezjimenez.3" class="header">Kevin Dominguez</a>
						</div>
					</div>
				</div>

				<div class="column">
					<div class="ui centered card">
						<div class="image">
						<img src="./images/avatar-ariagna-salazar.jpg">
						</div>
						<div class="content">
						<a href="https://www.facebook.com/AriiBanSal" class="header">Ariagna Salazar</a>
						</div>
					</div>
				</div>

				<div class="column">
					<div class="ui centered card">
						<div class="image">
						<img src="./images/avatar-omar-pantoja.jpg">
						</div>
						<div class="content">
						<a class="header">Omar Pantoja</a>
						</div>
					</div>
				</div>

			</div>

			<div class="ui grid container">
				<form id="message-form" class="ui form column" action="index.php#contacto" method="POST">
					<div class="field">
						<label>Tu nombre: </label>
						<input type="text" name="user-name" placeholder="Escribe tu nombre" required>
					</div>
					<div class="field">
						<label>Tu correo electronico: </label>
						<input type="email" name="email" placeholder="Escribe tu correo electronico" required>
					</div>
					<div class="field">
						<label>Escribenos tus comentarios</label>
						<textarea name="message" rows="3" required></textarea>
					</div>
					<div class="ui success message">
						<div class="header">Gracias por escribirnos!</div>
						<p>Si te late la idea compartela con tus amigos.</p>
					</div>
					<button class="ui primary button" type="submit">Enviar</button>
				</form>
			</div>
		</div>
	</section>
	<!-- END COLABORADORES / CONTACTO -->

	<section class="ui grid full-height contrast-background">
		<div class="middle aligned column">
				<h1 class="ui centered header">STRIVE</h1>
				<h2 class="ui centered header">Por una mejor experiencia.</h2>
			</div>
	</section>

	<!-- JavaScript -->
	<script src="./dependencies/jquery-3.3.1.min.js"></script>
	<script src="./styles/semantic.min.js"></script>

	<script>
		const incrementLikeCount = function(){
			const container = document.getElementById('like-container');
			const button = document.getElementById('like');
			const label  = document.getElementById('count');

			container.classList.add('animated')
			button.classList.add('red',);
			label.classList.add('red');
	
			button.innerText = 'Gracias!';
			label.innerText = parseInt(label.innerText)+1;
			container.removeAttribute('onclick');

			$.ajax({
				type: "POST",
				url: 'http://localhost:8080/scripts/cookies.php',
				data: ({
					voto: "voted"
				}),
				dataType: "text",
				success: function(result){
					console.log(result)
				}
			});
		}

		$('#message-form').form({
			fields: {
				email: {
					identifier : 'email',
					rules: [{
						type   : 'email',
						prompt : 'Por favor introduce un e-mail valido'
					}]
				}
			}
		});


		$('#message-form').submit(function(e) {
			e.preventDefault();
			const form = document.getElementById('message-form');
			console.log("submitting");
			
			$.ajax({
			type: "POST",
			url: 'http://localhost:8080/scripts/message.php',
			data: $(this).serialize(),
			success: function(result) {
					console.log("submitted");
					console.log(result);
					form.classList.add('success');
				},
			});
		});

	</script>

</body>
</html>