
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="http://localhost/Biblioteca%20digital/Recursos/img/nm02.ico" >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="http://localhost/Biblioteca%20digital/Recursos/css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
   <?php
     require_once('./Controlador/controlador.php');
     

   ?>
    <div class="container">
        <div class="login_c1">
         <div class="login_c2">
            <h1 class="Login-T">Registro</h1>
         <img src="http://localhost/Biblioteca%20digital/Recursos/img/nm02.png" alt="">


         <form class="rotate-form" method="POST">
  <div class="mb-1 w-75">
    
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" width="50%" placeholder="Email"> 
    
  </div>
  <div class="mb-1 w-75">
    
    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre">
  </div>
  <div class="mb-1 w-75">
    
    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
  </div>

  <button type="submit" name="btnRegistro" value="registro" class="orientationBtn btn btn-primary">Registrar</button>
</form>
         
         </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>


