<?php

class VideotecaJuegosController extends BaseController
{
    public function __construct(){}

   
    public function Index () {
   
       $videotecajuegos = VideotecaJuegosSession::get_VideotecaJuegos();
       $model = $videotecajuegos->juegos;
       parent::Renderizar('VideotecaJuegos', 'views/composicion.php', 'views/videotecajuegos.php', $model    
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
           $videotecajuegos->juegos = $filtrarJuegos;
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

