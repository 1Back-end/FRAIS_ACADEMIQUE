
<link rel="shortcut icon" href="vendors/images/Logo 3.svg">
	<title>
	Se Connecter
	</title>


	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link rel="stylesheet" type="text/css" href="../vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="../vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="../vendors/styles/style.css">
	<link rel="stylesheet" type="text/css" href="../vendors/styles/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">


</head>
<body>

<div class="container mt-5 pb-5">
    <div class="login-box card-box border-radius-10">
        <div class="login-title text-center mb-4">
            <h2 class="text-capitalize big_tilte">Se connecter</h2>
        </div>

        <form method="POST">
            <!-- Email Input -->
            <div class="mb-3">
                <label for="username" class="form-label">Adresse mail</label>
                <input type="email" id="username" name="username"  class="form-control form-control-lg shadow-none" placeholder="Adresse mail">
            </div>

            <!-- Password Input with Toggle Visibility -->
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" name="password" id="password" class="shadow-none form-control form-control-lg" placeholder="***************">
            </div>

            <!-- Forgot Password Link -->
            <div class="d-flex justify-content-between mb-4">
                <div></div>
                <div>
                    <a href="forgot_password.php" class="btn-link text-decoration-none">Mot de passe oublié</a>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="mb-2">
                <!-- <button name="submit" type="submit" class="btn btn-customize btn_submit btn-block text-white">
                    Se Connecter 
                    
                </button> -->
                <a href="../include/include.php" class="btn btn-customize btn_submit btn-block text-white">Se Connecter 
                </a>
            </div>
        </form>
    </div>
</div>


    <script>
        document.getElementById('toggle-password').addEventListener('click', function() {
    const passwordField = document.getElementById('password');
    const toggleIcon = document.getElementById('toggle-password');

    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        toggleIcon.classList.remove('fa-eye-slash');
        toggleIcon.classList.add('fa-eye');
    } else {
        passwordField.type = 'password';
        toggleIcon.classList.remove('fa-eye');
        toggleIcon.classList.add('fa-eye-slash');
    }
});
 </script>


<script>
    $('form').submit(function(){
    $('input[type=submit]', this).attr('disabled', 'disabled');
});
</script>

</body>
</html>
