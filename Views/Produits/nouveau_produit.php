<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="card shadow-lg mt-4 ">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Ajout Produit</h1>
							<form method="POST" class="needs-validation" novalidate="" autocomplete="off">
								<div class="mb-3">
									<label class="mb-2 text-muted" for="name">Désignation</label>
									<input id="name" type="text" class="form-control mb-2" name="designation" value="<?php $data['designation']?>" required autofocus>
									<small class='text-danger'>
										<?php echo $data['erreurDesignation']; ?>
									</small>
								</div>
								
								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">Prix Unitaire</label>
									<input id="email" type="number" class="form-control mb-2" name="prix" value="<?php $data['prix']?>" required>
									<small class='text-danger'>
									<?php echo $data['erreurPrix']; ?>
									</small>
								</div>
								
								<div class="d-flex gap-3">
									<div class="mb-3">
										<label class="mb-2 text-muted" for="name">Quantité</label>
										<input id="name" type="number" class="form-control mb-2" name="quantite" value="<?php $data['quantite']?>" required autofocus>
										<small class='text-danger'>
										<?php echo $data['erreurQuantite']; ?>
										</small>
									</div>
									<div class="mb-3">
										<label class="mb-2 text-muted" for="name">Catégorie</label>
										<input id="name" type="text" class="form-control mb-2" name="categorie" value="Aucun" required autofocus>
									</div>
								</div>
								<div class="align-items-center d-flex">
									<button type="submit" class="btn rounded-btn bg-purple ms-auto">
										Ajouter 	
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>