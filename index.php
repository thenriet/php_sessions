<?php require 'inc/data/products.php';
session_start();

if(!empty($_GET['add_to_cart'])){
    $_SESSION['cookie_id'] = $_GET['add_to_cart'];
    foreach ($catalog as $id => $cookie){
        if($_SESSION['cookie_id'] == $id){
            $_SESSION['cookies'][] = $cookie;
        }
    }
}

?>

<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($catalog as $id => $cookie) : ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                        <a href="?add_to_cart=<?= $id; ?>" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
        <?php endforeach ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
