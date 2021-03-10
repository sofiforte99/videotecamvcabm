<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        <h1>Juegos</h1>
        <?php?>
          <a href="?c=articles&a=Create" class="btn btn-success">Crear</a>
        <?php?>
      </header>
      <div class="panel-body">
        <table class="table table-striped table-hover dt-datatable">
          <thead>
            <tr>
              <th>Código</th>
              <th>Titulo</th>
              <th>Descripción</th>
              <th>Precio</th>
              <th>Cantidad</th>
              <th class="no-sort"></th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach ($MODEL as $juego) { 
            ?>
              <tr>
                <td><?=$juego->get_Codigo()?></td>
                <td><?=$juego->get_Titulo()?></td>
                <td><?=$juego->get_Descripcion()?></td>
                <td><?=$juego->get_Precio()?></td>
                <td><?=$juego->get_Cantidad()?></td>
                <td>
                  <?php?>
                    <a class="fa fa-eye btn btn-info btn-sm" href="?c=juegos&a=Leer_Juegos&id=<?=$juego->get_Id()?>"></a>
                    <a class="fa fa-pencil btn btn-warning btn-sm" href="?c=juegos&a=Editar_Juego&id=<?=$juego->get_Id()?>"></a>
                    <a class="fa fa-trash btn btn-danger btn-sm" href="?c=articles&a=Borrar_Juego&id=<?=$juego->get_Id()?>"></a>
                  <?php?>
                    <a class="btn btn-primary btn-sm" href="?c=juegos&a=Ingresar_Juego&id=<?=$juego->get_Id()?>"><i class="fa fa-cart-plus"></i> Agregar juego a la biblioteca</a>
                  <?php?>
                </td>
              </tr>
            <?php 
              }
            ?>
          </tbody>
        </table>
      </div>
    </section>
  </div>
</div>