<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../vendors/images/Logo 3.svg">
	<title>
	Mot de passe oublié
	</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="../vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="../vendors/styles/style.css">
	<link rel="stylesheet" type="text/css" href="../vendors/styles/main.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container mt-5">
    <div class="col-md-6 col-sm-12 mx-auto p-2">
        <div class="card-box p-3">
    
           <div class="mb-2 text-center">
           <h5 class="text-center big_tilte">Réinitialiser mon mot de passe</h5>
           <small>Veuillez entrer votre l'adresse mail liée à votre compte</small>
           </div>

           <form action="">
            <div class="mb-3">
                <label for="email" class="form-label">Adresse mail</label>
                <input type="email" class="shadow-none form-control" id="email">
            </div>

            <div class="mb-3">
                <a href="code_validation.php" class="btn btn-customize btn_submit text-white btn-block">Réinitialiser</a>
                <!-- <button type="submit" class="btn btn-customize btn_submit text-white btn-block">Réinitialiser</button> -->
            </div>

            <div class="mb-2 text-center">
                <small>Je me souviens de mon mot de passe ?</small>
                <a href="login.php" class="text-center btn btn-link text-decoration-none">Me connecter</a>
            </div>
           </form>
        </div>
    </div>
</div>

</body>

</html><!-- js -->
	