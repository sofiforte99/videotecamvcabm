<?php
include_once('./session/videoteca.session.php');
include_once('./models/juegos.class.php');
include_once('./model/videotecajuegos.class.php');
include_once('./database/database.class.php');
include_once('./controller/baseController.php');

class Controlador_Principal {
    
    const defaultController = 'home';

    private static function Renderizar ($controller) {
        require_once "controller/$controller.controller.php";
        $controller = ucwords($controller) . 'Controller';
        $controller = new $controller;
        $controller->Index();  
    }

 
    private static function RenderFromQueryString () {
        // Obtenemos el controlador que queremos cargar
        $controller = strtolower($_REQUEST['c']);
        $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
        // Instanciamos el controlador
        require_once "controller/$controller.controller.php";
        $controller = ucwords($controller).'Controller';
        $controller = new $controller;
        // Llama la accion
        call_user_func(array($controller, $accion));
    }


}

Controlador_Principal::ProcessRequest();

?>