<?php
class JuegosController extends BaseController
{
    public function __construct(){}
    
        public function Index()
        {
            $model = Juego::Get_all_Juegos();
            parent::Renderizar(
                'Juegos', 'views/composicion.php', 'views/juegos.php', 
                $model
            );
        }

        public function Ingresar_Juego()
        {
            parent::Renderizar(
                'Articles',
                'view/t.php', 
                'Juegos', 'views/composicion.php', 'views/ingresar.php', 

            );
        }    
    
        public function Leer_Juego()
        {
            $id = (int)$_REQUEST['id'];
            $model = Juego::Get_JuegobyId();
            parent::Renderizar(
                'Juegos',
                'views/composicion.php',
                'views/juegos/leermas.php',
                $model
            );
        }

        public function Editar_Juego()
        {
            $id = (int)$_REQUEST['id'];
            $model = Juego::Get_JuegobyId($id);
            parent::Renderizar(
                'Juegos',
                'views/composicion.php', 
                'views/edit.php',
                $model
            );
        }
        
        public function Borrar_Juego()
        {
            $id = (int) $_REQUEST['id'];
            $model = Juego::Get_JuegobyId();
            $model->Delete();
            parent::RedirigirController('Juegos',
            'views/composicion.php', 
            'views/borrar.php',);
        }

      
    



}





















?>