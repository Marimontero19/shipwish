		<!-- START site-footer -->
		<footer id="site-footer">

			<!-- START footer-content -->
			<div id="footer-content" class="row">
				<div class="medium-4 columns">
					<div class="footer-logo">
						<img src="img/logo-tizo-blanco.svg" alt="Tizo" />
					</div>
				</div>

				<div class="medium-4 columns">
					<nav class="footer-social-menu">
						<ul>
							<li><a href="" class="icon"><?php include('icons/icon-fb.svg'); ?></a></li>
							<li><a href="" class="icon"><?php include('icons/icon-twitter.svg'); ?></a></li>
							<li><a href="" class="icon"><?php include('icons/icon-linkedin.svg'); ?></a></li>
							<li><a href="" class="icon"><?php include('icons/icon-googleplus.svg'); ?></a></li>
						</ul>
					</nav>
					<div class="footer-newsletter row collapse">
						<h5>Suscríbete al newsletter</h5>
						<form class="signup-newsletter">


							<div class="row collapse">
					            <div class="small-8 medium-6 columns">
					              <input type="text" placeholder="tucorreo@correo.com">
					            </div>
					            <div class="small-4 columns end">
					              <a href="#" class="button expand postfix purple">¡Suscríbete!</a>
					            </div>
					        </div>



						</form>

					</div>
				</div>

				<?php if (isset($_SESSION['username'])) { ?>

				<div class="medium-4 columns">
					<ul class="footer-menu">
						<li><a href="index.php">Home</a></li>
						<li><a href="cpanel.php">Mi cuenta</a></li>
						<li><a href="create.php">Crear proyecto</a></li>
						<li><a href="profile.php">Perfil público</a></li>
						<li><a href="logout.php">Salir</a></li>
					</ul>
				</div>

				<?php } else { ?>

				<div class="medium-4 columns">
					<ul class="footer-menu">
						<li><a href="index.php">Home</a></li>
						<li><a href="login.php">Ingresa</a></li>
						<li><a href="register.php">Regístrate</a></li>
					</ul>
				</div>

				<?php }?>



			</div>
			<!-- END footer-content -->

			<!-- START footer-copyright -->
			<!--
<div class="row">
				<div class="medium-4 columns medium-offset-8">
					<p id="footer-copyright">&copy; 2014 Tizo Equipo de Educación.
Todos los derechos reservados.</p>
				</div>
			</div>
-->
			<!-- END footer-copyright -->

			<!-- START site-footer-closinglinks -->
			<div id="site-footer-closinglinks">
				<div class="row">
					<div class="small-12 columns">
						<span id="footer-copyright">&copy; 2014 Tizo Equipo de Educación.
Todos los derechos reservados.</span>
						<nav class="bottom-menu">
							<ul>
								<li><a href="">Ayuda y soporte</a></li>
								<li><a href="">Reporta un problema</a></li>
								<li><a href="">Políticas y condiciones</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<!-- END site-footer-closinglinks -->

		</footer>
		<!-- END site-footer -->


		<?php include('includes/collaborate-form.php'); ?>
		<?php include('includes/follow-project.php'); ?>
		<?php include('includes/login-to-use.php'); ?>



		<script src="js/vendor/jquery.js"></script>
		<script src="js/foundation.min.js"></script>
		<script src="js/foundation/foundation.equalizer.js"></script>
		<script src="js/foundation/foundation.joyride.js"></script>
		<script src="js/vendor/jquery.cookie.js"></script>
		<script>
			$(document).foundation({
				equalizer : {
					// Specify if Equalizer should make elements equal height once they become stacked.
				    equalize_on_stack: false
				}
			});
		</script>


		<script src="js/tizo.js"></script>

		<!-- Carousel -->
		<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="js/slick/slick.min.js"></script>
		<script src="js/slick-settings.js"></script>

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-59417918-1', 'auto');
		  ga('send', 'pageview');

		</script>

	</body>
</html>