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
    <div class="col-lg-6 col-lg-offset-3">
        <h1>Registro Éxitoso</h1>
        
        <h2>
            <i class="fa fa-check text-green" style="font-size: 150%"></i> El usuario se ha registrado correctamente.
        </h2>
        
        <ul class="list-inline">
            <li>
                <a class="btn btn-default" href="index.php">Ir al inicio</a>
            </li>           
        </ul>
    </div>
    <!-- /.col-lg-6 -->
</div>
<!-- /.row -->