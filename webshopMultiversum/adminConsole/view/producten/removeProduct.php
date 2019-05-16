<section>
  <?php
  $html = "";

  while ($product = $remove->fetch(PDO::FETCH_ASSOC)) {
    $html .= "<div class='col-md-4 thumbnail'>";
    $html .= "<h3 align='center'>";
    $html .= "Weet u zeker dat u ";
    $html .= "<b>" . $product['Naam'] . "</b>";
    $html .= " wilt verwijderen?";
    $html .= "</h3>";
    $html .= "<a href='index?op=verwijderd&id=" . $product['ProductsID'] . "'><button class='btn p-2'>";
    $html .= "<span class='glyphicon glyphicon-trash'></span> Ja ik wil dit product verwijderen</button></a>";
    $html .= "<a href='index'><button class='btn'>";
    $html .= "<span class='glyphicon glyphicon-remove'></span> Annuleren</button></a>";
    $html .= "</div>";
  }
  echo $html;
  ?>
</section>