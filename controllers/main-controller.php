<?php

class MainController {
    
    #LLAMADA A LA PLANTILLA
    #-------------------------------------

    public function pagina() {
        include "../views/template.php";
    }

    public function linksPagesController() {

        if (isset($_GET["action"])) {
            $l_linkController = $_GET["action"];
        } else {
            $l_linkController = "index";
        }

        $l_response = MainModel::linksPagesModel($l_linkController);

        include "$l_response";
    }

}
