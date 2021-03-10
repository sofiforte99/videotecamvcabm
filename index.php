<?php
include_once('./session/videotecajuegos.session.php');
include_once('./models/juegos.class.php');
include_once('./models/videotecajuegos.class.php');
include_once('./data/data.class.php');
include_once('./controllers/baseController.php');

class Controlador_Principal {
    
    const defaultController = 'home';

    private static function RenderizarController ($default = Controlador_Principal::defaultController) {
        if (!isset($_REQUEST['c'])) Controlador_Principal::Renderizar($default); else Controlador_Principal::RenderFromQueryString();
    }
    private static function Renderizar ($controller) {
        require_once "controllers/$controller.controller.php";
        $controller = ucwords($controller) . 'Controller';
        $controller = new $controller;
        $controller->Index();  
    }

 
    private static function RenderFromQueryString () {
        // Obtenemos el controlador que queremos cargar
        $controller = strtolower($_REQUEST['c']);
        $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
        // Instanciamos el controlador
        require_once "controllers/$controller.controller.php";
        $controller = ucwords($controller).'Controller';
        $controller = new $controller;
        // Llama la accion
        call_user_func(array($controller, $accion));
    }
    public static function Process_Request () {
        {Controlador_Principal::RenderizarController(); return; }
    }



}
Controlador_Principal::Process_Request();


?>