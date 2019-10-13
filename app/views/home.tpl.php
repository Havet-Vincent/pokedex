<main class="container d-flex flex-wrap col-12">
    <?php foreach ($params['pokemons'] as $pokemons) : ?>
    
            <div class="col-lg-4 col-md-6 col-12 p-2">
            <div class="pokemon-card d-flex flex-column  col-12 p-3">
                <img class="img-fluid card.image" src="<?=$params['imgURL'].$pokemons->getNumero().$params['imgRacine'];?>" alt="<?= $pokemons->getNom();?>">
                <a class="card-link" href="detail/pokemon/<?= $pokemons->getId(); ?>"><?= '#'.$pokemons->getNumero().' '.$pokemons->getNom();?></a>
            </div>
        </div>
    <?php endforeach; ?>
</main>


