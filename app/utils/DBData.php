<?php

/**
 * Classe permettant de retourner des données stockées dans la base de données
 */
class DBData {
	/** @var PDO */
	private $dbh;

    /**
     * Constructeur se connectant à la base de données à partir des informations du fichier de configuration
     */
    public function __construct() {

        $configData = parse_ini_file(__DIR__.'/../../config.ini');
        
        try {
            $this->dbh = new PDO(
                "mysql:host={$configData['DB_HOST']};dbname={$configData['DB_NAME']};charset=utf8",
                $configData['DB_USERNAME'],
                $configData['DB_PASSWORD'],
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING) // Affiche les erreurs SQL à l'écran
            );
        }
        catch(\Exception $exception) {
            echo 'Erreur de connexion...<br>';
            echo $exception->getMessage().'<br>';
            echo '<pre>';
            echo $exception->getTraceAsString();
            echo '</pre>';
            exit;
        }
    }
    
    /**
     * Méthode permettant de retourner les pokemons sur la page d'accueil
     *
     * @return Category[]
     */
    public function getHomePokemons() {
        $sql = "SELECT `pokemon`.`nom`, `pokemon`.`id`, `pokemon`.`numero` 
        FROM `pokemon`
        ORDER BY `pokemon`.`numero`";

        $statement = $this->dbh->query($sql);
        $pokemons = $statement->fetchAll(PDO::FETCH_CLASS, "Pokemon");

        return $pokemons;
    }
    
     /**
     * Méthode permettant de retourner un pokemon en détail 
     *
     * @return Pokemon[]
     */
     
    public function getPokemonDetail($pokemonId) {
        $sql = "SELECT * 
        FROM `pokemon`
        WHERE `pokemon`.`id` = $pokemonId";

        $statement = $this->dbh->query($sql);
        $pokemon = $statement->fetchObject('Pokemon'); 
        return $pokemon;
    }


    /**
     * Méthode permettant de retourner les types d'un pokemon   
     *
     * @return Pokemon[]
     */
    public function getTypesFromPokemonDetail($pokemonNumber)
    {
        $sql = "SELECT `type`.`id`, `type`.`name`, `type`.`color` 
        FROM `type` 
        INNER JOIN `pokemon_type` 
        ON `pokemon_type`.`pokemon_numero` = $pokemonNumber 
        AND `pokemon_type`.`type_id` = `type`.`id`";

        $statement = $this->dbh->query($sql);
        $pokemonTypes = $statement->fetchAll(PDO::FETCH_CLASS,'Type');
        return $pokemonTypes;        
     }
   
 
    /**
     * Méthode permettant de retourner la liste des  types 
     *
     * @return Types[]
     */
    public function getListeTypes() {

        $sql = "SELECT * FROM `type`
        ORDER BY `type`.`name`";

        $statement = $this->dbh->query($sql);
        $types = $statement->fetchAll(PDO::FETCH_CLASS, 'Type');
        return $types;
    }
   
   /**
     * Méthode permettant de retourner les pokemons par type
     *
     * @return Type[]
     */
    public function getListePokemonsByType($typePokemonId) {

        $sql = "SELECT `pokemon`.`nom`, `pokemon`.`id`, `pokemon`.`numero` 
        FROM `pokemon` 
        INNER JOIN `pokemon_type` ON `pokemon_type`.`pokemon_numero` = `pokemon`.`numero`
        AND `pokemon_type`.`type_id` = $typePokemonId
        ORDER BY `pokemon`.`numero`";

        $statement = $this->dbh->query($sql);
        $type = $statement->fetchAll(PDO::FETCH_CLASS, 'Pokemon');
        return $type;
    }



        
       
}
    
 
