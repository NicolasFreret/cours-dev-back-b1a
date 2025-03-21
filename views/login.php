<?php
 require 'header.php';
?> 
<section id="hero" class="home">
		<img src="assets/img/ressoursee-spiruline-2-1920x800.jpeg" alt="">
		<div class="container">
			<h1 class="h1">Se connecter</h1>
			<div class="ariane">
				<p><a href="index.html">Accueil</a> | Login</p>
			</div>
		</div>
	</section>

	<section id="form">
		<div class="container">
			<div class="form">
				<form action="<?php echo config()->home_url ?>/login/post/" method="POST">
					<div class="grid col-2 md-col-1">
						<div class="col">
							<input type="email" placeholder="Email*" name="email">
						</div>
						<div class="col">
							<input type="password" placeholder="mot de passe*" name="password">
						</div>
						<input type="hidden" value="<?php echo $redirect ?>" name="redirect">
					</div>

					<button class="btn">Se connecter</button>
				</form>
			</div>
		</div>
	</section>

<?php
 require 'footer.php';
