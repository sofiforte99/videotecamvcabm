<?php

abstract class BaseController {

  protected function Renderizar($pagina_nombre, $composicion_path, $vista_path, $model = null) {
    $PAGE = $pagina_nombre; 
    $MODEL = $model;
    include $vista_path; 
    require_once $composicion_path; 
  }

  protected function RedirigirController($controller, $action = null) {
    if ($action == NULL) {
      header('Location: ?c='.$controller);
    } else {
      header('Location: ?c='.$controller.'&a='.$action);
    }
    die();
  }

  protected function RenderizarJson ($model) {
    header('Content-type: application/json');
    $json = json_encode($model);
    echo $json;
  }

}
?>









