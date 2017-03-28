<?php

class Conexion {

    public function conectar() {

        $l_link = new PDO("mysql:host=localhost;dbname=segui263_parque", "segui263_parque", "joselote_232221");
        return $l_link;
    }

}
