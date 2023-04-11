<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../css/stylelogin.css">
  <link rel="stylesheet" type="text/css" href="../css/styleoption.css">
  <title>REGISTER</title>
</head>
<body>

  <div class="login">
    <div class="login-screen">
      <div class="app-title">
        <h1>Registro</h1>
        <center><img src="../img/logo.png"width=260px; height=135px;>
        </div>

<form action="validateregistro.php" method="post" enctype="multipart/form-data">
        <div class="login-form">
          <div class="control-group">
            <input type="text" class="login-field" name="usuario"  placeholder="Nombre de usuario">
            <label class="login-field-icon fui-user" ></label>
          </div>

          <div class="control-group">
            <div class="row select">
              <div class="holder">
                <div class="col">
                  <select name="cargo" id="cargo">
                   <center><option>Selecciona Cargo de Usuario</option></center>
                    <option value='1'>ADMINISTRADOR</option>
                    <option value='2'>Encargado 5 de Mayo</option>
                    <option value='3'>Encargado Poniente</option>
                    <option value='4'>Encargado 16 Septiembre</option>
                    <option value='5'>Encargado Los Reyes</option>
                  </select>
                </div>
              </div>
            </div>
          </div>

          <div class="control-group">
            <input type="password" class="login-field" name="contraseña" placeholder="password">
            <label class="login-field-icon fui-lock" ></label>
          </div>
<input class="btn btn-primary btn-large btn-block" type="submit" value="Registrar">
</form>

       </div>
     </div>
   </div>
 </body>
 </html>