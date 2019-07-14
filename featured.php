<?php require_once('db_functions.php')?>

<article class='row m-3 justify-content-center '>
  <?php

  $allItems = getItems( HOME_NUMBER_OF_ARTICLES );

  $item = mysqli_fetch_assoc($allItems);

  while (  $item == true ) {

      if ($item['status'] == 1) {

    echo "<div class='col-lg-5 m-4 col-md-12'><a href='template_product.php?id=" . $item['id'] . "'>";
    echo "<img class='item-img img-responsive img-thumbnail' src='img/" . $item['imgname'] . ".jpg'>";
    echo "<div class= 'col-12 text-center m-2 text-dark'><h4 class='font-weight-light card-title'>" . $item['name'] . "</h4>";
    echo "<h5 class='font-weight-light'>" . $item['price'] . " Eur</h5></div>";
    echo "</div></a>";

  }
  $item = mysqli_fetch_assoc($allItems);
    }
  ?>
</article>
