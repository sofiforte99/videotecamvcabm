<?php

class VideotecaJuegosController extends BaseController
{
   public function __construct()
   {
       $carrito = VideotecaJuegosSession::get_VideotecaJuegos();
       $model = $VideotecaJuegos->juegos;
       parent::Renderizar('VideotecaJuegos', 'views/composicion.php', 'view/VideotecaJuegos.php', $model    
   );
   }
   public function VideotecaJuegosVacia()
   {
        VideotecaJuegosSession::EliminarSesionVideotecaJuegos();
        parent::RedirigirController('videojuego'); //sobreescribe el metodo de BaseController
   }

   public function EliminarVideojuego()
   {
       $videotecajuegos = get_VideotecaJuegos();
       $id = $_REQUEST['id']; 
       $filtrarJuegos = array_filter($videotecajuegos->juegos, function ($flag) use ($id) //array filter con flag
       { //filtro array
           return $flag->get_VideotecaJuegosUniqueId() != $id;
       }); 
       if(count($filtrarJuegos)>0)
       {
           $VideotecaJuegos->juegos = $filtrarJuegos;
           VideotecaJuegosSession::GuardarVideotecaJuegosEnSession($juego);
           parent::RedirigirController('videotecajuegos');
       }
       else
       {
        VideotecaJuegosSession::EliminarVideojuegoEnSession();
        parent::RedirigirController('juego');
       }

    } 


}

