<?php 
if (!isset($_SESSION)) { session_start(); } 
if(!$_SESSION["validar"]){  
    echo "<script>"
        . "window.location.replace(\"http://10.224.24.247/parque/\");"
        . "</script>";
    exit();
}
?>
<!-- begin BRAND HEADING -->
<div class="navbar-header">
    <button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target=".sidebar-collapse">
        <i class="fa fa-bars"></i> Menu
    </button>
    <div class="navbar-brand">
        <a href="index.php">
            <img src="img/flex-admin-logo.png" data-1x="img/flex-admin-logo@1x.png" data-2x="img/flex-admin-logo@2x.png" class="hisrc img-responsive" alt="">
        </a>
    </div>
</div>
<!-- end BRAND HEADING -->