<?php 



require 'inc/head.php';
require 'inc/data/products.php'; ?>

<section class="cookies container-fluid">
    <div class="row">
        <P> <?=var_dump($_COOKIE['shoptrack']) ?></P>

<h1> Liste de vos achats</h1>

        <?php        
        foreach ($catalog as $id => $cookie)
        $id = $_COOKIE['shoptrack']?>
<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                    </figcaption>
                </figure>
            </div>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
