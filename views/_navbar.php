<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button 
      type="button" 
      class="navbar-toggle collapsed" 
      data-toggle="collapse" 
      data-target="#bs-example-navbar-collapse-1"
      aria-expanded="false">
        <span class="sr-only">Navegacion</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#menu-toggle" id="menu-toggle">
        <i class="fa fa-arrow-left" aria-hidden="true"></i>
      </a>
      <a class="navbar-brand" href="#">Videoteca App</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
 
      <ul class="nav navbar-nav navbar-right">
        <?php if (VideotecaJuegosSession::ExisteVideotecaJuegos()) { 
                $videotecajuegos = VideotecaJuegosSession::get_VideotecaJuegos(); ?>
          <li>
            <a href="?c=videotecajuegos">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
              &nbsp;
              <?=count($videotecajuegos->juegos)?> Juegos de la videoteca
            </a>
          </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>