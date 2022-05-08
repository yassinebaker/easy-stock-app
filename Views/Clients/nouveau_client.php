<style>
    <?php include '../../public/css/bootstrap.min.css'; ?>
</style>
<!-- <?php 
	
?> -->
<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="card shadow-lg mt-4 ">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Ajout client</h1>
							<form method="POST" class="needs-validation" novalidate="" autocomplete="off">
								<div class="mb-3">
									<label class="mb-2 text-muted" for="name">Nom</label>
									<input id="name" type="text" class="form-control mb-2" name="nom" value="<?php $data['nom']?>" required autofocus>
									<small class='text-danger'>
										<?php echo $data['erreurNom']; ?>
									</small>
								</div>
								
								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">Email</label>
									<input id="email" type="email" class="form-control mb-2" name="email" value="<?php $data['email']?>" required>
									<small class='text-danger'>
									<?php echo $data['erreurMail']; ?>
									</small>
								</div>
								
								<div class="d-flex gap-3">
									<div class="mb-3">
										<label class="mb-2 text-muted" for="name">Adresse</label>
										<input id="name" type="text" class="form-control mb-2" name="adresse" value="<?php $data['adresse']?>" required autofocus>
										<small class='text-danger'>
										<?php echo $data['erreurAdresse']; ?>
										</small>
									</div>
									<div class="mb-3">
										<label class="mb-2 text-muted" for="name">Numéro Téléphone</label>
										<input id="name" type="text" class="form-control mb-2" name="telephone" value="<?php $data['telephone']?>" required autofocus>
										<small class='text-danger'>
										<?php echo $data['erreurtelephone']; ?>
										</small>
									</div>
								</div>
								<div class="mb-3">
									<label class="mb-2 text-muted" for="password">Mot de Passe</label>
									<input id="password" type="password" class="form-control mb-2" name="mot_de_passe" value="<?php $data['mot_de_passe']?>" required>
								    <small class='text-danger'>
										<?php echo $data['erreurMot_de_passe']; ?>
							    	</small>
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