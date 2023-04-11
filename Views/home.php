<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="./Views/styles/main.css">
    <link rel="stylesheet" href="./Views/styles/normalize.css">
    <title>INICIO DE SESION- GIDI</title>
</head>
<body class="login-design">
      <div class="waves">
        <img src="./Views/assets/loginPerso.png" alt=""> 
      </div>
      <div class="login">
        <div class="login-data">
          <img src="Views/assets/collab.png" alt="">
          <a type="submit" value="Página de inicio" class="btn-reg" target="_blank" style="text-decoration:none" href="#">Paágina de inicio</a>
          <h1><b>Inicio de sesión</b></h1>

          <form action="<?php echo base_url();?>usuarios/login" method="post" autocomplete="off" id="frmAcceso" class="login-form">
          <p><b>(*)Llene todos los campos obligatorios</b></p>
          <div class="input-group">
          <label class="input-fill">
                <input class="input100" type="text" id="usuario" name="usuario" autocomplete="new-password" placeholder="(*)Correo Electrónico" required>
                
                <span class="input-label"></span>
                <i class="fas fa-envelope"></i>
              </label>
            </div>
            <div class="input-group">
            <label class="input-fill">
                <input class="input100" type="password" id="clave" name="clave" placeholder="(*)Contraseña" required>
                <span class="input-label"></span>
                <i class="fas fa-lock"></i>
              </label>
            </div>
           <!--  <button class="btn btn-primary btn-block" type="submit">Iniciar</button> -->
            <input type="submit" value="Iniciar Sesión" class="btn-login">
            <br>
          <p></p>
          <div class="container-fluid">
          <br>
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted"><b>Copyright &copy; GIDI por MEJC </b></div>
            </div>
            <br>
            </div>
          </form>

        </div>
      </div>
       
       <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <!-- <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; GIDI</div>
                    </div>
                </div> -->
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
</body>
</html>