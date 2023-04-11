<?php
 session_start();	
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="css/stylelogi.css">
</head>
<body>
    <section class="portal">
        <form action="validate.php" method="post">
        <div class="app-title">
				<h1>Login</h1>
				<center><img src="../img/logo.png"width=260px; height=135px;>
				</div>
            <!--<span>or</span>-->
            
            <div class="input-field">
                
							<input type="text" class="login-field" placeholder="Username" name="usuario">
							<label class="login-field-icon fui-user" for="login-name"></label>
            </div>
            <div class="input-field">
                
							<input type="password" class="login-field" placeholder="password" name="contraseña">
							<label class="login-field-icon fui-lock" for="login-pass"></label>
                <img id="show-hide-pass" src="assets/show-eye.svg" alt="">
            </div>
            
            <button id="signin">Entrar</button>
        </form>
    </section>
</body>
</html>