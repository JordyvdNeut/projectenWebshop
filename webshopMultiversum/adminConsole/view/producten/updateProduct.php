<section>
  <a href="index"><button class="btn"><span class="glyphicon glyphicon-arrow-left"></span> Ga terug naar overzicht</button></a>
  <br><br>
  <?php
  $html = "";
  while ($row = $product->fetch(PDO::FETCH_ASSOC)) {

    $html .= "<div class='col-md-4 thumbnail'>";
    $html .= "<h2>Bewerk hier <strong>" . $row['Naam'] . "</strong></h2>";
    $html .= "<p>Product id: <strong>" . $row['ProductsID'] . "</strong></p>";
    $html .= "<br />";
    $html .= "<form action='index.php?op=bewerkt&id=" . $row['ProductsID'] . "'method='post'>";
    $html .= "<label>Product naam: </label>";
    $html .= "<input class='form-control' type='text' value='" . $row['Naam'] . "' name='product_name' required>";
    $html .= "<label>Prijs: </label>";
    $html .= "<input class='form-control' type='number' value='" . $row['Prijs'] . "' name='product_price' required>";
    $html .= "<label>Merk: </label>";
    $html .= "<input class='form-control' type='text' value='" . $row['Merk'] . "' name='product_brand' required>";
    $html .= "<br />";
    $html .= "<label>Kleur: </label>";
    $html .= "<input class='form-control' type='text' value='" . $row['Kleur'] . "' name='product_color'>";
    $html .= "<label>Resolutie: </label>";
    $html .= "<input class='form-control' type='text' value='" . $row['Resolutie'] . "' name='product_resolution'>";
    $html .= "<label>Refresh snelheid: </label>";
    $html .= "<input class='form-control' type='text' value='" . $row['RefreshRate'] . "' name='product_refresh_rate'>";
    $html .= "<label>gezichtsveld: </label>";
    $html .= "<input class='form-control' type='text' value='" . $row['Gezichtsveld'] . "' name='product_fov'>";
    $html .= "<label>Functie's: </label>";
    $html .= "<input class='form-control' type='text' value='" . $row['Functies'] . "' name='product_functions'>";
    $html .= "<label>Aansluitingen: </label>";
    $html .= "<input class='form-control' type='text' value='" . $row['Aansluitingen'] . "' name='product_connections'>";
    $html .= "<label>Accessoires: </label>";
    $html .= "<input class='form-control' type='text' value='" . $row['Accessoires'] . "' name='product_accessories'>";
    $html .= "<br />";
    $html .= "<label>Bijzonderheden: </label>";
    $html .= "<textarea class='form-control' type='text' value='" . $row['Bijzonderheden'] . "' name='product_particularities'></textarea>";
    $html .= "<br />";
    $html .= "<input type='submit' class='btn' value='Bewerken'>";
    $html .= "</form>";
    $html .= "<div>";
  }
  echo $html;
  ?>
</section>