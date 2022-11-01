<?php
require 'inc/data/products.php';
session_start();

if(empty($_SESSION['name'])){
  header("Location: login.php");
}

require 'inc/head.php';
?>

<section class="cookies container-fluid">
  <h1>
    Tu as sélectionné les cookies suivants :©
  </h1>
    <div class="row">
      <ul>
        <?php foreach (($_SESSION['cookies']) as $cookie) :?> 
          <li>
            <?= $cookie['name'] ?> 
          </li>
          <?php endforeach ?>
      </ul>
    </div>
</section>

<?php 
require 'inc/foot.php'; 
?>
