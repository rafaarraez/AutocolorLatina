<!DOCTYPE html>
<html lang="en">

<head>
	<title>Inicia sesión</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">
	<!--===============================================================================================-->
</head>
<?php require 'views/header.php'; ?>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
					<span class="login100-form-title p-b-26">
						Bienvenido area de adminitrador
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="usuario">
						<span class="focus-input100" data-placeholder="Usuario"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Contraseña"></span>
					</div>

					<?php if (!empty($errores)) : ?>
						<div class="error">
							<ul>
								<?php echo $errores; ?>
							</ul>
						</div>
					<?php endif; ?>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Inicia sesión
							</button>
						</div>
					</div>
				</form>

			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="login/js/main.js"></script>

</body>

</html>