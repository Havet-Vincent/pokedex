<main class="container d-flex flex-column align-items-center col-12">
    <h1 class="detail-title mt-4 mb-4">Détails de <?= $params['pokemon']->getNom(); ?></h1>
    <div class="container d-flex flex-column flex-xl-row justify-content-between align-items-center col-12 px-2">
        <img class="detail-image pr-xl-3" src="<?=$params['imgURL'].$params['pokemon']->getNumero().$params['imgRacine'];?>">
        <div class="detail-card container d-flex flex-column justify-content-center col-12 col-xl mx-0 py-4">
            <h2 class="detail-name"><?='#'.$params['pokemon']->getNumero().' '.$params['pokemon']->getNom();?></h2>
            <div class="container d-flex p-0 mx-0">
                <?php foreach ($params['pokemon_types'] as $type) : ?>
                    <a class="detail-types mt-3 mb-3 p-2 mr-2" style="background: #<?=$type->getColor();?>;" href="liste/type/<?=$type->getId();?>"><?=$type->getName();?></a>
                <?php endforeach;?>
            </div>
                <div class="container-fluid table table-borderless ">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="stat-title pb-3">
                                    Statistiques
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                                <th class="stat-row-title" scope="row">PV</th>
                                <td><?=$params['pokemon']->getPv();?></td>
                                <td class="stat-bar-cell">
                                    <div class="progress stat-bar">
                                    <div class="progress-bar" role="progressbar" style="width: <?= ($params['pokemon']->getPv()*100)/255;?>%;" aria-valuenow="<?= ($params['pokemon']->getPv()*100)/255; ?>" aria-valuemin="0" aria-valuemax="100"></div>  
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="stat-row-title" scope="row">Attaque</th>
                                <td><?=$params['pokemon']->getAttaque();?></td>
                                <td class="stat-bar-cell">
                                    <div class="progress stat-bar">
                                        <div class="progress-bar stat-bar--full" style="width: <?= ($params['pokemon']->getAttaque()*100)/255;?>%" role="progressbar" aria-valuenow="<?=$params['pokemon']->getAttaque();?>" aria-valuemin="0" aria-valuemax="255"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="stat-row-title" scope="row">Défense</th>
                                <td><?=$params['pokemon']->getDefense();?></td>
                                <td class="stat-bar-cell">
                                    <div class="progress stat-bar">
                                        <div class="progress-bar stat-bar--full" style="width: <?= ($params['pokemon']->getDefense()*100)/255;?>%" role="progressbar" aria-valuenow="<?=$params['pokemon']->getDefense();?>" aria-valuemin="0" aria-valuemax="255"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="stat-row-title" scope="row">Attaque Spé.</th>
                                <td><?=$params['pokemon']->getAttaqueSpe();?></td>
                                <td class="stat-bar-cell">
                                <div class="progress stat-bar">
                                        <div class="progress-bar stat-bar--full" style="width: <?= ($params['pokemon']->getAttaqueSpe()*100)/255;?>%" role="progressbar" aria-valuenow="<?=$params['pokemon']->getAttaqueSpe();?>" aria-valuemin="0" aria-valuemax="255"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="stat-row-title" scope="row">Défense Spé.</th>
                                <td><?=$params['pokemon']->getDefenseSpe();?></td>
                                <td class="stat-bar-cell">
                                <div class="progress stat-bar">
                                        <div class="progress-bar stat-bar--full" style="width: <?= ($params['pokemon']->getDefenseSpe()*100)/255;?>%" role="progressbar" aria-valuenow="<?=$params['pokemon']->getDefenseSpe();?>" aria-valuemin="0" aria-valuemax="255"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="stat-row-title" scope="row">Vitesse</th>
                                <td><?=$params['pokemon']->getVitesse();?></td>
                                <td class="stat-bar-cell">
                                    <div class="progress ">
                                        <div class="progress-bar" role="progressbar" style="width: <?= ($params['pokemon']->getVitesse()*100)/255;?>%;" aria-valuenow="<?= $vitesse  ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
    <a class="back-link mt-3" href="<?=$params['baseURL'];?>">Retour à la liste</a>
</main>
  
