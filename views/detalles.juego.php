<div class="row">
  <div class="col-lg-6">
    <section class="panel">
      <header class="panel-heading">
        <h1>Detalles del juego</h1>
        <a href="?c=juegos">Regresar</a>
      </header>
      <div class="panel-body">
        <dl class="dl-horizontal">
          <dt>Código</dt><dd><?= $MODEL->get_Codigo() ?></dd>
          <dt>Título</dt><dd><?= $MODEL->get_Titulo() ?></dd>
          <dt>Descripción</dt><dd><?= $MODEL->get_Descripcion() ?></dd>
          <dt>Precio</dt><dd><?= $MODEL->get_Precio() ?></dd>
          <dt>Cantidad</dt><dd><?= $MODEL->get_Cantidad() ?></dd>
        </dl>
      </div>
    </section>
  </div>
</div>