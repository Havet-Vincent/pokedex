<?php

/**
 * Contrôleur page detail pokemon
 */
class PokemonController extends CoreController {

    /**
     * Action /pokemon/id
     * Appellée lorsque l'url  est demandée  /
     */
    public function pokemon($params)
    {
        $pokemon = $this->dbdata->getPokemonDetail($params["id"]); 
        $pokemonNumber = $pokemon->getNumero();
        
        $pokemonTypes = $this->dbdata->getTypesFromPokemonDetail($pokemonNumber);

        $this->show(
            'pokemon', 
            [
            'pokemon' => $pokemon,
            'pokemon_types' => $pokemonTypes,
            ]
        );
    }

}
