 <!DOCTYPE html>
 <link rel="icon" href="https://www.ecopoop.co/wp-content/uploads/2017/07/LOGO.png">
 <html lang="en">

 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>ECO POOP</title>
 	<link rel="stylesheet" href="../css/recuperar.css">
 </head>

 <body>
 	<section>
 		<div class="color"></div>
 		<div class="color"></div>
 		<div class="color"></div>
 		<div class="box">
 			<div class="square" style="--i:0;"></div>
 			<div class="square" style="--i:1;"></div>
 			<div class="square" style="--i:2;"></div>
 			<div class="square" style="--i:3;"></div>
 			<div class="square" style="--i:4;"></div>
 			<div class="container">
 				<div class="form">
 					<h2><?= $data['page_tag']; ?></h2>
 					<form>
 						<div class="inputBox">
 							<input id="txtEmail" name="txtEmail" class="form-control" type="email" placeholder="Email" autofocus>
 						</div>

 						<br>

 						<div class="inputBox" >
 							<input id="txtPassword" name="txtPassword" class="form-control" type="password" placeholder="Contraseña">
 						</div>

 						<div id="alertLogin" class="text-center" ></div>
 						<div class="form-group btn-container">
 							<button type="submit" class="btn btn-primary btn-block"><i class="fas fa-sign-in-alt"></i> INICIAR SESIÓN</button>
 						</div>
						

 						<p class="forget" style="text-align: center;">
 							<a href="./registro.php">Registrate</a>
 						</p>
 						<br>
 						<p class="forget">
						 <h3 class="login-head" style="text-align: center;"><i class="fa fa-lg fa-fw fa-lock"></i>¿Olvidaste contraseña?</h3>
 						</p>
 						
 					</form>
 				</div>
 			</div>
 		</div>
 	</section>
 </body>
 
 </html>
 </section>
 </body>

 </html>