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
        <div class="col-md-6 mx-auto text-center col-sm-12">
            <form class="card-box p-4" action="" method="POST">
                <h5 class="big_tilte text-center">Tapez votre code</h5>
                <div class="mb-2">
                    <small>
                    Vous avez reçu un code par e-mail. Veuillez le saisir dans ces champs.
                    </small>
                </div>
                <div class="otp_input text-start mb-3">
                    <div class="d-flex align-items-center justify-content-between mt-2">
                        <input type="text" maxlength="1" onkeypress="return isNumberKey(event)" name="code1" class="w-10 shadow-none mx-2 text-center form-control font-14" placeholder="">
                        <input type="text" maxlength="1" onkeypress="return isNumberKey(event)" name="code2" class="w-10 shadow-none mx-2 text-center form-control font-14" placeholder="">
                        <input type="text" maxlength="1" onkeypress="return isNumberKey(event)" name="code3" class="w-10 shadow-none mx-2 text-center form-control font-14" placeholder="">
                        <input type="text" maxlength="1" onkeypress="return isNumberKey(event)" name="code4" class="w-10 shadow-none mx-2 text-center form-control font-14" placeholder="">
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                <a href="" class="btn-link">Renvoyer le code ?</a>
                </div>
               <div class="col-md-12 mb-3">
               <input type="hidden">
                <!-- <button type="submit" name="submit" class="btn btn-customize text-white btn-block">Valider</button> -->
                <a href="reset_password.php" class="btn btn-customize text-white btn-block">Valider</a>
               </div>
                
            </form>
            
        </div>
        
    </div>

    <script src="script.js"></script>

</body>
</html>

