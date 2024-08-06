<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../vendors/images/Logo 3.svg">
	<title>
     Reset Password
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

        <div class="align-items-center">
            <div class="login-box bg-white box-shadow border-radius-10">
                <div class="login-title text-center mb-2">
                    <h4 class="big_tilte text-center">Nouveau mot de passe</h4>
                    <small>
                       Créer un mot de passe pour votre compte,essayer de ne pas le perdre cette fois ! 😊
                    </small>
                </div>
                
                <form action="" method="POST">
				<div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                        <input type="password" name="password"  id="password" class="form-control shadow-none form-control input-form" placeholder="**********">
                    </div>

                    <div class="mb-3">
                    <label for="password" class="form-label">Confirmer mot de passe</label>
                        <input type="password"  name="confirm_password" id="confirm_password" class="form-control shadow-none form-control input-form" placeholder="**********">
                        
                    </div>

                    <div class="row align-items-center mb-2">
                        <div class="col-md-12 col-sm-12">
                            <div class="input-group mb-0">
								<!-- <button name="submit" class="btn btn-customize text-white shadow-none btn-block btn-form" type="submit">Valider</button> -->
                               <a href="login.php"  class="btn btn-customize text-white shadow-none btn-block btn-form">Valider</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</body>
</html>