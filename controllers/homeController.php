<?php
class HomeController extends BaseController {
    
    public function __construct (){}
    
    public function Index () {
        parent::Renderizar(
            'Home', 
            'views/composicion.php', 
            'views/home.php'
        );
    }
    
}

?>