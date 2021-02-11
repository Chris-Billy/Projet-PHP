<?php
require_once("init.php");
?>

<div class='courses__container'>

<?php
$query = $db->prepare('SELECT * FROM product');
$query->execute();
$datas = $query->fetchAll(PDO::FETCH_ASSOC);
foreach ($datas as $element):
?>

  <div class='course__item'>
    <figure class='course_img'>
      <i class="fas fa-tags fa-5x"></i>
    </figure>
    <div class='info__card'>
      <h4><?= ucfirst($element['intitule']) ?></h4>
      <p>
        <span class='discount'><?= $element['prix'] ?> €</span>
      </p><br>
      <p><?= ucfirst($element['description']) ?></p><br>
      <button class='add-to-cart' data-id='1'><i class='fa fa-cart-plus'></i>Ajouter au panier</button>
    </div>
  </div>

<?php endforeach; ?>

</div>