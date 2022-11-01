<?php
session_start();
require 'inc/head.php';
var_dump(($_SESSION['name']) );
?>

<section class="cookies container-fluid">
    <div class="row">
        TODO : Display shopping cart items from $_SESSION here.
        <?php if(!empty($_SESSION['name'])) : ?>
          <?= 'Bienvenue ' . $_SESSION['name'] . ' voici nos produits :' ?>
        <?php endif ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
