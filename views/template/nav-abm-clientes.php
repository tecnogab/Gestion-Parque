<?php 
if (!isset($_SESSION)) { session_start(); } 
if(!$_SESSION["validar"]){  
    echo "<script>"
        . "window.location.replace(\"http://10.224.24.247/parque/\");"
        . "</script>";
    exit();
}
?>
<li class="panel">
    <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#clientes">

        <i class="fa fa-user"></i> A.B.M. Clientes <i class="fa fa-caret-down"></i>

    </a>

    <ul class="collapse nav" id="clientes">

        <li>
            <a href="index.php?action=alta-cliente">
                <i class="fa fa-angle-double-right"></i> Alta de clientes
            </a>

        </li>

        <li>
            <a href="index.php?action=baja-cliente">
                <i class="fa fa-angle-double-right"></i> Baja de clientes
            </a>
        </li>

        <li>
            <a href="index.php?action=modi-cliente">
                <i class="fa fa-angle-double-right"></i> Modificación de clientes
            </a>
        </li>

    </ul>
</li>