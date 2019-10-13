<?php

// Classe contrôleur générique

class CoreController{

    protected $dbdata;
    protected $router;

    public function __construct($router)
    {
        $this->router = $router;
        $this->dbdata = new DBData();
    }


 

    // paramètre viewName pour inclure la vue dynamiquement
    // paramètre params pour mettre à disposition des éléménts à nos vues
    protected function show($viewName, $params = [])
    {

        // Url dossiers css, images
        $params['baseURL'] = $_SERVER['BASE_URI'];
        $params['cssURL'] = 'assets/css/';
        $params['imgURL'] = 'assets/images/';
        $params['imgRacine'] = '.png';
        $params['jsURL'] = 'assets/js/';

        // URL de la page créateurs
        $params['typesURL'] = $this->router->generate('types');


        // inclusion des fichiers de vue
        require_once __DIR__ . "/../views/header.tpl.php";
        require_once __DIR__ . "/../views/$viewName.tpl.php";
        require_once __DIR__ . "/../views/footer.tpl.php";
    }

}
