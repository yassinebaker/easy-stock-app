<style>
    <?php include '../../public/css/bootstrap.min.css'; ?>
</style>
<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
					<!--	<img src="../../public/images/logo.jpeg" alt="logo" width="100">-->
                    <h1>Easy Stock </h1>
					</div>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Inscription</h1>
							<form method="POST" class="needs-validation" novalidate="" autocomplete="off">
								<div class="mb-3">
									<label class="mb-2 text-muted" for="name">Nom</label>
									<input id="name" type="text" class="form-control" name="name" value="" required autofocus>
									<div class="invalid-feedback">
										Veuillez entrer le Nom	
									</div>
								</div>
								
								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">Email</label>
									<input id="email" type="email" class="form-control" name="email" value="" required>
									<div class="invalid-feedback">
										L'addresse Mail est invalide!
									</div>
								</div>
								
								<div class="d-flex gap-3">
									<div class="mb-3">
										<label class="mb-2 text-muted" for="name">Adresse</label>
										<input id="name" type="text" class="form-control" name="name" value="" required autofocus>
										<div class="invalid-feedback">
											Veuillez entrer le Nom	
										</div>
									</div>
									<div class="mb-3">
										<label class="mb-2 text-muted" for="name">Numéro Téléphone</label>
										<input id="name" type="text" class="form-control" name="name" value="" required autofocus>
										<div class="invalid-feedback">
											Veuillez entrer le Nom	
										</div>
									</div>
								</div>
								<div class="mb-3">
									<label class="mb-2 text-muted" for="password">Mot de Passe</label>
									<input id="password" type="password" class="form-control" name="password" required>
								    <div class="invalid-feedback">
								    	Veuillez entrer le mot de Passe
							    	</div>
								</div>

							

								<div class="align-items-center d-flex">
									<button type="submit" class="btn rounded-btn bg-purple ms-auto">
										S'inscrire	
									</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-2 border-0">
							<div class="text-center">
								Vous avez déja un compte ? <a href="/easy-stock-app/login" class="text-dark"> Se connecter</a>
							</div>
						</div>
					</div>
					<div class="text-center mt-5 text-muted">
						Copyright &copy; 2023 &mdash; 
					</div>
				</div>
			</div>
		</div>
</section>