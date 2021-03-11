<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        <h1>Juegos en la videoteca</h1>
      </header>
      <div class="panel-body">
        <table class="table table-striped table-hover dt-datatable">
          <thead>
            <tr>
              <th>Código</th>
              <th>Título</th>
              <th>Descripción</th>
              <th>Precio</th>
              <th class="no-sort"></th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ((array) $MODEL as $juego) { 
            ?>
              <tr>
                <td><?=$juego->get_Codigo()?></td>
                <td><?=$juego->get_Marca()?></td>
                <td><?=$juego->get_Descripcion()?></td>
                <td><?=$juego->getPrice()?></td>
                <td><a href="?c=videotecajuegos&a=Borrar_Juego&id=<?=$juego->get_VideotecaJuegosUniqueId()?>" class="btn btn-danger btn-sm fa fa-minus-circle"></a></td>
              </tr>
            <?php 
              }
            ?>
          </tbody>
          <tfoot>
            <tr>
              <th style="text-align:right;" colspan="3">Total:</th>
              <td><?= array_sum(array_map(function ($flag) { return $flag->get_Precio(); }, $MODEL));?></td>
              <td></td>
            </tr>
          </tfoot>
        </table>
      </div>
    </section>
  </div>
</div>