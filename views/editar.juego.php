<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        <h1>Modificar juegoo</h1>
        <a href="?c=juegos">Regresar</a>
      </header>
      <div class="panel-body">
        <form action="?c=juegos&a=Editar_Juego" autocomplete="off">
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="codigo">Código</label>
              <input value="<?= $MODEL->get_Codigo() ?>" type="text" class="form-control" id="codigo" name="codigo" placeholder="Código">
            </div>
            <div class="form-group col-md-4">
              <label for="titulo">Título</label>
              <input value="<?= $MODEL->get_Titulo() ?>" type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
            </div>
            <div class="form-group col-md-4">
              <label for="descripcion">Descripción</label>
              <input value="<?= $MODEL->get_Descripcion() ?>" type="text" class="form-control" id="descripcion" name="descripcion" placeholder="correo@dominio.com">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
                <label for="precio">Precio</label>
                <input value="<?= $MODEL->get_Precio() ?>" type="text" class="form-control" id="precio" name="precio" placeholder="Precio">
            </div>
            <div class="form-group col-md-6">
              <label for="cantidad">Cantidad</label>
              <input value="<?= $MODEL->get_Cantidad() ?>" type="number" class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad">
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4">
              <input type="hidden" name="id" id="id" value="<?= $MODEL->get_Id() ?>" />
              <button type="submit" class="btn btn-primary"><i class="fa fa-pencil"></i> Editar Juego</button>
            </div>
          </div>
        </form>
      </div>
    </section>
  </div>
</div>