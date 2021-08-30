<?php @session_start(); ?>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form action="verificacion.php">
				<img src="img/avatar.svg">
				<h3 class="title">Bienvenido al dominio Project.so</h3>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<td><h5>Usuario</h5></td>
           		   		<td><input type="text" class="input" name="usuario" id="usuario"></td>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<td><h5>Contraseña</h5></td>
           		    	<td><input type="password" class="input" name="contraseña" id=contraseña></td>
            	   </div>
            	</div>
            	<input type="submit" class="btn" value="Iniciar Sesión">
            </form>
        </div>
    </div>
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
<?php exit(); ?>