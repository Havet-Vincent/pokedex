<?php


// CONTROLLERS
require_once __DIR__ . '/../app/controllers/CoreController.php';
require_once __DIR__ . '/../app/controllers/MainController.php';
require_once __DIR__ . '/../app/controllers/PokemonController.php';
require_once __DIR__ . '/../app/controllers/TypesController.php';
require_once __DIR__ . '/../app/controllers/TypeController.php';


// UTILS
require_once __DIR__ . '/../app/utils/DBData.php';


// MODELS
require_once __DIR__ . '/../app/models/CoreModel.php';
require_once __DIR__ . '/../app/models/Pokemon.php';
require_once __DIR__ . '/../app/models/Type.php';


// inclusion de l'autoload de composer
require __DIR__.'/../vendor/autoload.php';



// instanciation d'un router AltoRouter
$router = new AltoRouter;

// on récupère la valeur de BASE_URI dans la superglobale $_SERVER (définie grâce au .htaccess)
$baseUrl = isset($_SERVER['BASE_URI']) ? trim($_SERVER['BASE_URI']) : '/';

$router->setBasePath($baseUrl);


// Prévoir les routes avec Altorouter

// route home
$router->map(
    'GET',
    '/',
    [
        'controller' => 'MainController',
        'method' => 'home'
    ],
    'home'
);

// route pokemon detail
$router->map(
    'GET',
    '/detail/pokemon/[i:id]',
    [
        'controller' => 'PokemonController',
        'method' => 'pokemon'
    ],
    'pokemon'
);

// route liste types
$router->map(
    'GET',
    '/liste/types/',
    [
        'controller' => 'TypesController',
        'method' => 'types'
    ],
    'types'
);

// route pokemon par type
$router->map(
    'GET',
    '/liste/type/[i:id]',
    [
        'controller' => 'TypeController',
        'method' => 'typePokemon'
    ],
    'list-type'
);


$match = $router->match();




// si $match est bien un array, c'est à dire si une route définie plus haut (map()) correspond à l'url qu'on visite
if(is_array($match)){

    // alors on récupère les noms de la classe du controller et de la méthode à appeller dessus
    $controllerToInstanciate = $match['target']['controller'];
    $methodToCall = $match['target']['method'];

    // à l'exécution, PHP va remplacer cette variable $controllerToInstanciate par sa valeur : MainController
    $controller = new $controllerToInstanciate($router);

    $controller->$methodToCall($match['params']);

} else {

	// no route was matched
	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}
