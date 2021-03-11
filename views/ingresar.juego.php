<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        <h1>Ingresar juego</h1>
        <a href="?c=juegoss">Regresar</a>
      </header>
      <div class="panel-body">
        <form action="?c=juegos&a=Ingresar_Juego" autocomplete="off">
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="code">Código</label>
              <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Código">
            </div>
            <div class="form-group col-md-4">
              <label for="titulo">Título</label>
              <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
            </div>
            <div class="form-group col-md-4">
              <label for="description">Descripción</label>
              <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
                <label for="price">Precio</label>
                <input type="text" class="form-control" id="precio" name="precio" placeholder="Precio">
            </div>
            <div class="form-group col-md-6">
              <label for="quantity">Cantidad</label>
              <input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad">
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4">
              <button type="submit" class="btn btn-primary"><i class="fa fa-cart-plus"></i> Ingresar Juego</button>
            </div>
          </div>
        </form>
      </div>
    </section>
  </div>
</div>