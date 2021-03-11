<?php
class JuegosController extends BaseController
{
    public function __construct(){}
    
        public function Index()
        {   
            //$model = $videotecajuegos->juegos;
           // $videotecajuegos = Juegos::Get_all_Juegos();
            parent::Renderizar(
                'Juegos', 'views/composicion.php', 'views/juegos.php', 
                $model
            );
        }

        public function Ingresar_Juego()
        {
            parent::Renderizar(
                            
                'Juegos', 'views/composicion.php', 'views/ingresar.juego.php', 

            );
        }    
    
        public function Detalles_Juego()
        {
            $id = (int)$_REQUEST['id'];
            $model = $videotecajuegos->juegos;
            $videotecajuegos = Juegos::Get_JuegobyId();
            parent::Renderizar(
                'Juegos',
                'views/composicion.php',
                'views/detalles.juego.php',
                $model
            );
        }

        public function Editar_Juego()
        {
            $id = (int)$_REQUEST['id'];
            $model = $videotecajuegos->juegos;
            $videotecajuegos = Juegos::Get_JuegobyId($id);
            parent::Renderizar(
                'Juegos',
                'views/composicion.php', 
                'views/editar.juego.php',
                $model
            );
        }
        
        public function Borrar_Juego()
        {
            $id = (int) $_REQUEST['id'];
            $model = $videotecajuegos->juegos;
            $videotecajuegos = Juegos::Get_JuegobyId();
            $model->Borrar_Juego();
            parent::RedirigirController('Juegos',
            'views/composicion.php', 
            'views/borrar.juego.php',);
        }

      
    



}





















?>