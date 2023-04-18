<?php

require_once('./Modelo/dbMethods.php');



        if(isset($_POST['btnRegistro'])){
            $email = $_POST['email'];
            $nombre= $_POST['nombre'];
            $password=md5($_POST['password']);
            $rol= 'user';
          if(!empty($_POST['email']) && !empty($_POST['nombre']) && !empty($_POST['password']) ) {
              $consulta=metodosCrud::connection()->prepare('INSERT INTO usuarios(nombreUsuario, rol,correo, password) VALUES(:n, :r, :c,:p)');
              $consulta->bindValue(':n', $nombre);
              $consulta->bindValue(':r', $rol);
              $consulta->bindValue(':c', $email);
              $consulta->bindValue(':p', $password);
              $consulta->execute();
              
          }else{
              echo 'fallo en el registro';
          }
          }
  


    
        if(isset($_POST['btnLogin']))
        {
            $_SESSION['validate'] = false;
            $email = $_POST['email'];
            $password =md5( $_POST['password']);
            $password2= $_POST['password'];
            if($_REQUEST['roles'] == 'user'){
                if(!empty($_POST['email'])  && !empty($_POST['password']) ) {
                    $consulta = metodosCrud::connection()->prepare('SELECT * FROM usuarios where correo=:c and password=:p and rol="user"');
                    $consulta->bindValue(':c', $email);
                    $consulta->bindValue(':p', $password2);
                    $consulta->execute();
                    $consulta->fetch(PDO::FETCH_ASSOC);
                    if($consulta->rowCount()>0)
                    {
                        $_SESSION['email'] =$email;
                        $_SESSION['password']=$password2;
                        $_SESSION['validate']=true;
                        header('Location: ./Vista/Usuario/user_view.php');
                    }else{
                        echo 'fallo el login'; 
                    }
     
                 }else{
                     echo 'fallo en el login';
                 }
            }else{
                if($_REQUEST['roles']=='admin')
            {
                if(!empty($_POST['email'])  && !empty($_POST['password']) ) {
                    $consulta = metodosCrud::connection()->prepare('SELECT * FROM usuarios where correo=:c and password=:p and rol="admin"');
                    $consulta->bindValue(':c', $email);
                    $consulta->bindValue(':p', $password);
                    $consulta->execute();
                    $consulta->fetch(PDO::FETCH_ASSOC);
                    if($consulta->rowCount()>0)
                    {
                        $_SESSION['email'] =$email;
                        $_SESSION['password']=$password;
                        $_SESSION['validate']=true;
                        header('Location: ./Vista/Administrador/Administrador_View.php');
                    }else{
                        echo 'fallo el login'; 
                    }
     
                 }else{
                     echo 'fallo en el login';
                 }

            }
            }
        }

    








?>


