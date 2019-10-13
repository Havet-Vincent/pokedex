<?php

/**
 * Contrôleur page home
 */
class TypesController extends CoreController {

    /**
     * Action liste/types
     * Appellée lorsque l'url  est demandée  /
     */
    public function types()
    {
        $types= $this->dbdata->getListeTypes(); 

        $this->show(
            'types', 
            [
            'types' => $types,
            ]
        );
    }

}
