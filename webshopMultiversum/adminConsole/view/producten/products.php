<?php
  require_once 'controller/productsController.php';
?>
<section>
  <a href="index?op=createForm"><button class="btn">Product toevoegen</button></a>
  <br /><br />

  <?php
  $html = "";

  // products
  if ($products) {
    while ($row = $products->fetch(PDO::FETCH_ASSOC)) {
      $html .= "<div class='productMarg thumbnail'>";
      // $html .=  "<img src='" . echo $row['Img']; . "' class='img-responsive' alt='fix img' />";
      $html .=  "<h3>" . $row['Naam'] . "</h3>";
      $html .=  "<p>" . "Prijs: " . $row['Prijs'] . " " . " ";
      $html .=  "Merk: " . $row['Merk'] . "</p>";
      $html .=  "<a href='index?op=bewerken&id=" . $row['ProductsID'] . "'><button class='btn'>Bewerken</button></a>";
      $html .=  "<a href='index?op=verwijderen&id=" . $row['ProductsID'] . "'><button type='submit' class='btn'>Verwijderen</button></a>";
      $html .=  "</div>";
    }
    echo $html;
  } else {
    echo "Sorry de producten kunnen niet geladen worden";
  };
  ?>
</section>