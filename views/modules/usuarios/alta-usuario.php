<?php 
if (!isset($_SESSION)) { session_start(); } 

if(!$_SESSION["validar"]){  
    echo "<script>"
        . "window.location.replace(\"http://10.224.24.247/parque/\");"
        . "</script>";
    exit();
}
?>
<div class="row">
    <div class="col-lg-12">
        <div class="page-title">
            <h1>Registro de nuevos usuarios
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-user"></i>  <a href="index.php">A.B.M. Usuarios</a>
                </li>
                <li class="active">Registro de usuarios</li>
            </ol>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="col-lg-6">

    <div class="portlet portlet-default">
        <div class="portlet-heading">
            <div class="portlet-title">
                <h4>Formulario de registro</h4>
            </div>
            <div class="portlet-widgets">
                <a data-toggle="collapse" data-parent="#accordion" href="#basicFormExample"><i class="fa fa-chevron-down"></i></a>
            </div>
            <div class="clearfix"></div>
        </div>

        <div id="basicFormExample" class="panel-collapse collapse in">
            <div class="portlet-body">

                <form role="form" method="post">

                    <div class="form-group">
                        <label for="inputNombre">Nombre del usuario</label>
                        <input type="text" name="nombreRegistro" class="form-control" placeholder="Ingrese el nombre de usuario" required>
                    </div>

                    <div class="form-group">
                        <label for="inputApellido">Apellido del usuario</label>
                        <input type="text" name="apellidoRegistro" class="form-control" placeholder="Ingrese el apellido del usuario" required>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail1">Correo electronico</label>
                        <input type="email" name="emailRegistro" class="form-control" placeholder="Ingrese una cuenta de email" required>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input type="password" name="passwordRegistro" class="form-control" placeholder="Password" required>
                    </div>

                    <button type="submit" class="btn btn-default">Guardar registro</button>

                </form>
            </div>
        </div>
    </div>
    <!-- /.portlet -->
</div>

<?php

require_once("../controllers/usuarios/user-controller.php");

$registro = new UsuariosController();
$registro->registroUsuarioController();

if (isset($_GET["action"])) {

    if ($_GET["action"] == "ok") {

        echo "Registro Exitoso";
    }
}