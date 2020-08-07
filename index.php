<?php  session_start();
       if(!empty($_SESSION['usuario']) && $_SESSION['cbo_horario']!=0){  header('Location:chat.php'); }
       if(isset($_POST['entrar'])){  
                                     $_SESSION['usuario']    =$_POST['txt_usuario'];
                                     $_SESSION['cbo_horario']=$_POST['cbo_horario']; 
                                     if(!empty($_SESSION['usuario']) && $_SESSION['cbo_horario']!=0){   header('Location:chat.php');  }
                                   }
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<br><br><br><br>
<div class="container">
<center>    
<h1>CHAT SENCILLO DE LUISHR18</h1>
</center>
<form action="index.php" method="post" enctype="multipart/form-data">
        <div class="container">
            <div class="row p-3">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="form-group">
                          <label for="cbo_horario">Talleres o Conferencias:</label>
                             <select id="cbo_horario" name="cbo_horario" class="form-control form-control-sm">
                                          <option value="0">SELECCIONE</option>
                                          <option value="1">TALLER 1</option>
                                          <option value="2">CONFERENCIA 1</option>
                                          <option value="3">TALLER 2</option>
                             </select>   
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="form-group">
                          <label for="txt_usuario">Nombre de Usuario:</label>
                          <input type="text" id="txt_usuario" name="txt_usuario" class="form-control form-control-sm" placeholder="Ingrese usuario...">
                        </div>
                    </div>
                    <div class="col-12  col-sm-12  col-md-12  col-lg-12  col-xl-12">
                        <div class="form-group">
                              <button id="entrar" type="submit" name="entrar"  class="btn btn-primary btn-sm btn-block">Entrar</button>
                        </div>
                    </div>
            </div>
        </div>
</form>
</div>
</body>
</html>