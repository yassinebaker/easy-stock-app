<section class="h-100">
	<div class="container h-100">
		<div class="row justify-content-sm-center h-10">
			<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9  w-100">
				<div class="text-center my-5">
                    <h1>Liste Clients</h1>
				</div>
               

                <form method="POST" class="needs-validation d-flex align-items-center gap-4" novalidate="" autocomplete="off">
								<div class="mb-3 w-25">
									<label class="mb-2 text-muted" for="email">Nom Client</label>
									<input id="email" type="text" placeholder='Ousmane Sonko' class="form-control" name="nom" value="" required autofocus>	
								</div>

								<div class="mb-3 w-25">
									<div class="mb-2 w-100">
										<label class="text-muted" for="password">Code Client</label>
									</div>
									<input id="password" type="text" placeholder="001124"class="form-control" name="id" required>
								</div>

                                <button type="submit" class="btn rounded-btn bg-purple text-white  ms-auto">
                                    Rechercher
                                </button>
							</form>
        <div class='shadow-lg'>    
            <table class="table table-bordeless" >
                        <thead class="bg-purple text-white">
                            <tr>
                            <th scope="col" class="text-center">ID</th>
                            <th scope="col" class="text-center">Nom Complet</th>
                            <th scope="col" class="text-center">Email</th>
                            <th scope="col" class="text-center">Téléphone</th>
                            <th scope="col" class="text-center">Adresse</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($data as $value): ?>
                            <tr>
                                <td class="text-center"><?php echo $value['id'] ?></td>
                                <td class='text-center'><?php echo $value['nom'] ?></td>
                                <td class="text-center"><?php echo $value['email'] ?></td>
                                <td class="text-center">+221 <?php echo $value['telephone'] ?></td>
                                <td class="text-center"><?php echo $value['adresse'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                        <?php if(count($data)<1)
                            echo "<p>Aucun Resultat<p/>";
                        ?>
                    </tbody>
            </table>
        </div>
    </div>
</section>  