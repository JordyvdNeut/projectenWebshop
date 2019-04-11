<section>
  <?php 
    $html = "";

    if ($details) {
      while($detail = $details->fetch(PDO::FETCH_ASSOC)) {
        $detail['Prijs'] = str_replace('.', ',', $detail['Prijs']);
        $detail = preg_replace('/^$/', '<i>Geen gevens kunnen vinden</i>', $detail);

        $html .= "<div class='thumbnail'>";
        $html .=  "<h2>" . $detail['Naam'] . "</h2>";
        $html .= "<div class='productDetail'>";
        $html .= "<div>";
        // $html .=  "<img src='index?op=" . $detail['Img'] . " alt='AfbeeldingMoetVanuitDatabaseKomen' />";
        $html .=  "<div class='text-right'>";
        $html .=  "<h4>" . "Prijs: €" . $detail['Prijs'] . "</h4>";
        $html .=  "<a href='index?op=winkelwagen'><button type='submit' class='btn'><span class='glyphicon glyphicon-shopping-cart'></span> In mijn winkelmandje</button></a>";
        $html .=  "</div>";
        $html .=  "</div>";
        $html .=  "<hr>";
        $html .=  "<div class='caption'>";
        $html .=  "<h2>Productinformatie</h2>";
        $html .=  "<table>";
        $html .=  "<tr>";
        $html .=  "<th>" . "Merk" . "</th>";
        $html .=  "<td><strong>" . $detail['Merk']. "</strong</td>";
        $html .=  "</tr>";
        $html .=  "<tr>";
        $html .=  "<th>" . "Gezichtsveld" . "</th>";
        $html .=  "<td> </td>";
        $html .=  "<td>" . $detail['Gezichtsveld'] . "</td>";
        $html .=  "</tr>";
        $html .=  "<tr>";
        $html .=  "<th>" . "Resolutie" . "</th>";
        $html .=  "<td> </td>";
        $html .=  "<td>" . $detail['Resolutie'] . "</td>";
        $html .=  "</tr>";
        $html .=  "<tr>";
        $html .=  "<th>" . "Refresh Rate" . "</th>";
        $html .=  "<td> </td>";
        $html .=  "<td>" . $detail['RefreshRate'] . "</td>";
        $html .=  "</tr>";
        $html .=  "<tr>";
        $html .=  "<th>" . "Functies" . "</th>";
        $html .=  "<td> </td>";
        $html .=  "<td>" . $detail['Functies'] . "</td>";
        $html .=  "</tr>";
        $html .=  "<tr>";
        $html .=  "<th>" . "Aansluitingen" . "</th>";
        $html .=  "<td> </td>";
        $html .=  "<td>" . $detail['Aansluitingen'] . "</td>";
        $html .=  "</tr>";
        $html .=  "<tr>";
        $html .=  "<th>" . "Accessoires" . "</th>";
        $html .=  "<td> </td>";
        $html .=  "<td>" . $detail['Accessoires'] . "</td>";
        $html .=  "</tr>";
        $html .=  "<tr>";
        $html .=  "<th>" . "Kleur" . "</th>";
        $html .=  "<td> </td>";
        $html .=  "<td>" . $detail['Kleur'] . "</td>";
        $html .=  "</tr>";
        $html .=  "<tr>";
        $html .=  "<th>" . "Bijzonderheden" . "</th>";
        $html .=  "<td> </td>";
        $html .=  "<td>" . $detail['Bijzonderheden'] . "</td>";
        $html .=  "</tr>";
        $html .=  "</table>";
        $html .=  "</div>";
        $html .=  "</div>";
        $html .=  "</div>";
      }
      echo $html;
    } else {
        echo "Sorry de producten kunnen niet geladen worden";
    } 
  ?>
</section>