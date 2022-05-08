<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
					<!--	<img src="" alt="logo" width="100">-->
          <h1>Easy Stock </h1>
					</div>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Connexion</h1>
							<form method="POST" class="needs-validation" novalidate="" autocomplete="off">
								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">Addresse Mail</label>
									<input id="email" type="email" class="form-control mb-3" name="email" value="" required autofocus>
									<small class="text-danger">
										<?php echo $data['erreurMail']?>
									</small>
								</div>

								<div class="mb-3">
									<div class="mb-2 w-100">
										<label class="text-muted" for="password">Mot de Passe</label>
									</div>
									<input id="password" type="password" class="form-control mb-3" name="mot_de_passe" required>
								    <small class="text-danger">
										<?php echo $data['erreurMot_de_passe']?>
								    	
							    	</small>
								</div>

								<div class="d-flex align-items-center">
									<div class="form-check">
										<input type="checkbox" name="remember" id="remember" class="form-check-input">
										<label for="remember" class="form-check-label">Se souvenir de moi </label>
									</div>
									<button type="submit" class="btn rounded-btn bg-purple  ms-auto">
										Se connecter
									</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Pas encore de compte? <a href="/easy-stock-app/inscription" class="text-dark">S'inscrire</a>
							</div>
						</div>
					</div>
					<div class="text-center mt-5 text-muted">
						Copyright &copy; 2022 &mdash; 
					</div>
				</div>
			</div>
		</div>
	</section>
