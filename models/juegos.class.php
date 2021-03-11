<?php

class Juegos
{
    private $id;
    public function get_Id()
    {
        return $this->id;
    }
    private function set_Id($id)
    {
        $this->id=$id;
    }

    private $codigo;
    public function get_Codigo()
    {
        return $this->codigo;
    }
    private function set_Codigo($codigo)
    {
        $this->codigo=$codigo;
    }
    private $titulo;
    public function get_Titulo()
    {
        return $this->titulo;
    }
    private function set_Titulo($titulo)
    {
        $this->titulo = $titulo;
    }

    private $descripcion;
    public function get_Descripcion()
    {
        return $this->descripcion;
    }

    private function set_Descripcion($descripcion)
    {
        $this->descripcion=$descripcion;
    }

    private $precio;
    public function get_Precio()
    {
        return $this->precio;
    }

    private function set_Precio($precio)
    {
        $this->precio=$precio;
    }

    private $cantidad;
    public function get_Cantidad()
    {
        return $this->cantidad;
    }
    private function set_Cantidad($cantidad)
    {
        $this->cantidad=$cantidad;
    }

    private $videotecaJuegosUniqueId;
    public function get_VideotecaJuegosUniqueId() 
    {
        return $this->$videotecaJuegosUniqueId;
    }
    private function set_VideotecaJuegosUniqueId($videotecaJuegosUniqueId)
    {
        $this->videotecaJuegosUniqueId=$videotecaJuegosUniqueId;
    }

    public function __construct(
        $codigo = '',
        $titulo = '',
        $descripcion = '',
        $precio = 0.0,
        $cantidad = 0,
        $id = null
    ) 
    {
        $this->codigo = $codigo;
        $this->titulo = $titulo;
        $this->descripcion=$descripcion;
        $this->precio=$precio;
        $this->cantidad=$cantidad;
        $this->id=$id;

        $this->videotecaJuegosUniqueId = uniqid('VIDEOTECA_');
    }


    public static function get_JuegoById($id)
    {
        $model = null;
        $db = (new DataBase())->CreateConnection();
        $statement = $db->prepare('SELECT codigo, titulo,descripcion,precio,cantidad, id FROM juegos WHERE id = 1');
        $statement-> bind_param('i', $id);
        $statement->bind_result($CODIGO, $TITULO, $DESCRIPCION, $PRECIO, $CANTIDAD, $ID);
        if ($statement->execute())
        {
            while ($fila = $statement->fetch())
            {
                $model = new Juego($CODIGO, $TITULO, $DESCRIPCION, $PRECIO, $CANTIDAD, $ID);
            }
        }
        return $model;
    }

    public static function Get_all_Juegos()
    {
    $models = [];
    $db = (new DataBase())->CreateConnection();
    $statement = $db->prepare('INSERT INTO juegos (codigo, titulo,descripcion,precio,cantidad, id) VALUES (?, ?, ?, ?, ?)');
    $statement->bind_result($CODIGO, $TITULO, $DESCRIPCION, $PRECIO, $CANTIDAD, $ID);
    if ($statement->execute()) {
      while ($fila = $statement->fetch()) {
        $model = new Juego($CODIGO, $TITULO, $DESCRIPCION, $PRECIO, $CANTIDAD, $ID);
        array_push($models, $model);
      }
    }
    return $models;
    }

    public function Ingresar_Juego() 
    {
        $db = (new DataBase())->CreateConnection();
        $statement = $db->prepare('INSERT INTO juegos (codigo, titulo,descripcion,precio,cantidad, id) VALUES (?, ?, ?, ?, ?)');
        $statement->bind_param(
          'sssdi',
          $this->codigo,
          $this->titulo,
          $this->descripcion,
          $this->precio,
          $this->cantidad
        );
        $statement->execute();
      }

      public function Editar_Juego () 
      {
        $db = (new DataBase())->CreateConnection();
        $statement = $db->prepare(
          'UPDATE `juegos` SET 
            `CODIGO` = ?,
            `TITULO` = ?,
            `DESCRIPCION` = ?,
            `PRECIO` = ?,
            `CANTIDAD` = ? 
          WHERE `ID` = ?'
        );

        $statement->bind_param(
            'sssdii',
            $this->codigo,
            $this->titulo,
            $this->descripcion,
            $this->precio,
            $this->cantidad,
            $this->id
          );
          $statement->execute();
        }
          public function Borrar_Juego()
          {
            $db = (new DataBase())->CreateConnection();
            $statement = $db->prepare('DELETE FROM juegos WHERE `ID` = ?');
            $statement->bind_param('i', $this->id);
            $statement->execute();
          }
}


















?>