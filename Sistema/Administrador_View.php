<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrador</title>
    <script src="../../Recursos/js/menuLateral.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
     
    <div class="container text-center">
        <div class="row align-items-start">
          <div class="col p-3">
            <form action="" method="POST">
            <button type="button" class="btn btn-light btn-lg btn-block w-25"  onclick="crear()"><img src="../../Recursos/img/nm02.png" width="100"></button>
            <br>
            <br>
            <button type="button" class="btn btn-light btn-lg btn-block w-25" onclick="eliminar()">Insertar</button>
            <br>
            <br>
            <button type="button" class="btn btn-light btn-lg btn-block w-25" onclick="eliminar()">Modificar</button>
            <br>
            <br>
            <button type="button" class="btn btn-light btn-lg btn-block w-25" onclick="eliminar()">Borrar</button>
            <br>
            <br>
            <button type="submit" name="addUser" class="btn btn-light btn-lg btn-block w-25" onclick="">Agregar usuario</button>
            <?php
        if(isset($_POST['addUser']))
        {
            Header('Location: ./Vista/Registro/registro_View.php');
        }
        

      ?>
            </form>
          </div>
          <div class="col align-items-start">

            Administrador del sistema bibliotecario digital
            <br>
            <br>
            <span> del sistema disponibles
            <br>
            <br>
            
            
            <div class="row align-items-left" style="height:300px;" id="div1">
                <button type="button" class="btn btn-light btn-lg btn-block w-50 h-25" id="idBtnLibros">Libros</button>
            </div>
            <div class="row align-items-left" style="height:300px;" id="div2">
                <button type="button" class="btn btn-light btn-lg btn-block w-50 h-25" id="idBtnUsuarios">Usuarios</button>
            </div>
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script>
      
    </script>
  </body>
</html>