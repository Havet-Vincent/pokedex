<main class="container-fluid col-12">
    <div class="col-12 d-flex flex-wrap m-1 p-0">
        <h4 class ="col-12 type-text p-1">Cliquer sur un type pour voir tous les Pokémon de ce type</h4>     
        <?php foreach ($params['types'] as $types) : ?>
            <div class="col-lg-3 col-md-4 col-6 p-1">
                <a class="type-card type-link col-12 p-3" style="background: #<?=$types->getColor();?>;" href="liste/type/<?=$types->getId();?>"><?= $types->getName();?></a>
            </div>
        <?php endforeach; ?>
    </div>
</main>