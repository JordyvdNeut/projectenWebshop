<?php
  require_once 'controller/productsController.php';
?>
<section>
  <a href="index?op=createForm"><button class="btn createBtn">Product toevoegen</button></a>
  <br /><br />

  <?php
  $html = "";

  // products
  if ($products) {
    while ($row = $products->fetch(PDO::FETCH_ASSOC)) {
      $html .= "<div class='productMarg thumbnail'>";
      // $html .=  "<img src='" . echo $row['Img']; . "' class='img-responsive' alt='fix img' />";
      $html .=  "<h3><b>" . $row['Naam'] . "</b></h3>";
      $html .=  "<p>" . "<b>Prijs: </b>" . $row['Prijs'] . " " . " ";
      $html .=  "<b>Merk: </b>" . $row['Merk'] . "</p>";
      $html .=  "<a href='index?op=bewerken&id=" . $row['ProductsID'] . "'><button class='btn'><span class='glyphicon glyphicon-pencil'></span> Bewerken</button></a>";
      $html .=  "<a href='index?op=verwijderen&id=" . $row['ProductsID'] . "'><button type='submit' class='btn removeBtn'><span class='glyphicon glyphicon-remove'></span> Verwijderen</button></a>";
      $html .=  "</div>";
    }
    echo $html;
  } else {
    echo "Sorry de producten kunnen niet geladen worden";
  };
  ?>
</section>