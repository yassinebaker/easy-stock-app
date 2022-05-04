<style>
    <?php include '../../public/css/bootstrap.min.css';
    include '../../public/css/main.css';
    require '../inc/header.php';
    ?>
</style>

<section class="h-100">
	<div class="container h-100">
		<div class="row justify-content-sm-center h-10">
			<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9  w-100">
				<div class="text-center my-5">
                    <h1>Nouvelle Commande </h1>
				</div>

        <div class='bg-purple d-flex'>
                <form method="POST" class="col-6" novalidate="" autocomplete="off" class='col-6'>
                    <div class="mb-3">
                        <label class="mb-2 text-muted" for="name">Nom</label>
                        <input id="name" type="text" class="form-control" name="name" value="" required autofocus>
                        <div class="invalid-feedback">
                            Veuillez entrer le Nom	
                        </div>
                    </div>
                    <div class="align-items-center d-flex">
                        <button type="submit" class="btn btn-primary ms-auto">
                            S'inscrire	
                        </button>
                    </div>
                </form>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        </tr>
                    </tbody>
                    </table>
        </div>
    </div>
</section>  