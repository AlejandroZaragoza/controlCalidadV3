<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="css/mdb.min.css">
	<link rel="stylesheet" type="text/css" href="css/login/login.css">
	<!-- Font Awesome -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
	<title></title>
</head>
<body>
	<div class="container-fluid" id="mainContainer">
		<video autoplay muted loop id="bgVideo" src="video/steelVideo1.mp4">
		</video>
		<div class="row h-100">
			<div class="col-7" id="colMask"></div>
			<div class="col" id="colFormulario">
				<div class="espaciador"></div>
				<div class="form-container">
					<form action="/login" method="post" enctype="multipart/form-data">
                        @csrf
						<img src="img/logo.png" id="logoPNG">
						<h1 id="loginTittle">LOGIN</h1>
						<!-- Email input -->
						<div class="form-outline mb-4">
							<input type="email" id="formLogin1" class="form-control" name='email'/>
							<label class="form-label" for="formLogin1">Email</label>
						</div>

						<!-- Password input -->
						<div class="form-outline mb-4">
							<input type="password" id="formLogin2" class="form-control" name='password'/>
							<label class="form-label" for="formLogin2">Contraseña</label>
						</div>

						<!-- 2 column grid layout for inline styling -->
						<div class="row mb-4">
							<div class="col d-flex justify-content-center">
								<!-- Checkbox -->
								<div class="form-check">
									<input class="form-check-input" type="checkbox" id="formLogin3" checked />
									<label class="form-check-label" for="formLogin3"> Recordarme </label>
								</div>
							</div>

							<div class="col">
								<!-- Simple link -->
								<a href="#!">¿Olvidó su contraseña?</a>
							</div>
						</div>

						<!-- Submit button -->
						<button type="submit" class="btn btn-primary btn-block">Sign in</button>
					</form>
				</div>
			</div>
		</div>
	</div>


	<script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
	<script type="text/javascript" src="js/login/login.js"></script>
</body>
</html>
