<?php

class VideotecaJuegosSession

{   
    const claveVideotecaJuegos = 'VIDEOJUEGO'; //creo constante para pasarla al array session 

    public static function GuardarVideotecaJuegos ($videotecajuegos)
    {
        if (!isset($_SESSION)) //verifico que la sesion no sea nula
        {
            session_start(); // empiezo sesion
        }
        $_SESSION[VideotecaJuegosSession::claveVideotecaJuegos] = $videotecajuegos; //sobreescribo la clave 
    }

    public static function ExisteVideotecaJuegos() //verifico que exista la biblioteca
    { 
        /*if (!isset($_SESSION))
        {
            session_start();
        }*/

        return isset($_SESSION[VideotecaJuegosSession::claveVideotecaJuegos]);
   
      }
    

    public static function get_VideotecaJuegos()
    {
        if (VideotecaJuegosSession::ExisteVideotecaJuegos())  
         {
            if (!isset($_SESSION))
            {
                session_start();
            }
            return $_SESSION[VideotecaJuegosSession::claveVideotecaJuegos]; //me queda la sesion especifica del usuario
        }
        else
        {
            return null; //devuelvo vacio porque no existe
        }
    }

    public static function EliminarSesionVideotecaJuegos()
    {
        if(VideotecaJuegosSession::ExisteVideotecaJuegos())
        {
            if (!isset($_SESSION))
            {
                session_start();
            }
            if (!isset($_SESSION[VideotecaJuegosSession::claveVideotecaJuegos]))
            {             
                unset($_SESSION[VideotecaJuegosSession::claveVideotecaJuegos]); //unset elimina la session
            }
        }
    }

}













?>