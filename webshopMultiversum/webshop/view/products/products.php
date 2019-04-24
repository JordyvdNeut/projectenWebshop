<section>
  <?php
  require_once "controller/productsController.php";

  $html = "";

  // Filter
  // if($brands) {
  //   $html .=  "<div class='filter thumbnail'>";
  //   $html .=  "</div>";
  // }

  // products
  if ($products) {
    while ($row = $products->fetch(PDO::FETCH_ASSOC)) {
      $row['Prijs'] = str_replace('.', ',', $row['Prijs']);
      $row = preg_replace('/^$/', '<i>Geen gevens kunnen vinden</i>', $row);

      $html .= "<div class='col-md-3 productMarg thumbnail'><a href='index?op=details&id=" . $row['ProductsID'] . "'>";
      $html .=  "<h3>" . $row['Naam'] . "</h3>";
      // $html .=  "<img src='" . $row['Img'] . "' class='img-responsive' alt='fix img' />";
      $html .=  "<div class='caption'>";
      $html .=  "<table>";
      $html .=  "<tr>";
      $html .=  "<th>" . "Prijs" . "</th>";
      $html .=  "<td align='right'>€ " . $row['Prijs'] . "</td>";
      $html .=  "</tr>";
      $html .=  "<tr>";
      $html .=  "<th>" . "Merk" . "</th>";
      $html .=  "<td align='right'>" . $row['Merk'] . "</td>";
      $html .=  "</tr>";
      $html .=  "<tr>";
      $html .=  "<th>" . "Resolutie" . "</th>";
      $html .=  "<td align='right'>" . $row['Resolutie'] . "</td>";
      $html .=  "</tr>";
      $html .=  "</table>";
      $html .=  "</div>";
      $html .=  "<a href='index?op=details&id=" . $row['ProductsID'] . "'><button class='btn'>Details</button></a>";
      $html .=  "<a href='index?op=winkelwagen'><button class='btn'>Bestellen</button></a>";
      $html .=  "</a></div>";
    }
    echo $html;
  } else {
    echo "Sorry de producten kunnen niet geladen worden";
  };
  ?>
</section>