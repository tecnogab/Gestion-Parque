<?php

class LoginController {
    
    #INGRESO DE USUARIOS
    #------------------------------------

    public function ingresoUsuarioController() {

        if (isset($_POST["emailIngreso"])) {

            $datosController = array("email" => $_POST["emailIngreso"],
                "password" => $_POST["passwordIngreso"]);

            $respuesta = LoginModel::ingresoUsuarioModel($datosController, "T_USUARIOS");            
            
            if ($respuesta["EMAIL"] == $_POST["emailIngreso"] && $respuesta["PASSWORD"] == $_POST["passwordIngreso"]) {
                
                session_start();
                $_SESSION["validar"] = true;                                
                header("location:views/index.php");
                
            } else {                
                header("location:index.php?action=fail");
            }
        }
    }

}
