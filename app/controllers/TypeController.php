<?php

/**
 * Contrôleur par un type 
 */
class TypeController extends CoreController {

    /**
     * Action liste/type/id
     * Appellée lorsque l'url  est demandée  /
     */
    public function typePokemon($params)
    {
        $pokemons = $this->dbdata->getListePokemonsByType($params["id"]); 

        $this->show(
            'typePokemons', 
            [
            'pokemon' => $pokemons,
            ]
        );
    }

}
