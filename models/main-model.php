<?php

class MainModel {

    public function linksPagesModel($p_linkModel) {

        if ($p_linkModel == "alta-cliente" |
                $p_linkModel == "baja-cliente" |
                $p_linkModel == "modi-cliente" |
                $p_linkModel == "listar-clientes" |
                $p_linkModel == "info-cliente") 
        {
                
            $l_module = "modules/clientes/" . $p_linkModel . ".php";
                
        } 
            
        else if ($p_linkModel == "alta-inhumado" |
                    $p_linkModel == "baja-inhumado" |
                    $p_linkModel == "modi-inhumado") 
        {
                
            $l_module = "modules/inhumados/" . $p_linkModel . ".php";
                
        } 
            
        else if ($p_linkModel == "alta-usuario" |
                    $p_linkModel == "baja-usuario" |
                    $p_linkModel == "modi-usuario" |
                    $p_linkModel == "listar-usuarios") 
        {
                
            $l_module = "modules/usuarios/" . $p_linkModel . ".php";
                
        } 
            
        else if ($p_linkModel == "ok") 
            
        {

            $l_module = "modules/usuarios/registro-ok.php";
                
        } 
                
        else if ($p_linkModel == "logout") 
            
        {

            $l_module = "modules/" . $p_linkModel . ".php";
                
        } 
            
        else if ($p_linkModel == "index") 
            
        {

            $l_module = "modules/inicio.php";
                
        } 
            
        else if ($p_linkModel == "dashboard") 
            
        {

            $l_module = "modules/dashboard.php";
                
        } else 
            
        {

            $l_module = "modules/inicio.php";
                
        }

        return $l_module;
    }

}
