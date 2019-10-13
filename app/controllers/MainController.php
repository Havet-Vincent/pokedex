<?php

/**
 * Contrôleur page home
 */
class MainController extends CoreController {

    /**
     * Action home
     * Appellée lorsque l'url  est demandée  /
     */
    public function home()
    {
        $pokemons = $this->dbdata->getHomePokemons();
        
        $this->show(
            'home', 
            [
            'pokemons' => $pokemons,
            ]
        );
    }

}
